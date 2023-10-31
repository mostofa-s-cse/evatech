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

 public function create()
 {
     return view('back-end.pages.hire.create');
 }

 public function store(Request $request)
 {   
     $request->validate([
         'title' => 'required',
         'sub_title' => 'required',
         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
     ]);

     $fileName = time() . '.' . $request->image->extension();
     $request->image->storeAs('public/images', $fileName);
     
     $user = new Hire;
     $user->title = $request->input('title');
     $user->sub_title = $request->input('sub_title');
     $user->image = $fileName;
     $user->save();

     return redirect()->route('hire.index')->with([
         'message' => 'User added successfully!', 
         'status' => 'success'
     ]);
 }
}
