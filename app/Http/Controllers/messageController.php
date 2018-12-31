<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class messageController extends Controller
{
    public function index(){
        return view('admin.message.index');
    }
    public function getUsers(Request $request){
        
        return User::where("firstname","LIKE","%".$request->name."%")->get();
    }
}
