<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messageController extends Controller
{
    public function index(){
        return view('admin.message.index');
    }
}
