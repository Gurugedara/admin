<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('admin.index');
    }

    public function verifyStudent(){
        return view('admin.studentVerify');
    }

    public function verifyTeachers(){
        return view('admin.teacherVerify');
    }

    public function viewCourses(){
        return view('admin.courses');
    }
}
