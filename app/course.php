<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $fillable=['id','name'];

    public function institutes(){
        return $this->belongsToMany('App\institute','course_institutes','course_id','institute_id')->withTimestamps()->withPivot('syllabus');
    }
    public function papers(){
        return $this->hasMany('App\Paper','course_id');
    }
}
