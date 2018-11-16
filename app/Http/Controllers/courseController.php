<?php

namespace App\Http\Controllers;

use App\institute;
use App\student;
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
        return view('admin.courses.courses',compact('allCourses','countData'));
    }
    // Delete a record from the pivot table
    public function delete($institute_id, $course_id){
        course::find($course_id)->institutes()->newPivotstatement()->where('institute_id',$institute_id)->where('course_id',$course_id)->delete();
        return redirect('/admin/institute/course');
    }
    public function addCourse(){
        $courses=course::all();
        $institutes = institute::all();
        return view('admin.courses.coursesAdd',compact('courses','institutes'));
    }

    public function checkCourse(Request $request){
        dd($request);
        $result = course_institute::where('institute_id',$request->institute_id)->where('course_id',$request->course_id)->first();
        if($result!=null){
            return "false";
        }else{
            if($request->syllabus!=null) {
                $filename = $request->syllabus->store('syllabus');
            }else{
                $filename = "#";
            }
            $newInstituteCourse = new course_institute();
            $newInstituteCourse->institute_id = $request->institute_id;
            $newInstituteCourse->course_id = $request->course_id;
            $newInstituteCourse->syllabus = $filename;
            $newInstituteCourse->save();
            return "true";
        }
    }
}
