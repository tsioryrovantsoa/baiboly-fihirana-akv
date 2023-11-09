<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\SousCategorie;
use Illuminate\Http\Request;

class SousCategorieController extends Controller
{
    public function show(string $slug, SousCategorie $souscategorie)
    {
        $contenus = $souscategorie->contenus()
            ->orderBy('numero', 'asc')
            ->orderBy('titre', 'asc')
            ->paginate(config('pagination.per_page'));

        return view('souscategorie.show', [
            'souscategorie' => $souscategorie,
            'contenus' => $contenus,
        ]);
    }
}
