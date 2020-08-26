<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Customer;


class CustomerController extends Controller
{   	
	
    public function createStep1(Request $request)
    {
        $customer = $request->session()->forget('customer');
	 
        return view('customer.create',compact('customer'));
    }

	public function PostcreateStep1(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:100|unique:t_pelanggan',
            'no_kpj' => 'required|max:20|unique:t_pelanggan',
        ]);
		
        if(empty($request->session()->get('customer'))){
            $customer = new Customer();
            $customer->fill($validatedData);
            $request->session()->put('customer', $customer);
        }else{
            $customer = $request->session()->get('customer');
            $customer->fill($validatedData);
            $request->session()->put('customer', $customer);
        }
        return redirect()->route('customer.create.step.two');
    }
	
	
	  public function createStep2(Request $request)
    {
        $customer = $request->session()->get('customer');

        return view('customer.step2',compact('customer'));
    }

    public function PostcreateStep2(Request $request)
    {
		
		 $validatedData = $request->validate([
            'klaim' => 'required',
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
		
       return redirect()->route('customer.create.step.three');
      
    }
	
 public function createStep3(Request $request)
    {
           $customer = $request->session()->get('customer');

		 
	return view('customer.step3', compact('customer'));
      
    }

    public function PostcreateStep3(Request $request)
    {  
	
	$customer = $request->session()->get('customer');

        if(!isset($customer->s_ktp)) {
            $request->validate([
                's_ktp' => 'required|image|mimes:jpeg,jpg|max:5048',
            ]);
             $fileName = time().'.'.$request->s_ktp->extension();  
			$request->s_ktp->storeAs('s_ktp', $fileName);
			$request->s_ktp->move(public_path('img/customer/s_ktp'), $fileName);
            $customer = $request->session()->get('customer');
            $customer->s_ktp = $fileName;
            $request->session()->put('customer', $customer);
        }

       return redirect()->route('customer.create.step.four');
    }
    
	
	 public function createStep4(Request $request)
    {
        $customer = $request->session()->get('customer');

        return view('customer.step4',compact('customer'));
    }

public function PostcreateStep4(Request $request)
    {  
	
	$customer = $request->session()->get('customer');

        if(!isset($customer->s_vaklaring)) {
            $request->validate([
                's_vaklaring' => 'required|image|mimes:jpeg,jpg|max:5048',
            ]);
            $fileName = time().'.'.$request->s_vaklaring->extension();  
			$request->s_vaklaring->storeAs('s_vaklaring', $fileName);
			$request->s_vaklaring->move(public_path('img/customer/s_vaklaring'), $fileName);
            $customer = $request->session()->get('customer');
            $customer->s_vaklaring = $fileName;
            $request->session()->put('customer', $customer);
        }

       return redirect()->route('customer.create.step.five');
    }
	
	
	 public function createStep5(Request $request)
    {
        $customer = $request->session()->get('customer');

        return view('customer.step5',compact('customer'));
    }

public function PostcreateStep5(Request $request)
    {  
	
	$customer = $request->session()->get('customer');

        if(!isset($customer->s_kk)) {
            $request->validate([
                's_kk' => 'required|image|mimes:jpeg,jpg|max:5048',
            ]);
             $fileName = time().'.'.$request->s_kk->extension();  
			$request->s_kk->storeAs('s_kk', $fileName);
			$request->s_kk->move(public_path('img/customer/s_kk'), $fileName);
            $customer = $request->session()->get('customer');
            $customer->s_kk = $fileName;
            $request->session()->put('customer', $customer);
        }

       return redirect()->route('customer.create.step.six');
    }
	
	
		 public function createStep6(Request $request)
    {
        $customer = $request->session()->get('customer');

        return view('customer.step6',compact('customer'));
    }

public function PostcreateStep6(Request $request)
    {  
	
	$customer = $request->session()->get('customer');

        if(!isset($customer->s_kbpjs)) {
            $request->validate([
                's_kbpjs' => 'required|image|mimes:jpeg,jpg|max:5048',
            ]);
             $fileName = time().'.'.$request->s_kbpjs->extension();  
			$request->s_kbpjs->storeAs('s_kbpjs', $fileName);
			$request->s_kbpjs->move(public_path('img/customer/s_kbpjs'), $fileName);
            $customer = $request->session()->get('customer');
            $customer->s_kbpjs = $fileName;
            $request->session()->put('customer', $customer);
        }

       return redirect()->route('customer.create.step.seven');
    }
	 public function createStep7(Request $request)
    {
        $customer = $request->session()->get('customer');

        return view('customer.step7',compact('customer'));
    }

public function PostcreateStep7(Request $request)
    {  
	
	$customer = $request->session()->get('customer');

        if(!isset($customer->s_tabung)) {
            $request->validate([
                's_tabung' => 'required|image|mimes:jpeg,jpg|max:5048',
            ]);
            $fileName = time().'.'.$request->s_tabung->extension();  
			$request->s_tabung->storeAs('s_tabung', $fileName);
			$request->s_tabung->move(public_path('img/customer/s_tabung'), $fileName);
            $customer = $request->session()->get('customer');
            $customer->s_tabung = $fileName;
            $request->session()->put('customer', $customer);
        }

       return redirect()->route('customer.create.step.eight');
    }
	
	 public function store(Request $request)
    {
		  $customer = $request->session()->get('customer');


        return view('customer.step8',compact('customer'));
    }

	
	 public function posting(Request $request)
    {
          	  $customer = $request->session()->get('customer');
        $customer->save();
       
       
       return redirect()->route('customer.create.step.one');
    }
}
?>