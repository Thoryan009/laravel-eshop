<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerAuthController extends Controller
{
    public $customer;

    public function loginPage()
    {
        return view('customer.auth.login');
    }

    public function loginAccount(Request $request)
    {
        $this->customer = Customer::where('email', $request->email)->first();
        if($this->customer)
        {
            if(password_verify($request->password, $this->customer->password))
            {
                Session::put('id', $this->customer->id);
                Session::put('name', $this->customer->name);
                return redirect('/');

            }
            else
            {
                return back()->with('message', 'Password id invalid');
            }
        }
        else
        {
            return back()->with('message', 'Email id invalid');
        }
    }

    public function registerPage()
    {
        if (Session::get('id'))
        {
            return redirect('/checkout/billing-info');
        }
        return view('customer.auth.register');
    }

    public function registerAccount(Request $request)
    {
       $this->customer =  Customer::newCustomer($request);

        Session::put('id', $this->customer->id);
        Session::put('name', $this->customer->name);

        return redirect('/customer/dashboard');
    }


    public function logout()
    {
        Session::forget('id');
        Session::forget('name');
        return redirect('/');
    }

}
