<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Provide;


class ProvideController extends Controller
{
    //
    public function index(){
        $provides = Provide::get();
        return view('back-end.pages.provide.index',compact('provides'));
 }
}
