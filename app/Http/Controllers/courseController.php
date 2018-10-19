<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use App\institute_student;
use App\course_institute;


class courseController extends Controller
{
    // Show all courses
    public function index(){
        $allCourses = course::all();
        $countData=array();
        foreach ($allCourses as $course){
            $count = institute_student::where('course_id',$course->id)->count();
            $countData[$course->id]=$count;
        }
        return view('admin.courses',compact('allCourses','countData'));
    }
    // Delete a record from the pivot table
    public function delete($institute_id, $course_id){
        course::find($course_id)->institutes()->newPivotstatement()->where('institute_id',$institute_id)->where('course_id',$course_id)->delete();
        return redirect('/admin/institute/course');
    }
    public function addCourse(){
        return view('admin.coursesAdd');
    }
}
