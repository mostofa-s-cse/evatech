<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function frontendHome()
    {
        return view('front-end.pages.home.index');
    }
    public function about_us()
    {
        return view('front-end.pages.about-us.index');
    }
    public function services()
    {
        return view('front-end.pages.services.index');
    }
    public function projects()
    {
        return view('front-end.pages.project.index');
    }
    public function contact_us()
    {
        return view('front-end.pages.contact-us.index');
    }

}
