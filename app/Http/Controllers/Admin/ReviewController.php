<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Review;


class ReviewController extends Controller
{
    //
    public function index(){
        $reviews = Review::get();
        return view('back-end.pages.review.index',compact('reviews'));
 }
}
