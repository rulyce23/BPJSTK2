<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Auth;


class UserController extends Controller
{

    public function __construct()
    {
        $this->user = new User();
      
    }

    public function index()
    {
		
		 $user = User::all();
		 
        return view('cs.user.users',compact('user',$user));
    }

    public function source(){
        $query= User::query();
        return DataTables::eloquent($query)
        ->filter(function ($query) {
            if (request()->has('search')) {
                $query->where(function ($q) {
                    $q->where('name', 'LIKE', '%' . request('search')['value'] . '%');
                });
            }
            })
            ->addColumn('name', function ($data) {
                return title_case($data->name);

            })
            
            ->addIndexColumn()
            ->addColumn('action', 'cs.user.users-action')
            ->rawColumns(['action'])
            ->toJson();
    }

    public function create()
    {
        
        return view('cs.user.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $request = $request->merge(['password'=>Hash::make($request->password)]);
            $user = $this->user->create($request->all());
            DB::commit();
            return redirect()->route('cs.user.users')->with('success-message','Data telah disimpan');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error-message',$e->getMessage());
        }


    }

    public function show($id)
    {
        $data = $this->user->find($id);
        return $data;

    }

    public function edit($id)
    {
      
        $data = $this->user->find($id);
        return view('cs.user.edit',compact(['data']));

    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $request = $request->merge(['password'=>Hash::make($request->password)]);
            $this->user->find($id)->update($request->all());
            DB::commit();
            return redirect()->route('cs.user.users',$request->menu_id)->with('success-message','Data telah dirubah');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error-message',$e->getMessage());
        }
    }

    public function destroy($id)
    {
        $this->user->destroy($id);
        return redirect()->back()->with('success-message','Data telah dihapus');

    }

    public function change(){
        return view('cs.user.change');
    }

    public function updatePassword(Request $request){
        // $credentials = ['password'=>]
        // if(Auth::attempt){

        // }
        if (Hash::check($request->old_password, Auth::user()->password)) {
            if($request->new_password != $request->confirm_password){
                return redirect()->back()->with("error-message","Maaf konfirmasi password salah");
            }else{
                $user = Auth::user();
                $user->password = bcrypt($request->new_password);
                $user->save();
                return redirect()->back()->with("success-message","Password Berhasil Diganti");
            }
        }else{
            return redirect()->back()->with("error-message","Maaf password salah");
        }
    }

}
