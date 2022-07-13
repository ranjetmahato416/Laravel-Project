<?php

namespace App\Http\Controllers;
use App\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select * from student
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $name = $request ->get('name');
        $email = $request ->get('email');
        $mobile = $request ->get('mobile');
        $gender = $request ->get('gender');
        $blood_group = $request ->get('blood_group');
        $perm_address = $request ->get('perm_address');
        $dob = $request ->get('dob');
        $is_active = $request ->get('is_active');
        $is_almuni = $request ->get('is_active');

      
            Student::create([
                'name' =>$name,
                'email' =>$email,
                'mobile'=>$mobile,
                'gender' =>$gender,
                'dob' => $dob,
                'blood_group'=>$blood_group,
                'perm_address'=>$perm_address,
                "is_almuni" =>isset($is_active),
                'is_active' => isset($is_active)
            ]);
            return redirect()->route('students.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
