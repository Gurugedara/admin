<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class institute_teacher extends Model
{
    protected $fillable = ['institute_id','teacher_id','course_id','regNumber','status'];
}
