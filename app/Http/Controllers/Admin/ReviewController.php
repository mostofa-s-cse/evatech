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
         'message' => 'Review added successfully!', 
         'status' => 'success'
     ]);
 }
 public function edit($id)
 {
     $reviews = Review::find($id);
     return view('back-end.pages.hire.edit',compact('reviews'));
 }


 public function update(Request $request, $id)
    {   
        $reviews = Hire::find($id);
        
        $reviews->title = $request->input('title');
        $reviews->sub_title = $request->input('sub_title');
        $reviews->name = $request->input('name');
        $reviews->designation = $request->input('designation');
        $reviews->save();

        return redirect()->route('review.index')->with([
            'message' => 'Review updated successfully!', 
            'status' => 'success'
        ]);
    }

    public function destroy($id)
    {   
        $reviews = Review::find($id);

        if ($reviews != null) {
            $reviews->delete();
            return redirect()->route('review.index')->with(['message'=> 'Successfully deleted!!']);
        }
    
        return redirect()->route('review.index')->with(['message'=> 'Wrong ID!!']);

    }




}
