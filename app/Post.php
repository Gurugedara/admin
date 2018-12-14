<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['content','user_id'];

    public function images(){
        return $this->hasMany('App\Image','post_id');
    }
    public function comments(){
        return $this->hasMany('App\Comment','post_id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
