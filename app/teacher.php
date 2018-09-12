<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $fillable = ['nic','phone','school','education','subjects','qualification','user'];

    public function institutes()
    {
        return $this->belongsToMany('App\institute', 'institute_teachers', 'teacher_id', 'institute_id')->withTimestamps()->withPivot('regNumber','status');
    }

    public function user(){
        return $this->hasOne('App\user', 'id');
    }
}
