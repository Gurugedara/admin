<?php

namespace App\Http\Controllers;

use App\Paper;
use Illuminate\Http\Request;
use App\institute;
use App\course;
use Illuminate\Support\Facades\Auth;

class paperController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $papers = Paper::all();
        return view('admin.papers.index',compact('papers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $institutes = institute::all();
        $courses = course::all();
        return view('admin.papers.add',compact('institutes','courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paper = new Paper();
        $paper->user_id = Auth::user()->id;
        $paper->institute_id = $request->institute_id;
        $paper->course_id = $request->course_id;
        $paper->name = $request->name;
        $paper->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Paper $paper)
    {
        $mcqs = $paper->mcqs;
        return view('admin.papers.show',compact('paper','mcqs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(paper $paper)
    {
        $institutes = institute::all();
        $courses = course::all();
        return view('admin.papers.edit',compact('institutes','courses','paper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Paper $paper)
    {
        $paper->user_id = Auth::user()->id;
        $paper->institute_id = $request->institute_id;
        $paper->course_id = $request->course_id;
        $paper->name = $request->name;
        $paper->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paper = Paper::find($id);
        $paper->delete();
        return back();
    }

    public function getResults($id){
        $paper = Paper::find($id);
        return view('admin.papers.results',compact('paper'));
    }
}
