<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class contactController extends Controller
{
    public function index(){
        $contacts = contact::all();
        return view('admin.contact.index',compact('contacts'));
    }
    public function store(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->comment = $request->comment;
        $contact->save();
        return back();
    }
}
