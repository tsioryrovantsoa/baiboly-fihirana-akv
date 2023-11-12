<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        // User::create([
        //     'name' => 'JOhn Doe',
        //     'email' => 'john@doe.fr',
        //     'password' => Hash::make('john@doe.fr')
        // ]);
        return view('admin.auth.login');
    }
}
