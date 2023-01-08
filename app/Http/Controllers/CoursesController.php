<?php

namespace App\Http\Controllers;

use App\Models\courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_course = courses::all();
        return view("CRUD.courses.all_courses", compact('all_course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUD.courses.add_course');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name_course' => 'required',
            'description_course' => 'required',
            'trainer' => 'required',
            'hours_course' => 'required',
        ]);

        $store_course = new courses;
        $store_course->name_course = $request->name_course;
        $store_course->description_course = $request->description_course;
        $store_course->trainer = $request->Trainer;
        $store_course->hours_course = $request->Hours;
        $store_course->save();
        return redirect('/courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_course = courses::find($id);
        return view('CRUD.courses.show_course', compact('show_course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_course = courses::find($id);
        return view('CRUD.courses.edit_course', compact('edit_course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'name_course' => 'required',
            'description_course' => 'required',
            'trainer' => 'required',
            'hours_course' => 'required',
        ]);

        $id = $request->id;
        $update_course = courses::find($id);
        $update_course->name_course = $request->name_course;
        $update_course->description_course = $request->description_course;
        $update_course->trainer = $request->Trainer;
        $update_course->hours_course = $request->Hours;
        $update_course->save();
        return redirect('/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_course = courses::find($id);
        $del_course->delete();
        return redirect('/courses');
    }
}
