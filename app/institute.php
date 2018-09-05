<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class institute extends Model
{
    protected $fillable = ['id', 'name', 'address', 'telephone'];
}
