<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index() {
        $hotels = Hotel::all();
        return view('hotels')->with('hotels', $hotels);
    }
}
