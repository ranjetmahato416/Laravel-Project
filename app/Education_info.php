<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education_info extends Model
{
    protected $fillable =([
        'board',
        'cgpa',
        'symbol_no',
        'institute_name',
        'passed_year',
        'student_id'
    ]);
}
