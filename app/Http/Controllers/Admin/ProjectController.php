<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
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
         'message' => 'Project added successfully!', 
         'status' => 'success'
     ]);
 }
 public function edit($id)
 {
    $projects = Project::find($id);
     return view('back-end.pages.project.edit',compact('projects'));
 }


 public function update(Request $request, $id)
    {   
        $projects = Project::find($id);
        $fileName = '';

        if ($request->hasFile('project_image')) {
          $fileName = time() . '.' . $request->project_image->extension();
          $request->project_image->storeAs('public/images', $fileName);
          if ($projects->project_image) {
            Storage::delete('public/images/' . $projects->project_image);
          }
        } else {
          $fileName = $projects->project_image;
        }

        $projects->project_title = $request->input('project_title');
        $projects->project_sub_title = trim($request->input('project_sub_title'));
        $projects->project_image = $fileName;
        $projects->save();

        return redirect()->route('project.index')->with([
            'message' => 'Project updated successfully!', 
            'status' => 'success'
        ]);
    }

    public function destroy($id)
    {   
        $projects = Project::find($id);
        if($projects->image){
            Storage::delete('public/images/' . $projects->image);
        }
        $projects->delete();

        return redirect()->route('project.index')->with([
            'message' => 'User deleted successfully!', 
            'status' => 'success'
        ]);
    }


    
}
