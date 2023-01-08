<?php

namespace App\Http\Controllers;

use App\Models\specialty_students;
use Illuminate\Http\Request;

class SpecialtyStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_spe = specialty_students::all();
        return view("CRUD.specialty.all_specialty", compact('all_spe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUD.specialty.add_specialty');

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
            'name_specialty' => 'required',
            'description_specialty' => 'required',
            'director_specialty' => 'required',

        ]);

        $store_specialty = new specialty_students;
        $store_specialty->name_specialty = $request->name_specialty;
        $store_specialty->description_specialty = $request->description_specialty;
        $store_specialty->director_specialty = $request->director_specialty;
        $store_specialty->save();
        return redirect('/specialty_students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\specialty_students  $specialty_students
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_spe = specialty_students::find($id);
        return view('CRUD.specialty.show_specialty', compact('show_spe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\specialty_students  $specialty_students
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_spe = specialty_students::find($id);
        return view('CRUD.specialty.edit_specialty', compact('edit_spe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\specialty_students  $specialty_students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'name_specialty' => 'required',
            'description_specialty' => 'required',
            'director_specialty' => 'required',

        ]);

        $id = $request->id;
        $update_spe_ = specialty_students::find($id);
        $update_spe_->name_specialty = $request->name_specialty;
        $update_spe_->description_specialty = $request->description_specialty;
        $update_spe_->director_specialty = $request->director_specialty;
        $update_spe_->save();
        return redirect('/specialty_students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\specialty_students  $specialty_students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_spe = specialty_students::find($id);
        $del_spe->delete();
        return redirect('/specialty_students');
    }
}
