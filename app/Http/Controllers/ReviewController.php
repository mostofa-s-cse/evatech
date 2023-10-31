<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    public function index(){
        $reviews = Review::get();
        return view('back-end.pages.review.index',compact('reviews'));
 }
}
