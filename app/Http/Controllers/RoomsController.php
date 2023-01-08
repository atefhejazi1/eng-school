<?php

namespace App\Http\Controllers;

use App\Models\rooms;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_room = rooms::all();
        return view("CRUD.rooms.all_rooms", compact('all_room'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUD.rooms.add_room');

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
            'name_room' => 'required',
            'number_room' => 'required|number_format',
            'number_tables' => 'required|number_format',
            'number_chairs' => 'required|number_format',
            'plank' => 'required|number_format',

        ]);

        $store_room = new rooms;
        $store_room->name_room = $request->name_room;
        $store_room->number_room = $request->number_r;
        $store_room->number_tables = $request->number_t;
        $store_room->number_chairs = $request->number_ch;
        $store_room->plank = $request->number_p;
        $store_room->save();
        return redirect('/rooms');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_room = rooms::find($id);
        return view('CRUD.rooms.show_room', compact('show_room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_room = rooms::find($id);
        return view('CRUD.rooms.edit_room', compact('edit_room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rooms $rooms)
    {

        $request->validate([
            'name_room' => 'required',
            'number_room' => 'required|numeric',
            'number_tables' => 'required|numeric',
            'number_chairs' => 'required|numeric',
            'plank' => 'required|numeric',

        ]);

        $id = $request->id;
        $update_room = rooms::find($id);

        $update_room->name_room = $request->name_room;
        $update_room->number_room = $request->number_r;
        $update_room->number_tables = $request->number_t;
        $update_room->number_chairs = $request->number_ch;
        $update_room->plank = $request->number_p;
        $update_room->save();
        return redirect('/rooms');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_rooms = rooms::find($id);
        $del_rooms->delete();
        return redirect('/rooms');
    }
}
