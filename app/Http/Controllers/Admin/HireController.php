<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Hire;


class HireController extends Controller
{
   public function index(){
        $hires = Hire::get();
        return view('back-end.pages.hire.index',compact('hires'));
 } 
}
