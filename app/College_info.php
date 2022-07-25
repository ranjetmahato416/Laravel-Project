<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College_info extends Model
{
    protected $fillable = ([
        'faculty_id',
        'batch_id',
        'student_id',
        'reg_no'
    ]);
}
