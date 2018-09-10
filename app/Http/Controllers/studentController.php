<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\studentInstitute;

class studentController extends Controller
{
    public function index(){
        $allstudents = student::all();
        $allinsstu = studentInstitute::all();
        //dd($allstudents);
        return view('admin.studentVerify',compact('allstudents'));
    }
}
