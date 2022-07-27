<?php

namespace App\Http\Controllers;

use App\Education_info;
use App\College_info;
use App\Parent_info;
use App\Student;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

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
       
        foreach ($students as $student){
           
            $college_info = College_info::where('student_id',$student->id)->get();
            $education_info = Education_info::where('student_id', $student->id)->get();
            $parent_info = Parent_info:: where('student_id', $student->id)->get();

            if(count($college_info) == 0){
                $student['is_college_info'] = false;
            }
            else{
                $student['is_college_info']=true;
            }

            if(count($education_info) == 0){
                $student['is_education_info'] = false;
            }
            else{
                $student['is_education_info']=true;
            }
        }
       
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
        try
        {

            Student::create([
                'name' =>$name,
                'email' =>$email,
                'mobile'=>$mobile,
                'gender' =>$gender,
                'dob' => $dob,
                'blood_group'=>$blood_group,
                'perm_address'=>$perm_address
            ]);
            return redirect()->route('student.index');
        }
        catch(Throwable $ex)
        {
            return view($ex);
            
        }

      
       
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
        $student = Student::find($id);
        return view ('student.edit', compact('student'));
        
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
        $student = Student::find($id);
        $name = $request ->get('name');
        $email = $request ->get('email');
        $mobile = $request ->get('mobile');
        $gender = $request ->get('gender');
        $blood_group = $request ->get('blood_group');
        $perm_address = $request ->get('perm_address');
        $dob = $request ->get('dob');

        $student['name'] = $name;
        $student['email'] = $email;
        $student['mobile'] = $mobile;
        $student['gender'] = $gender;
        $student['blood_group'] = $blood_group;
        $student['perm_address'] = $perm_address;
        $student['dob'] = $dob;

        $student->update();
        return redirect()->route('student.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id)->delete();
        return redirect()->route('student.index');
    }
}
