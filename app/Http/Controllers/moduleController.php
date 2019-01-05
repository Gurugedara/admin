<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\Syllabus;

class moduleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($syllabus_id)
    {
        $syllabus = Syllabus::find($syllabus_id);
        return view('admin.modules.index',compact('syllabus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $syllabi = Syllabus::all();
        return view('admin.modules.create',compact('syllabi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $module = new Module();
        $module->name = $request->name;
        $module->description = $request->description;
        $module->learning_points = $request->learning_points;
        $module->syllabus_id = $request->syllabus_id;
        $module->save();
        $url = "/admin/institute/syllabus/".$request->syllabus_id."/modules";
        return redirect($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        $syllabi = Syllabus::all();
        return view('admin.modules.edit',compact('syllabi','module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Module $module)
    {
        $module->name = $request->name;
        $module->description = $request->description;
        $module->learning_points = $request->learning_points;
        $module->syllabus_id = $request->syllabus_id;
        $module->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return back();
    }
}
