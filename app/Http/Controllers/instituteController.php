<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\institute;
use App\institute_owner;
use App\institute_student;
use App\institute_teacher;

class instituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.institutes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.institute');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'address'=>'required',
            'telephone'=>'required'
        ]);

        $institute = new institute;
        $institute->name = $request->input('name');
        $institute->address = $request->input('address');
        $institute->telephone = $request->input('telephone');
        $institute->save();
        

        $institute_owner = new institute_owner;
        $institute_owner->user_id = 1;
        $institute_owner->save();

        return redirect('/')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $institutes = institutes::find($id);
        return view('admin.institutes.index')->with('institutes',$institutes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $institute = institute::find($id);
        return view('admin.institutes.edit',compact('institute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $institute = institute::findOrFail($id);
        $institute->name = $request->name;
        $institute->address = $request->address;
        $institute->telephone = $request->telephone;
        $institute->save();
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
        //
    }
    public function hide($id){
        $institute = institute::find($id);
        $institute->activeStatus = 0;
        $institute->save();
        return back();
    }
    public function unhide($id){
        $institute = institute::find($id);
        $institute->activeStatus = 1;
        $institute->save();
        return back();
    }
}
