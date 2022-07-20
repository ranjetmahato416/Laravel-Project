<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education_info extends Model
{
    protected $fillable =([
        'board',
        'cgpa',
        'sumbol_no',
        'institute_name',
        'student_id'
    ]);
}
