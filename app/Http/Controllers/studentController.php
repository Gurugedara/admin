<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\institute;
use App\studentInstitute;

class studentController extends Controller
{
    public function index(){
        // $allstudents = student::get();
        $allstudents=student::with(array('institutes'=>function($query){
            $query->where('status',0);
        }))->get();
        //dd($allstudents);
        return view('admin.studentVerify',compact('allstudents'));
    }
}
