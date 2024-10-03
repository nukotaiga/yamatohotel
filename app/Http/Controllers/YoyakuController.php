<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yoyaku;
class YoyakuController extends Controller
{
    public function index()
    {
        $guests = Yoyaku::all();

        return view('Room.Roomtype',);
    }
}