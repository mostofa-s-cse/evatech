<?php

namespace App\Http\Controllers;
use App\Models\Hire;
use Illuminate\Http\Request;

class HireController extends Controller
{
   public function index(){
        $hires = Hire::get();
        return view('back-end.pages.hire.index',compact('hires'));
 } 
}
