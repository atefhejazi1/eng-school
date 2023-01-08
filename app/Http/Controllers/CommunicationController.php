<?php

namespace App\Http\Controllers;

use App\Models\communication;
use Illuminate\Http\Request;

class CommunicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_com = communication::all();
        return view("CRUD.communication.all_Communication",compact('all_com'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUD.communication.add_Communication');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store_com = new communication;
        $store_com->name_customer = $request->name_customer;
        $store_com->Email = $request->email;
        $store_com->phone_number = $request->phone;
        $store_com->subject = $request->subject;
        $store_com->message = $request->message;
        $store_com->save();
       return redirect('/');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $show_com =  communication::find($id);
       return view('CRUD.communication.show_Communication',compact('show_com'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_com =  communication::find($id);
        return view('CRUD.communication.edit_Communication',compact('edit_com'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
    
        $update = communication::find($id);
        $update->name_customer = $request->name;
        $update->Email = $request->email;
        $update->phone_number = $request->phone;
        $update->subject = $request->subject;
        $update->message = $request->message;
        $update->save();
        return redirect('/communication');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $del_com =  communication::find($id);
       $del_com->delete();
       return redirect('/communication');
        
    }
}
