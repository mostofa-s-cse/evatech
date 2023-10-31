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
            'message' => 'User added successfully!', 
            'status' => 'success'
        ]);
    }

}
