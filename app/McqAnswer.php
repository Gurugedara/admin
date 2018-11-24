<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class McqAnswer extends Model
{
    protected $fillable = ['mcq_id','answer','status'];

    public function mcq(){
        return $this->belongsTo('App\Mcq','mcq_id');
    }
}
