<?php

namespace App\Http\Controllers;

use App\Models\department_employee;
use Illuminate\Http\Request;

class DepartmentEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dept_emp = department_employee::all();
        return view("CRUD.department_employees.all_department_emp",compact('dept_emp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\department_employee  $department_employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_deptrtmentEmp =  department_employee::find($id);
       return view('CRUD.department_employees.show_deptrtmentEmp',compact('show_deptrtmentEmp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\department_employee  $department_employee
     * @return \Illuminate\Http\Response
     */
    public function edit(department_employee $department_employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\department_employee  $department_employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, department_employee $department_employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\department_employee  $department_employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_dept_emp =  department_employee::find($id);
        $del_dept_emp->delete();
        return redirect('/dept_employee');
    }
}
