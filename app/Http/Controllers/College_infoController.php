<?php

namespace App\Http\Controllers;

use App\College_info;
use App\Education_info;
use Illuminate\Http\Request;

class College_infoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $college_infos = College_info::all();

        return view('college_info.index', compact('college_infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('college_info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faculty_id = $request->get('faculty_id');
        $batch_id = $request->get('batch_id');
        $student_id = $request->get('student_id');
        $semester_id = $request->get('semester_id');
        $reg_no = $request->get('reg_no');

        College_info:: create([
            'faculty_id'=> $faculty_id,
            'batch_id'=> $batch_id,
            'student_id'=> $student_id,
            'semester_id'=>$semester_id,
            'reg_no'=> $reg_no
        ]);
        return redirect()->route('college_info.index');
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
        $college_info = College_info::find($id);
        return view('college_info.edit', compact('college_info'));
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
        $college_info = College_info::find($id);
        $faculty_id = $request->get('faculty_id');
        $college_info['faculty_id'] = $faculty_id;
        $batch_id = $request->get('batch_id');
        $college_info['batch_id'] = $batch_id;
        $student_id = $request->get('student_id');
        $college_info['student_id'] = $student_id;
        $semester_id = $request->get('semester_id');
        $college_info['semester_id'] = $semester_id;
        $reg_no = $request->get('reg_no');
        $college_info['reg_no'] = $reg_no;

        $college_info->update();
        return redirect()->route('college_info.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $college_info = College_info::find($id);
        $college_info->delete();
        return redirect()->route('college_info.index');
    }
}
