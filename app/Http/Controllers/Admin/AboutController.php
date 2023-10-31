<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;


class AboutController extends Controller
{
    //
    public function index(){
        $abouts = About::get();
        return view('back-end.pages.about.index',compact('abouts'));
 } 

}
