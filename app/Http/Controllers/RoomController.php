<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::latest()->paginate(5);

        return view('rooms.index',compact('rooms'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('rooms.create');

    }

    public function store(Request $request)
    {
        Room::create($request->all());

        return redirect()->route('rooms.index')
            ->with('success','Quarto criado com sucesso.');
    }

    public function show(Room $room)
    {
        return view('rooms.show',compact('room'));

    }

    public function edit(Room $room)
    {
        return view('rooms.edit',compact('room'));

    }

    public function update(Request $request, Room $room)
    {
        $room->update($request->all());

        return redirect()->route('rooms.index')
            ->with('success','Quarto atualizado com sucesso.');
    }

    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms.index')
            ->with('success','Quarto deletado com sucesso.');
    }
}
