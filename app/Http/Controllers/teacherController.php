<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\teacher;

class teacherController extends Controller
{
    public function index(){
        //$user_id = Auth::user()->role_id;
        $allteachers=teacher::with(array('institutes'=>function($query){
            $query->where('status',0);
        }))->get();
        //dd($allteachers);
        return view('admin.teacherVerify',compact('allteachers'));

    }
    public function changeStatus($id){
        $institutes = teacher::with('institutes')->findOrFail($id);
        foreach($institutes->institutes as $institute){
            $institute->pivot->status =1;
            $institute->pivot->save();
        }
        return redirect('/admin/teacherVerify');
    }
    public function deny($id){
        $institutes = teacher::with('institutes')->findOrFail($id);
        foreach($institutes->institutes as $institute){
            $institute->pivot->status =-1;
            $institute->pivot->save();
        }
        return redirect('/admin/teacherVerify');
    }
}
