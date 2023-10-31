<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
        $contacts = Contact::get();
        return view('back-end.pages.contact.index',compact('contacts'));
 }

}
