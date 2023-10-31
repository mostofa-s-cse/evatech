<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    //
    public function index(){
        $contacts = Contact::get();
        return view('back-end.pages.contact.index',compact('contacts'));
 }

}
