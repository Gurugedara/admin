<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\teacher;

class teacherController extends Controller
{
    public function index(){
        $allteachers=teacher::with(array('institutes'=>function($query){
            $query->where('status',0);
        }))->get();
        return view('admin.teacher.teacherVerify',compact('allteachers'));

    }
    public function changeStatus($institute_id, $student_id){
        $teacher = teacher::with('institutes')->findOrFail($student_id);
        foreach($teacher->institutes as $institute){
            if($institute->id==$institute_id) {
                $institute->pivot->status = 1;
                $institute->pivot->save();
                return redirect('/admin/verify/teacher');
            }
        }
        return view('admin.404');
    }
    public function deny($institute_id, $teacher_id){
        $teacher = teacher::with('institutes')->findOrFail($teacher_id);
        foreach($teacher->institutes as $institute){
            if($institute->id==$institute_id) {
                $institute->pivot->status = -1;
                $institute->pivot->save();
                return redirect('/admin/verify/teacher');
            }
        }
        return view('admin.404');
    }
    public function search(){
        $allteachers = teacher::with(array('institutes'=>function($query){
            $query->where('status',1);
        }))->get();
        return view('admin.teacher.teacherSearch',compact('allteachers'));
    }
    public function viewProfile($teacher_id){
        $teacher = teacher::findOrFail($teacher_id);
        return view('admin.teacher.teacherProfile',compact('teacher'));
    }
}
