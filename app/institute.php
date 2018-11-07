<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class institute extends Model
{
    protected $fillable = ['id', 'name', 'address', 'telephone'];

    public function students()
    {
        return $this->belongsToMany('App\student','institute_student','institute_id','student_id')->withTimestamps()->withPivot('regNumber','status');
    }
    public function teacher()
    {
        return $this->belongsToMany('App\teacher', 'institute_teacher', 'institute_id', 'teacher_id')->withTimestamps()->withPivot('regNumber','status');
    }
    public function courses(){
        return $this->belongsToMany('App\course','course_institutes','institute_id','course_id');
    }
    public function reviews(){
        return $this->hasMany('App\review','institute_id');
    }
}
