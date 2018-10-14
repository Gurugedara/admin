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
//        dd($allstudents);
        return view('admin.studentVerify',compact('allstudents'));
    }

    public function changeStatus($id){
        $institutes = student::with('institutes')->findOrFail($id);
        foreach($institutes->institutes as $institute){
            $institute->pivot->status =1;
            $institute->pivot->save();
        }
        return redirect('/admin/studentVerify');
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
