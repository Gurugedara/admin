<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reviewsController extends Controller
{
    public function index(){
        return view('admin.reviews');
    }
}
