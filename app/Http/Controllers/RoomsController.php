<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Bookings;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = Rooms::all();

        return view('rooms.rooms',["rooms" => $rooms]);
    }

    public function show($id)
{
    $room = Rooms::with(['roomType', 'amenities', 'images'])->findOrFail($id);

    return view('rooms.roomDetails', compact('room'));
}

public function home()
{
    $rooms = Rooms::all();

    return view('home', ["rooms" => $rooms]);
}

public function offers()
{
    $roomsAll = Rooms::take(3)->get();
    $roomsOffers = Rooms::orderBy('Rate', 'asc')->take(3)->get();

    return view('offers', ["roomsOffers" => $roomsOffers, "roomsAll" => $roomsAll]);
}

public function availability(Request $request)
{
    $validatedData = $request->validate([
        'checkIn' => 'required|date',
        'checkOut' => 'required|date|after:checkIn',
    ]);

    $bookings = Bookings::whereBetween('checkIn', [$validatedData['checkIn'], $validatedData['checkOut']])
                       ->orWhereBetween('checkOut', [$validatedData['checkIn'], $validatedData['checkOut']])
                       ->get();

    $roomIds = $bookings->pluck('room_id')->unique();
    $rooms = Rooms::whereNotIn('id', $roomIds)->get();

    return view('rooms.roomsAvailable', ['rooms' => $rooms]);
}

public function storeBooking(Request $request)
{
    $validatedData = $request->validate([
        'room_id' => 'required|exists:rooms,id',
        'checkIn' => 'required|date',
        'checkOut' => 'required|date|after:checkIn',
        'name' => 'required|string|max:255',
    ]);

    // Verificar disponibilidad
    $bookings = Bookings::where('room_id', $validatedData['room_id'])
                        ->where(function ($query) use ($validatedData) {
                            $query->whereBetween('checkIn', [$validatedData['checkIn'], $validatedData['checkOut']])
                                  ->orWhereBetween('checkOut', [$validatedData['checkIn'], $validatedData['checkOut']])
                                  ->orWhere(function ($query) use ($validatedData) {
                                      $query->where('checkIn', '<=', $validatedData['checkIn'])
                                            ->where('checkOut', '>=', $validatedData['checkOut']);
                                  });
                        })
                        ->exists();

    if ($bookings) {
        return redirect()->back()->with('error', 'The room is already booked for the selected dates.');
    }

    Bookings::create($validatedData);

    return redirect()->route('rooms', $request->input('room_id'))->with('success', 'Booking created successfully');
}



}



