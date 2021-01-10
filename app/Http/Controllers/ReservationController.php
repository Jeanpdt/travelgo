<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all()->toArray();
        return $reservations;
    }

    public function add(Request $request)
    {
        $reservation = new Reservation;

        $reservation->user_id = $request->user_id;
        $reservation->quarto_id = $request->quarto_id;
        $reservation->data_inical = $request->data_inical;
        $reservation->data_final = $request->data_final;

        $reservation->save();

        return response()->json('The reservation successfully added');
    }

    public function getById($id)
    {
        $reservation = Reservation::find($id);
        return response()->json($reservation);
    }

    public function update($id, Request $request)
    {
        $reservation = Reservation::find($id);
        $reservation->update($request->all());

        return response()->json('The reservation successfully updated');
    }

    public function delete($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return response()->json('The reservation successfully deleted');
    }
}
