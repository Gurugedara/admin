<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentInstitute extends Model
{
    protected $fillable = ['studentid','instituteid','regNumber','status'];
}
