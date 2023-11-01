<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Review;


class ReviewController extends Controller
{
    //
    public function index(){
        $reviews = Review::get();
        return view('back-end.pages.review.index',compact('reviews'));
 }

 public function create()
 {
     return view('back-end.pages.review.create');
 }

 public function store(Request $request)
 {   
     $request->validate([
         'title' => 'required',
         'sub_title' => 'required',
         'name' => 'required',
         'designation' => 'required',
         
     ]);
   
     $user = new Review;
     $user->title = $request->input('title');
     $user->sub_title = $request->input('sub_title');
     $user->name = $request->input('name');
     $user->designation = $request->input('designation');

     $user->save();

     return redirect()->route('review.index')->with([
         'message' => 'User added successfully!', 
         'status' => 'success'
     ]);
 }


}
