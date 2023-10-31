<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    //
    public function index(){
        $customers = Customer::get();
        return view('back-end.pages.customer.index',compact('customers'));
 }
    
}
