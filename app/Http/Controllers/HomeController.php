<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = course::all();
        return view('index',compact('courses'));
    }

    public function appshow()
    {
        $courses = course::all();
        return view('AppSearchview.index',compact('courses'));
    }
}
