<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use App\Customer;
use App\Image;

class CsController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = 'cs/dashboard';

    public function __construct()
    {
        $this->cs = new User();
        $this->customer = new Customer();
    
    }

    public function username()
    {
        return 'username';
    }

    public function showLoginForm()
    {
        return view('cs.login');
    }

    public function dashboard(){
        $cs = $this->cs;
        $customer = $this->customer;
		 $typeCounts= DB::table('t_pelanggan')->where('status2','=','Belum Dicek & Diverifikasi','And','deleted_at','=','')->get();
		 $typeCounts2= DB::table('t_pelanggan')->where('status2','=','Telah Dicek & Diverifikasi','And','deleted_at','=','')->get();
		 $typeCounts3= DB::table('t_pelanggan')->where('status2','=','Telah Dicek & Ditolak','And','deleted_at','=','')->get();
		$transaction_data = [];
        for($i=1;$i<=12;$i++){
            $lul = $this->customer->whereMonth('created_at',sprintf('%02s',$i))->whereYear('created_at',date('Y'))->get()->count();
            $transaction_data [] = $lul;
        }
      
        return view('cs.dashboard.index',compact(['cs','customer','typeCounts','typeCounts2','typeCounts3']));
    }
	
	    public function customer(){
        $cs = $this->cs;
        $customer = customer::all();
     
      
        return view('cs.dashboard.customer',compact(['cs',$cs,'customer',$customer]));
    }
	
	  public function destroy($id)
    {
     
	  DB::table('t_pelanggan')->where('id',$id)->delete();

        return redirect('/cs/dashboard')->with('success', 'Data Pelanggan telah berhasil di hapus');
    }
	
	
		  public function verifikasi($id,Request $request)
    {
		
     
	    $data = Customer::where('id',$id)->first();
        $data->status2 ='Telah Dicek & Diverifikasi';
        $data->save();

        return redirect('/cs/dashboard')->with('success', 'Data Pelanggan telah berhasil di verifikasi');
    }
	
		  public function edit($id)
    {
		 $data = Customer::find($id);
		 $data2 = User::all();
	

        return view('cs.dashboard.edit',['data'=>$data,'data2'=>$data2]);
    }
	
		  public function editpost($id,Request $request)
    {
	
		$data = Customer::find($id);
        $data->nama=$request->nama;
        $data->id_cs= $request->user()->id;
        $data->no_kpj=$request->no_kpj;
        $data->klaim=$request->klaim;
        $data->save();

       return redirect('/cs/dashboard')->with('success', 'Data Kesalahan Pelanggan telah berhasil di perbaharui');
    }
	
	  public function tolak($id,Request $request)
    {
		
     
	    $data = Customer::where('id',$id)->first();
		$data2 = User::all();
        $data->status2 ='Telah Dicek & Ditolak';
		$data->id_cs=$data2->id;
        $data->alasan ='Salah Satu File Scan / Upload Berkas Foto Anda Rusak,Atau Tidak Terbaca Ataupun File Yang Anda Scan / Upload salah Dalam Urutan Scan / Upload Berkas Foto';
        $data->save();

        return redirect('/cs/dashboard')->with('success', 'Data Pelanggan telah berhasil di verifikasi');
    }
	
	

}
