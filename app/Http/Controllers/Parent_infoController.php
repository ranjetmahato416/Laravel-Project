<?php

namespace App\Http\Controllers;

use App\Parent_info;
use Illuminate\Http\Request;

class Parent_infoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parent_infos = Parent_info::all();
        return view('parent_info.index', compact('parent_infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parent_info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $father = $request->get('father');
        $mother = $request->get('mother');
        $student_id = $request->get('student_id');
        Parent_info:: create([
            'father' => $father,
            'mother' => $mother,
            'student_id' => $student_id
        ]);
        return redirect()->route('parent_info.index');
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
        $parent_info = Parent_info::find($id);
        return view('parent_info.edit', compact('parent_info'));
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
        $parent_info = Parent_info::find($id);
        $father = $request->get('father');
        $parent_info['father'] = $father;
        $mother = $request->get('mother');
        $parent_info['mother'] = $mother;
        $student_id = $request->get('student_id');
        $parent_info['student_id'] = $student_id;

        $parent_info->update();
        return redirect()->route('parent_info.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parent_info = Parent_info::find($id);
        $parent_info->delete();
        return redirect()->route('parent_info.index');
    }
}
