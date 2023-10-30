<?php

namespace App\Http\Controllers;
use App\Models\Provide;
use Illuminate\Http\Request;

class ProvideController extends Controller
{
    //
    public function index(){
        $provides = Provide::get();
        return view('back-end.pages.provide.index',compact('provides'));
 }
}
