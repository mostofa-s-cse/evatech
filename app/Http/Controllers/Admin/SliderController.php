<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Slider;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    //

    public function index(){
           $sliders = Slider::query()->latest()->paginate(10);
           return view('back-end.pages.slider.index',compact('sliders'));
    }

    public function create()
    {
        return view('back-end.pages.slider.create');
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
        
        $user = new Slider;
        $user->title = $request->input('title');
        $user->sub_title = $request->input('sub_title');
        $user->image = $fileName;
        $user->save();

        return redirect()->route('slider.index')->with([
            'message' => 'Slider added successfully!', 
            'status' => 'success'
        ]);
    }

    public function edit($id)
    {
       $sliders = Slider::find($id);
        return view('back-end.pages.slider.edit',compact('sliders'));
    }
   
   
    public function update(Request $request, $id)
       {   
           $sliders = Slider::find($id);
           $fileName = '';
   
           if ($request->hasFile('image')) {
             $fileName = time() . '.' . $request->image->extension();
             $request->image->storeAs('public/images', $fileName);
             if ($sliders->image) {
               Storage::delete('public/images/' . $sliders->image);
             }
           } else {
             $fileName = $sliders->image;
           }
   
           $sliders->title = $request->input('title');
           $sliders->sub_title = trim($request->input('sub_title'));
           $sliders->image = $fileName;
           $sliders->save();
   
           return redirect()->route('slider.index')->with([
               'message' => 'Slider updated successfully!', 
               'status' => 'success'
           ]);
       }
   
       public function destroy($id)
       {   
           $sliders = Slider::find($id);
           if($sliders->image){
               Storage::delete('public/images/' . $sliders->image);
           }
           $sliders->delete();
   
           return redirect()->route('slider.index')->with([
               'message' => 'Slider deleted successfully!', 
               'status' => 'success'
           ]);
       }
   

}
