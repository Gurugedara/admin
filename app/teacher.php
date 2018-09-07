<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $fillable = ['nic','phone','school','education','subjects','qualification','user'];
}
