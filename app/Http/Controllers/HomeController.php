<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("home.index",[
            'images' => Image::inRandomOrder()->get()
        ]);
    }
}
