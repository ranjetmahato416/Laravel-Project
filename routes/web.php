<?php


Route::get('/', function () {
    return view('welcome');
});


Route::resource('student','StudentController');

// Route::patch('student/{student_id', 'StudentController@update');

Route::resource('faculty','FacultyController');

Route::resource('batch','BatchController');

Route::resource('semester','SemesterController');

Route::resource('faculty','FacultyController');

Route::resource('bacth','BatchController');


