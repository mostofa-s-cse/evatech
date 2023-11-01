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

 public function create()
 {
     return view('back-end.pages.about.create');
 }

 public function store(Request $request)
 {   
     $request->validate([
         'title' => 'required',
         'discription' => 'required',
     ]);
  
     $user = new About;
     $user->title = $request->input('title');
     $user->discription = $request->input('discription');
     $user->save();

     return redirect()->route('about.index')->with([
         'message' => 'User added successfully!', 
         'status' => 'success'
     ]);
 }

}
