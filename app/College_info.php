<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College_info extends Model
{
    protected $fillable = ([
        'faculty_id',
        'batch_id',
        'semester_id',
        'reg_no',
        'student_id'
    ]);
}
