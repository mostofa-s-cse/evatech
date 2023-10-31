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

 
 public function create()
 {
     return view('back-end.pages.provide.create');
 }

 public function store(Request $request)
 {   
     $request->validate([
         'provide_title' => 'required',
         'provide_sub_title' => 'required',
         'provide_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
     ]);

     $fileName = time() . '.' . $request->provide_image->extension();
     $request->provide_image->storeAs('public/images', $fileName);
     
     $user = new Provide;
     $user->provide_title = $request->input('provide_title');
     $user->provide_sub_title = $request->input('provide_sub_title');
     $user->provide_image = $fileName;
     $user->save();

     return redirect()->route('provide.index')->with([
         'message' => 'User added successfully!', 
         'status' => 'success'
     ]);
 }

}
