<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = ['id','nic','phone','school','age','olindex','alindex','user'];

    public function institutes()
    {
        return $this->belongsToMany('App\institute', 'institute_students', 'student_id', 'institute_id')->withTimestamps()->withPivot('regNumber','status');
    }

    public function unapprovedStudents() {
        return $this->institutes()->wherePivot('status', 0);
    }

}

