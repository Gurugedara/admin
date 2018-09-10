<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class institute_student extends Model
{
    protected $fillable = ['institute_id','student_id','regNumber','status'];
}
