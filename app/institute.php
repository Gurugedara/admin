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
}
