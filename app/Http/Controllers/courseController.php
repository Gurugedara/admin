<?php

namespace App\Http\Controllers;

use App\institute;
use App\student;
use Illuminate\Http\Request;
use App\course;
use App\institute_student;
use App\course_institute;
use App\Syllabus;


class courseController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
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
//        dd($request);
        $result = course_institute::where('institute_id',$request->institute_id)->where('course_id',$request->course_id)->first();
        if($result!=null){
            return "false";
        }else{
            if($request->syllabus!=null) {
                $filename = $request->syllabus->store('public/syllabus');
            }else{
                $filename = "#";
            }
            $syllabus = new Syllabus();
            $syllabus->name = $request->name;
            $syllabus->version = $request->version;
            $syllabus->document = $filename;
            $syllabus->save();

            $newInstituteCourse = new course_institute();
            $newInstituteCourse->institute_id = $request->institute_id;
            $newInstituteCourse->course_id = $request->course_id;
            $newInstituteCourse->syllabus_id = $syllabus->id;
            $newInstituteCourse->save();
        }
        return back();
    }
    public function edit($institute_id,$course_id){
        $course = course_institute::where('institute_id',$institute_id)->where('course_id',$course_id)->first();
        $syllabus = Syllabus::findOrFail($course->syllabus_id);
        return view('admin.courses.coursesEdit',compact('course','syllabus'));
    }

    public function update($syllabus,Request $request){

        $oldSyllabus = Syllabus::find($syllabus);
        $oldSyllabus->name = $request->name;
        $oldSyllabus->version = $request->version;

        if($request->syllabus!=null) {
            $filename = $request->syllabus->store('public/syllabus');
        }else{
            $filename = $oldSyllabus->document;
        }

        $oldSyllabus->document = $filename;
        $oldSyllabus->save();
        return back();
    }

    public function viewCourses(){
        $allCourses = course::all();
        $countData=array();
        foreach ($allCourses as $course){
            $count = institute_student::where('course_id',$course->id)->count();
            $countData[$course->id]=$count;
        }
        return view('admin.courses.index',compact('allCourses','countData'));
    }

    public function addCourses(){
        return view('admin.courses.add');
    }

    public function saveCourses(Request $request){
        $course = new course();
        $course->name = $request->name;
        $course->save();
        return redirect('/admin/courses');
    }

    public function editCourses($id){
        $course = course::find($id);
        return view('admin.courses.edit',compact('course'));
    }

    public function courseUpdate(Request $request,$id){
        $course = course::find($id);
        $course->name = $request->name;
        $course->save();
        return back();
    }
    public function destroy($id){
        $course = course::find($id);
        $course->delete();
        return back();
    }
}
