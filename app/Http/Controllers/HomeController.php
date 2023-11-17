<?php

namespace App\Http\Controllers;

use App\Jobs\ContenuInfoFile;
use App\Jobs\ContenuInfoLatest;
use App\Models\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        ContenuInfoFile::dispatch();
        //ContenuInfoLatest::dispatch();

        return view("home.index",[
            'images' => Image::inRandomOrder()->get()
        ]);
    }
}
