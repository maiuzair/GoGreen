<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests; 

// MODELS
use App\Models\Customer;
use App\Models\Admin;
use App\Models\ProductModel;

class CustomerController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function showLoginForm()
    {
        return view('login');
    }

    public function showSignupForm()
    {
        return view('signup');
    }


    public function signup(Request $request){

        $customer = new Customer();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
            
        ]);

        $customer->Name = $request['name'];
        $customer->Email = $request['email'];
        $customer->Password = $request['password'];
        $customer->Phone = $request['phone'];
        $customer->Address = $request['address'];
        $customer->save();
        return redirect()->route('login')->with('message', 'Successfully registered');

    }

    public function login(Request $request){

        if ($request->isMethod('post')){
            $email = $request->input('email');
            $password = $request->input('password');
    
            $customers = Customer::where('Email', $email)->where('Password', $password);
            
            if($customers->exists()){
                $customer = $customers->first();
                $request->session()->put('customer_id', $customer->id);
                $request->session()->put('customer_name', $customer->Name);
                $request->session()->put('customer_email', $customer->Name);
                // $request->session()->put('customer_name', $customer->Name);

                return redirect()->intended('customerProfile');
            }
    
            return redirect()->route('login')->with('error', 'Invalid credentials');
    
        }
    }

    public function logout(Request $request){
        $request->session()->forget('customer_id');
        $request->session()->forget('customer_email');
        $request->session()->forget('customer_name');

        return redirect('login')->with('error', 'Logged out');
    }

    public function profile(Request $request){
        if ($request->session()->has('customer_id')){
            return view('customerProfile');
        }
        return redirect('login')->with('error', 'Login Required'); 
    }



}
