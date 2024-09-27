<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Reserve;

class DetailController extends Controller
{
    public function index()
    {
        $details = Reserve::all();

        return view('detail.index',['details' => $details]);
    }
}
