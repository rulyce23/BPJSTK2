<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Image;
use App\Customer;


class ImageController extends Controller
{   

	 public function createStep3(Request $request)
    {
        $request->session()->forget('customer');

        $products = \App\Image::all();
		$itema = Customer::all(['id', 'nama']);
		$Image = new Image([
            'id_customer'=>$request->get('id'),
			 ]);
			 
	return view('customer.step3', compact('products',$products,'itema',$itema,'Image',$Image));
      
    }

    public function PostcreateStep3(Request $request)
    {
			
		$products = new \App\Image();
        $s_ktp = $request->file('s_ktp');
        $ext = $s_ktp->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $s_ktp->move('data_file',$newName);
        $products->s_ktp = $newName;
		$products->id_customer = $request->get('id');
		$Image = new Image([
            'id_customer'=>$request->get('id'),
			 ]);
			   $products->save();
	return redirect('/create4')->with('alert-success','Data berhasil ditambahkan!');
    }
    
	
	 public function createStep4(Request $request)
    {
        $customer = $request->session()->get('customer');

        return view('customer.step4',compact('customer'));
    }


	  public function PostcreateStep4(Request $request)
    {
        $validatedData = $request->validate([
            'klaim' => 'required|unique:t_pelanggan',
        ]);
        if(empty($request->session()->get('customer'))){
            $customer = new \App\Customer();
            $customer->fill($validatedData);
            $request->session()->put('customer', $customer);
        }else{
            $customer = $request->session()->get('customer');
            $customer->fill($validatedData);
            $request->session()->put('customer', $customer);
        }
        return redirect('/create5');
    }
	
	
	 public function createStep5(Request $request)
    {
        $customer = $request->session()->get('customer');

        return view('customer.step5',compact('customer'));
    }


	  public function PostcreateStep5(Request $request)
    {
        $validatedData = $request->validate([
            'klaim' => 'required|unique:t_pelanggan',
        ]);
        if(empty($request->session()->get('customer'))){
            $customer = new \App\Customer();
            $customer->fill($validatedData);
            $request->session()->put('customer', $customer);
        }else{
            $customer = $request->session()->get('customer');
            $customer->fill($validatedData);
            $request->session()->put('customer', $customer);
        }
        return redirect('/create6');
    }
	
		 public function createStep6(Request $request)
    {
        $customer = $request->session()->get('customer');

        return view('customer.stepfinal',compact('customer'));
    }


	  public function PostcreateStep6(Request $request)
    {
        $validatedData = $request->validate([
            'klaim' => 'required|unique:t_pelanggan',
        ]);
        if(empty($request->session()->get('customer'))){
            $customer = new \App\Customer();
            $customer->fill($validatedData);
            $request->session()->put('customer', $customer);
        }else{
            $customer = $request->session()->get('customer');
            $customer->fill($validatedData);
            $request->session()->put('customer', $customer);
        }
        return redirect('/createfinal');
    }
}