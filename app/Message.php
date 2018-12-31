<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['sender_id','reciever_id','content','sent_time','delivered_time','read_time'];

    public function sender(){
        return $this->belongsTo('App\User','sender_id');
    }
    public function reciever()
    {
        return $this->belongsTo('App\User', 'reciever_id');
    }
}
