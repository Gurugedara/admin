<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course_institute extends Model
{
    protected $fillable = ['institute_id','course_id','syllabus'];

    public function syllabus(){
        return $this->belongsTo('App\Syllabus','syllabus_id');
    }
    public function institute(){
        return $this->belongsTo('App\institute');
    }
}
