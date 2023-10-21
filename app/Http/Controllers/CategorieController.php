<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function show(string $slug, Categorie $categorie)
    {
        return view('categorie.index', [
            'categorie' => $categorie
        ]);
    }
}
