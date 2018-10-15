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
        $allstudents=student::with(array('institutes'=>function($query){
            $query->where('status',0);
        }))->get();

        return view('admin.studentVerify',compact('allstudents'));
    }

    public function changeStatus($institite_id,$student_id){
        $institutes = student::with('institutes')->findOrFail($student_id);
        foreach($institutes->institutes as $institute){
            if($institute->id==$institite_id) {
                $institute->pivot->status = 1;
                $institute->pivot->save();
                return redirect('/admin/verify/student');
            }
        }
        return view('admin.404');
    }
    public function deny($id){
        $institutes = student::with('institutes')->findOrFail($id);
        foreach($institutes->institutes as $institute){
            $institute->pivot->status =-1;
            $institute->pivot->save();
        }
        return redirect('/admin/studentVerify');
    }
}
