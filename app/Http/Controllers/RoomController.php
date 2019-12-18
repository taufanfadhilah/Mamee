<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Auth;
use Storage;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::where('id_perusahaan', Auth::user()->id_perusahaan)->get();
        return view('rooms.index', [
            'rooms' => $rooms
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['img_foto'] = env('APP_URL').'/storage/'.Storage::disk('public')->put('rooms', $request->photo);
        $input['img_map'] = env('APP_URL').'/storage/'.Storage::disk('public')->put('maps', $request->map);
        Room::create($input);
        return redirect(route('rooms.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('rooms.detail', [
            'room' => $room
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view('rooms.edit', [
            'room' => $room
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $input = $request->all();
        if ($request->photo) {
            $input['img_foto'] = env('APP_URL').'/storage/'.Storage::disk('public')->put('rooms', $request->photo);
        }
        if ($request->map) {
            $input['img_map'] = env('APP_URL').'/storage/'.Storage::disk('public')->put('maps', $request->map);
        }
        $room->update($input);
        return redirect(route('rooms.index'));   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect(route('rooms.index'));   
    }
}
