<?php

namespace App\Http\Controllers;
use App\Models\Project;


use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //

    public function index(){
        $projects = Project::get();
        return view('back-end.pages.project.index',compact('projects'));
 }
}
