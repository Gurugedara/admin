<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $fillable = ['comment','student_id','institute_id','starts','status','up','down'];

    public function student(){
        return $this->hasOne('App\student','id');
    }
    public function institute(){
        return $this->belongsTo('App\institute','institute_id');
    }
    public function comments(){
        return $this->hasMany('App\review_comment','review_id');
    }
}


