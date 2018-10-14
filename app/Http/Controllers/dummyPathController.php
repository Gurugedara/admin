<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyPathController extends Controller
{
    public function findPath($path){
        switch ($path){
            case "dashboard": return view('admin.dashboard'); break;
            case "studentVerify": return view('admin.studentVerify'); break;
            case "forms":return view('admin.forms'); break;
            case "calendar": return view('admin.calendar');break;
            case "forum": return view('admin.forum'); break;
            case "chat": return view('admin.chat'); break;
            case "profile": return view('admin.profile'); break;
            case "timeline": return view('admin.timeline'); break;
            default: return view('admin.404');
        }
    }
}
