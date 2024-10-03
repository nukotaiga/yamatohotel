<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roomtype;
class RoomtypeController extends Controller
{
    public function index()
    {
        $guests = Roomtype::all();

        return view('Room.Roomtype',);
    }
}
