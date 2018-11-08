<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class successStoriesController extends Controller
{
    public function index(){
        return view('admin.institutes.successStories');
    }
}
