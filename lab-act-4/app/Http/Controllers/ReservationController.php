<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation-form');
    }

    public function reserve(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'contact' => ['required', 'string', 'max:15'], 
            'address' => ['required', 'string', 'max:255'],
            'check_in_date' => ['required', 'date', 'after:today'],
            'room' => ['required', 'string', 'in:standard,deluxe,suite'], 
            'days' => ['required', 'integer', 'min:1'],
            'guests' => ['required', 'integer', 'min:1'],
        ]);

        $reservationData = $request->only([
            'first_name', 'last_name', 'email', 'contact', 'address', 
            'check_in_date', 'room', 'days', 'guests', 'special_request'
        ]);

        $roomPrices = [
            'standard' => 1500,
            'deluxe' => 3000,
            'suite' => 4500,
        ];

        $reservationData['room_price'] = $roomPrices[$reservationData['room']];
        $reservationData['total_room_price'] = $reservationData['room_price'] * $reservationData['days'];

        // Insert the data into the database
        $reservation = Reservation::create($reservationData);

        return view('reservation-details', [
            'egFirstName' => $reservation->first_name,
            'egLastName' => $reservation->last_name,
            'egEmail' => $reservation->email,
            'egContact' => $reservation->contact,
            'egAddress' => $reservation->address,
            'egCheckInDate' => $reservation->check_in_date,
            'egRoom' => $reservation->room,
            'egDays' => $reservation->days,
            'egGuests' => $reservation->guests,
            'egSpecialRequest' => $reservation->special_request,
            'egRoomPrice' => $reservation->room_price,
            'egTotalRoomPrice' => $reservation->total_room_price,
        ]);
    }
}