<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = ['id','nic','phone','school','age','olindex','alindex','user'];
}
