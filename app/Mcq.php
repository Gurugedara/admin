<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mcq extends Model
{
    protected $fillable = ['paper_id','description','marks'];

    public function paper(){
        return $this->belongsTo('App\Paper','paper_id');
    }
    public function answers(){
        return $this->hasMany('App\McqAnswer','mcq_id');
    }
}
