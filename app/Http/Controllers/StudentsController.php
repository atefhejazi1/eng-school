<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_student = students::all();
        return view("CRUD.students.all_student", compact('all_student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUD.students.add_student');

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
            'name_students' => 'required',
            'age_students' => 'required|numeric',
            'phone_number' => 'required|numeric',
            'address' => 'required',
            'identity_number' => 'required|numeric',
            'Email' => 'required',
            'Specialty' => 'required',
            'level' => 'required',

        ]);

        $store_student = new students;
        $store_student->name_students = $request->name_student;
        $store_student->age_students = $request->age;
        $store_student->phone_number = $request->phone_s;
        $store_student->address = $request->address;
        $store_student->identity_number = $request->Identity_n;
        $store_student->Email = $request->Email_s;
        $store_student->Specialty = $request->Specialty;
        $store_student->level = $request->level;
        $store_student->save();
        return redirect('/students');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_student = students::find($id);
        return view('CRUD.students.show_student', compact('show_student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_student = students::find($id);
        return view('CRUD.students.edit_student', compact('edit_student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'name_students' => 'required',
            'age_students' => 'required|numeric',
            'phone_number' => 'required|numeric',
            'address' => 'required',
            'identity_number' => 'required|numeric',
            'Email' => 'required',
            'Specialty' => 'required',
            'level' => 'required',

        ]);

        $id = $request->id;
        $update_student = students::find($id);
        $update_student->name_students = $request->name_student;
        $update_student->age_students = $request->age;
        $update_student->phone_number = $request->phone_s;
        $update_student->address = $request->address;
        $update_student->identity_number = $request->Identity_n;
        $update_student->Email = $request->Email_s;
        $update_student->Specialty = $request->Specialty;
        $update_student->level = $request->level;
        $update_student->save();
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_student = students::find($id);
        $del_student->delete();
        return redirect('/students');
    }
}
