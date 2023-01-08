<?php

namespace App\Http\Controllers;

use App\Models\connection_dept_employees;
use App\Models\department_employee;
use App\Models\employees;
use Illuminate\Http\Request;

class ConnectionDeptEmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all_dept_emp = connection_dept_employees::all();
        $all_emp = employees::all();

        return view("CRUD.connection_dept_employees.all_dept_emp", compact('all_dept_emp', 'all_emp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        $all_emp = employees::all();
        $dept_emp = department_employee::all();
        return view("CRUD.connection_dept_employees.add_dept_emp", compact('all_emp', 'dept_emp'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        

        $id_e = $request->emp;
        $store_conn_emp_dept = new connection_dept_employees;
        $store_conn_emp_dept->id_emp = $request->emp;
        $store_conn_emp_dept->id_dept = $request->dept;
        $store_conn_emp_dept->save();
        return redirect("/conn_dept_employee");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\connection_dept_employees  $connection_dept_employees
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_dept_emp = connection_dept_employees::find($id);
        return view('CRUD.connection_dept_employees.show_dept_emp', compact('show_dept_emp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\connection_dept_employees  $connection_dept_employees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_conn_dept_emp = connection_dept_employees::find($id);
        $edit_emp = employees::find($id);

        $edit_dept_emp = department_employee::find($id);
        return view('CRUD.connection_dept_employees.edit_conn_dept_emp', compact('edit_conn_dept_emp', 'edit_emp', "edit_dept_emp"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\connection_dept_employees  $connection_dept_employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, connection_dept_employees $connection_dept_employees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\connection_dept_employees  $connection_dept_employees
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $delete_dept_emp = connection_dept_employees::find($id);
        $delete_dept_emp->delete();
        return redirect('/conn_dept_employee');
    }
}
