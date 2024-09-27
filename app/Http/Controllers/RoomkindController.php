<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roomkind;

class RoomkindController extends Controller
{
    public function index()
    {
        $roomkinds = Roomkind::all();

        return view('roomkind.index',['roomkinds' => $roomkinds]);
    }
}
