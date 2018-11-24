<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuccessStory extends Model
{
    protected $fillable=['student_id','institute_id','image','description'];

    public function student(){
        return $this->belongsTo('App\student','student_id');
    }
    public function institute(){
        return $this->belongsTo('App\institute','institute_id');
    }
}
