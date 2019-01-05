<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\teacher;
use App\institute;
use Analytics;
use Spatie\Analytics\Period;

class dashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $analyticsData = Analytics::performQuery(
            Period::days(7),
            'ga:sessions',
            [
                'metrics' => 'ga:pageviews',
                'dimensions' => 'ga:day'
            ]
        );
        $timeonpage = Analytics::performQuery(
            Period::days(7),
            'ga:sessions',
            [
                'metrics' => 'ga:timeOnPage',
                'dimensions' => 'ga:day'
            ]
        );
        $avgtimeonpage = Analytics::performQuery(
            Period::days(7),
            'ga:sessions',
            [
                'metrics' => 'ga:avgTimeOnPage',
                'dimensions' => 'ga:yearWeek'
            ]
        );
        $newUsers = Analytics::performQuery(
            Period::days(7),
            'ga:pageViews',
            [
                'metrics' => 'ga:newUsers',
                'dimensions' => 'ga:dayOfWeek'
            ]
        );
        $totalNewUsers =0;
        foreach($newUsers as $user){
            $totalNewUsers = $totalNewUsers + $user[1];
        }
        $avgNewUsers = intdiv($totalNewUsers,7);
        // dd($newUsers);
        $studentsCount = count(student::all());
        $teachersCount = count(teacher::all());
        $institutesCount = count(institute::all());
        return view('admin.dashboard',compact('studentsCount','teachersCount','institutesCount','analyticsData',
        'timeonpage','avgtimeonpage','newUsers','avgNewUsers'));
    }
}
