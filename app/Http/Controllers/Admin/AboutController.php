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

 public function edit($id)
 {
    $abouts = About::find($id);
     return view('back-end.pages.about.edit',compact('abouts'));
 }


 public function update(Request $request, $id)
    {   
        $abouts = About::find($id);
        $abouts->title = $request->input('title');
        $abouts->discription = $request->input('discription');
        $abouts->save();

        return redirect()->route('about.index')->with([
            'message' => 'About updated successfully!', 
            'status' => 'success'
        ]);
    }

    public function destroy($id)
    {   
        $abouts = About::find($id);

        if ($abouts != null) {
            $abouts->delete();
            return redirect()->route('about.index')->with(['message'=> 'Successfully deleted!!']);
        }
    
        return redirect()->route('about.index')->with(['message'=> 'Wrong ID!!']);

    }



}
