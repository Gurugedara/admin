<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\student;
use App\institute;
use App\studentInstitute;

class studentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $allstudents=student::with(array('institutes'=>function($query){
            $query->where('status',0);
        }))->get();

        return view('admin.students.studentVerify',compact('allstudents'));
    }

    public function changeStatus($institite_id,$student_id){
        $student = student::with('institutes')->findOrFail($student_id);
        foreach($student->institutes as $institute){
            if($institute->id==$institite_id) {
                $institute->pivot->status = 1;
                $institute->pivot->save();
                return redirect('/admin/verify/student');
            }
        }
        return view('admin.404');
    }
    public function deny($institute_id,$student_id){
        $student = student::with('institutes')->findOrFail($student_id);
        foreach($student->institutes as $institute){
            if($institute->id==$institute_id) {
                $institute->pivot->status = -1;
                $institute->pivot->save();
                return redirect('/admin/verify/student');
            }
        }
        return view('admin.404');
    }
    public function search(){
        $allstudents = student::with(array('institutes'=>function($query){
            $query->where('status',1);
        }))->get();
        return view('admin.students.studentSearch',compact('allstudents'));
    }

    public function viewProfile($student_id){
        $student = student::findOrFail($student_id);
        return view('admin.students.studentProfile',compact('student'));
    }
    public function searchStudent($id){
        return student::where("id","LIKE","%".$id."%")->get();
    }
}
