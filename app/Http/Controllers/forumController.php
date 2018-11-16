<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forumController extends Controller
{
    public function index(){
        return view('admin.forum.index');
    }
}
