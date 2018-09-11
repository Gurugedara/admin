<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\student;
use App\institute;
use App\studentInstitute;

class studentController extends Controller
{
    public function index(){
        $user_id = Auth::user()->role_id;
        $allstudents=student::with(array('institutes'=>function($query){
            $query->where('status',0);
        }))->get();
        return view('admin.studentVerify',compact('allstudents'));
    }
}
