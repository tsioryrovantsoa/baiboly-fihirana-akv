<?php

namespace App\Http\Controllers;

use App\Http\Requests\Search\SearchRequest;
use App\Models\Contenu;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(SearchRequest $request)
    {
        $search = ($request->validated('search'));

        $contenus = Contenu::with('sous_categorie');

        $contenus->where(function ($query) use ($search) {
            $query->where('titre', 'like', '%' . $search . '%')
                ->orWhere('numero', '=', $search)
                ->orWhere('fichier', 'like', '%' . $search . '%');
        });

        return view("search.result", [
            'contenus' => $contenus->paginate(100),
            'search' => $search
        ]);
    }
}
