<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
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


}



