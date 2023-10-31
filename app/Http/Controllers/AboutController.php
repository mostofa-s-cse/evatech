<?php

namespace App\Http\Controllers;
use App\Models\About;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index(){
        $abouts = About::get();
        return view('back-end.pages.about.index',compact('abouts'));
 } 

}
