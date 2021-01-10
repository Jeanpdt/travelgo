<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
  public function index()
  {
    $rooms = Room::all()->toArray();
    return $rooms;
  }

  public function add(Request $request)
  {
    $room = new Room;
    $room->create($request->all());
    return response()->json('The room successfully added');
  }

  public function getById($id)
  {
    $room = Room::find($id);
    return response()->json($room);
  }

  public function update($id, Request $request)
  {
    $room = Room::find($id);
    $room->update($request->all());

    return response()->json('The room successfully updated');
  }

  public function delete($id)
  {
    $room = Room::find($id);
    $room->delete();

    return response()->json('The room successfully deleted');
  }
}
