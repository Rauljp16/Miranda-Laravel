<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index()
    {
        //$rooms = Rooms::all();
        
        //return response()->json(["rooms" => $rooms]);
        return view('rooms.rooms');

    }
 
    
    
    public function show(Rooms $rooms)
    {
        return view('rooms.roomDetails');

        // return response()->json(['rooms' => $rooms]);
    }


}
