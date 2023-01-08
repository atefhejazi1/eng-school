<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_service = services::all();
        return view("CRUD.services.all_services", compact('all_service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("CRUD.services.add_service");

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
            'name_service' => 'required',
            'description_service' => 'required',

        ]);

        $store_service = new services();
        $store_service->name_service = $request->name_service;
        $store_service->description_service = $request->description_service;
        $store_service->save();
        return redirect('/Services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_service = services::find($id);
        return view('CRUD.services.show_service', compact('show_service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_service = services::find($id);
        return view('CRUD.services.edit_service', compact('edit_service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'name_service' => 'required',
            'description_service' => 'required',

        ]);

        $id = $request->id;
        $update_service = services::find($id);
        $update_service->name_service = $request->name_service;
        $update_service->description_service = $request->description_service;
        $update_service->save();
        return redirect('/Services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_service = services::find($id);
        $del_service->delete();
        return redirect('/Services');
    }
}
