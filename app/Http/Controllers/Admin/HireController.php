<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
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
         'message' => 'Hire added successfully!', 
         'status' => 'success'
     ]);
 }

 public function edit($id)
 {
    $hires = Hire::find($id);
     return view('back-end.pages.hire.edit',compact('hires'));
 }


 public function update(Request $request, $id)
    {   
        $hires = Hire::find($id);
        $fileName = '';

        if ($request->hasFile('image')) {
          $fileName = time() . '.' . $request->image->extension();
          $request->image->storeAs('public/images', $fileName);
          if ($hires->image) {
            Storage::delete('public/images/' . $hires->image);
          }
        } else {
          $fileName = $hires->image;
        }

        $hires->title = $request->input('title');
        $hires->sub_title = trim($request->input('sub_title'));
        $hires->image = $fileName;
        $hires->save();

        return redirect()->route('hire.index')->with([
            'message' => 'Hire updated successfully!', 
            'status' => 'success'
        ]);
    }

    public function destroy($id)
    {   
        $hires = Hire::find($id);
        if($hires->image){
            Storage::delete('public/images/' . $hires->image);
        }
        $hires->delete();

        return redirect()->route('hire.index')->with([
            'message' => 'User deleted successfully!', 
            'status' => 'success'
        ]);
    }


}
