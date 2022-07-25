<?php

namespace App\Http\Controllers;

use App\Education_info;
use Illuminate\Http\Request;

class Education_infoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education_infos = Education_info::all();
        return view('education_info.index', compact('education_infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education_info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student_id = $request->get('student_id');
        $cgpa = $request->get('cgpa');
        $board = $request->get('board');
        $symbol_no = $request->get('symbol_no');
        $passed_year=$request->get('passed_year');
        $institute_name = $request->get('institute_name');

        Education_info:: create([
            'student_id'=>$student_id,
            'board' => $board,
            'cgpa'=>$cgpa,
            'symbol_no'=>$symbol_no,
            'passed_year'=>$passed_year,
            'institute_name'=>$institute_name
        ]);
        return redirect()->route('education_info.index');
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
        $education_info = Education_info::find($id);
        return view('education_info.edit', compact('education_info'));
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
        $education_info = Education_info::find($id);
        $student_id = $request->get('student_id');
        $education_info['student_id'] = $student_id;
        $cgpa = $request->get('cgpa');
        $education_info['cgpa'] = $cgpa;
        $board = $request->get('board');
        $education_info['board'] = $board;
        $symbol_no = $request->get('symbol_no');
        $education_info['symbol_no'] = $symbol_no;
        $passed_year=$request->get('passed_year');
        $education_info['passed_year'] = $passed_year;
        $institute_name = $request->get('institute_name');
        $education_info['institue_name'] = $institute_name;

        $education_info->update();
        return redirect()->route('education_info.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education_info = Education_info::find($id);
        $education_info->delete();
        return redirect()->route('education_info.index');
    }
}
