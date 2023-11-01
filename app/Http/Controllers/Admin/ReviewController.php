<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
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
    try{
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
   
        Alert::success('Congrats', "Your review added successfully");
        return redirect()->route('review.index')->with([
            'message' => 'Review added successfully!', 
            'status' => 'success'
        ]);
    }catch(\Exception $e){
        return $e->getMessage();
    }
    
 }
 public function edit($id)
 {
     $reviews = Review::find($id);
     return view('back-end.pages.review.edit',compact('reviews'));
 }


 public function update(Request $request, $id)
    {   
        try{
            $reviews = Review::find($id);
            
            $reviews->title = $request->input('title');
            $reviews->sub_title = $request->input('sub_title');
            $reviews->name = $request->input('name');
            $reviews->designation = $request->input('designation');
            $reviews->save();
    
            return redirect()->route('review.index')->with([
                'message' => 'Review updated successfully!', 
                'status' => 'success'
            ]);
        }catch (\Exception $e) {

            return $e->getMessage();
        }
    }
   

    public function destroy($id)
    {   
        $reviews = Review::find($id);

        if ($reviews != null) {
            $reviews->delete();
            Alert::success('Deleted', 'Data has been deleted successfully');
            return redirect()->route('review.index')->with(['message'=> 'Successfully deleted!!']);
        }
    
        return redirect()->route('review.index')->with(['message'=> 'Wrong ID!']);

    }




}
