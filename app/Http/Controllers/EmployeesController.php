<?php

namespace App\Http\Controllers;

use App\Models\employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_emp = employees::all();
        return view("CRUD.employees.all_employees", compact('all_emp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUD.employees.add_employees');

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
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'phone' => 'number_format',
            'gender' => 'required',
            'department' => 'required',
            'jobT' => 'required',
            'jopD' => 'required',
            'job_Grade' => 'required',
        ]);

        $store_emp = new employees;
        $store_emp->name = $request->name;
        $store_emp->age = $request->age;
        $store_emp->address = $request->address;
        $store_emp->phone_Number = $request->phone;
        $store_emp->gender = $request->gender;
        $store_emp->department = $request->department;
        $store_emp->job_Title = $request->jobT;
        $store_emp->job_Description = $request->jopD;
        $store_emp->job_Grade = $request->job_Grade;
        $store_emp->save();
        return redirect('/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_emp = employees::find($id);
        return view('CRUD.employees.show_employees', compact('show_emp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_emp = employees::find($id);
        return view('CRUD.employees.edit_employees', compact('edit_emp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'gender' => 'required',
            'department' => 'required',
            'jobT' => 'required',
            'jopD' => 'required',
            'job_Grade' => 'required',
        ]);

        $id = $request->id;

        $update = employees::find($id);
        $update->name = $request->name;
        $update->age = $request->age;
        $update->address = $request->address;
        $update->phone_Number = $request->phone;
        $update->gender = $request->gender;
        $update->department = $request->department;
        $update->job_Title = $request->jobT;
        $update->job_Description = $request->jopD;
        $update->job_Grade = $request->job_Grade;
        $update->save();
        return redirect('/employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_emp = employees::find($id);
        $del_emp->delete();
        return redirect('/employees');
    }
}
