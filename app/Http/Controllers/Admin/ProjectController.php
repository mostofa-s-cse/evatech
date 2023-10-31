<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    //

    public function index(){
        $projects = Project::get();
        return view('back-end.pages.project.index',compact('projects'));
 }

 public function create()
 {
     return view('back-end.pages.project.create');
 }

 public function store(Request $request)
 {   
     $request->validate([
         'project_title' => 'required',
         'project_sub_title' => 'required',
         'project_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
     ]);

     $fileName = time() . '.' . $request->project_image->extension();
     $request->project_image->storeAs('public/images', $fileName);
     
     $user = new Project;
     $user->project_title = $request->input('project_title');
     $user->project_sub_title = $request->input('project_sub_title');
     $user->project_image = $fileName;
     $user->save();

     return redirect()->route('project.index')->with([
         'message' => 'User added successfully!', 
         'status' => 'success'
     ]);
 }


}
