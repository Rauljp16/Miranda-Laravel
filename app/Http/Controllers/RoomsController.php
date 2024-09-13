<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\RoomsImages; 
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = Rooms::all();
        
        return view('rooms.rooms',["rooms" => $rooms]);
    }
    
    // public function show(Rooms $rooms)
    // {
    //     return view('rooms.rooms',["rooms" => $rooms]);
    // }
}

 
    
    

