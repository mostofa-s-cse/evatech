<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(){
        $customers = Customer::get();
        return view('back-end.pages.customer.index',compact('customers'));
 }
    
}
