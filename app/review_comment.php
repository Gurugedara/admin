<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review_comment extends Model
{
    protected $fillable = ['comment','user_id','type','review_id'];

    public function review(){
        return $this->belongsTo('App\review','review_id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
