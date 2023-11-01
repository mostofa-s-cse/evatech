<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use App\Models\Provide;


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

 public function edit($id)
 {
    $provides = Provide::find($id);
     return view('back-end.pages.provide.edit',compact('provides'));
 }


 public function update(Request $request, $id)
    {   
        $provides = Provide::find($id);
        $fileName = '';

        if ($request->hasFile('provide_image')) {
          $fileName = time() . '.' . $request->provide_image->extension();
          $request->provide_image->storeAs('public/images', $fileName);
          if ($provides->provide_image) {
            Storage::delete('public/images/' . $provides->provide_image);
          }
        } else {
          $fileName = $provides->provide_image;
        }

        $provides->provide_title = $request->input('provide_title');
        $provides->provide_sub_title = trim($request->input('provide_sub_title'));
        $provides->provide_image = $fileName;
        $provides->save();

        return redirect()->route('provide.index')->with([
            'message' => 'Provide updated successfully!', 
            'status' => 'success'
        ]);
    }

    public function destroy($id)
    {   
        $provides = Provide::find($id);
        if($provides->provide_image){
            Storage::delete('public/images/' . $provides->provide_image);
        }
        $provides->delete();

        return redirect()->route('provide.index')->with([
            'message' => 'Provide deleted successfully!', 
            'status' => 'success'
        ]);
    }



}
