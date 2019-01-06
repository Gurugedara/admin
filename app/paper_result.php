<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paper_result extends Model
{
    protected $fillable = ['paper_id','student_id','marks'];

    public function paper(){
        return $this->belongsTo('App\Paper');
    }
    public function student(){
        return $this->belongTo('App\student');
    }
}
