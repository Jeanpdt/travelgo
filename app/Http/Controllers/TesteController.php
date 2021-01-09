<?php

namespace App\Http\Controllers;

use App\Models\Teste;
use Illuminate\Http\Request;

class TesteController extends Controller
{
  public function index()
  {
    $testes = Teste::all()->toArray();
    return array_reverse($testes);
  }

  public function add(Request $request)
  {
    dd($request->all());
    $teste = new Teste([
      'teste' => $request->input('teste'),
    ]);

    $teste->save();

    return response()->json('The teste successfully added');
  }

  public function edit($id)
  {
    $teste = Teste::find($id);
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
