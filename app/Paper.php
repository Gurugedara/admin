<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    protected $fillabel = ['name','institute_id','user_id','course_id','marks'];

    public function institute(){
        return $this->belongsTo('App\Institute','institute_id');
    }
    public function course(){
        return $this->belongsTo('App\course','course_id');
    }
    public function user(){
        return $this->belongsTo('App\user','user_id');
    }
    public function mcqs(){
        return $this->hasMany('App\Mcq','paper_id');
    }
}
