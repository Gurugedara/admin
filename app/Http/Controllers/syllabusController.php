<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Syllabus;

class syllabusController extends Controller
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
        $syllabi = Syllabus::all();
        return view('admin.syallbus.index',compact('syllabi'));
    }

    
}
