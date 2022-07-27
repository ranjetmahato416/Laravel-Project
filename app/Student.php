<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'picture',
        'name',
        'blood_group',
        'email',
        'mobile',
        'temp_address',
        'perm_address',
        'dob',
        'gender',
        'parent_id'

    ];
}
?>
