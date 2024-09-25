<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('reservation-form');
    }

    public function reserve(Request $request)
    {
        request()->validate([
            'first-name' => ['required', 'string', 'max:255'],
            'last-name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'contact' => ['required', 'string', 'max:15'], 
            'address' => ['required', 'string', 'max:255'],
            'check-in-date' => ['required', 'date', 'after:today'],
            'room' => ['required', 'string', 'in:standard,deluxe,suite'], 
            'days' => ['required', 'integer', 'min:1'],
            'guests' => ['required', 'integer', 'min:1'],
        ]);

        $egFirstName = request('first-name');
        $egLastName = request('last-name');
        $egEmail = request('email');
        $egContact = request('contact');
        $egAddress = request('address');
        $egCheckInDate = request('check-in-date');
        $egRoom = request('room');
        $egDays = request('days');
        $egGuests = request('guests');
        $egSpecialRequest = request('special-request');

        $egRoomPrice = 0;
        if ($egRoom == 'standard') {
            $egRoomPrice = 1500;
        } elseif ($egRoom == 'deluxe') {
            $egRoomPrice = 3000;
        } elseif ($egRoom == 'suite') {
            $egRoomPrice = 4500;
        }

        $egTotalRoomPrice = $egRoomPrice * $egDays;

        return view('reservation-details', compact('egFirstName', 'egLastName', 'egEmail', 'egContact', 'egAddress', 'egCheckInDate', 'egRoom', 'egDays', 'egGuests', 'egSpecialRequest', 'egRoomPrice', 'egTotalRoomPrice'));
    }
}


