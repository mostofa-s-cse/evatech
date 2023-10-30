<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    //

    public function index(){
           $sliders = Slider::get();
           return view('back-end.pages.slider.index',compact('sliders'));
    }



}
