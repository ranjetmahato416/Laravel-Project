<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parent_info extends Model
{
    protected $fillable = ([
        'father',
        'mother'
    ]);
}
