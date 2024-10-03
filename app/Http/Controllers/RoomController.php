<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
class RoomController extends Controller
{
    public function index()
    {
        $guests = Room::all();

        return view('Roomid.Room',);
    }
}
