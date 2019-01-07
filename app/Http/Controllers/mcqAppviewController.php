<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mcq;

class mcqAppviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($userid,$paperid)
    {
        $allmcq = Mcq::where('paper_id',$paperid)->get();
        $paper = $paperid;
        $number = 1;
        return view('AppMcqview.index',compact('allmcq','number','paper','userid'));
    }
}
