<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all()->map(function ($room) {
            $room->image_path = asset('storage/' . $room->image_path); 
            return $room;
        });

        return view('room.index',['rooms' => $rooms]);
    }
}
