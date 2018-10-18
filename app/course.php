<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $fillable=['id','name'];

    public function institutes(){
        return $this->belongsToMany('App\institute','course_institutes','course_id','institute_id');
    }
}
