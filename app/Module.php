<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['name','description','syllabus_id','learning_points'];

    public function syllabus(){
        return $this->belongsTo('App\Syllabus','syllabus_id');
    }
}
