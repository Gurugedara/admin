<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function mainSearch(Request $request){
        return User::where("firstname","LIKE","%".$request->name."%")->get();
    }
}
