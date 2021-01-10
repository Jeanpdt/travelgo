<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
  public function index()
  {
    $testes = Room::all()->toArray();
    return $testes;
  }

  public function add(Request $request)
  {
    $teste = new Room;
    $teste->create($request->all());
    return response()->json('The teste successfully added');
  }

  public function getById($id)
  {
    $teste = Room::find($id);
    return response()->json($teste);
  }

  public function update($id, Request $request)
  {
    $teste = Teste::find($id);
    $teste->update($request->all());

    return response()->json('The teste successfully updated');
  }

  public function delete($id)
  {
    $teste = Teste::find($id);
    $teste->delete();

    return response()->json('The teste successfully deleted');
  }
}
