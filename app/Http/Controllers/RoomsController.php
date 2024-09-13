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

}

 
    
    

