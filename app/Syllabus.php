<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    protected $fillable = ['name','document','version'];

    public function modules(){
        return $this->hasMany('App\Module','syllabus_id');
    }
}
