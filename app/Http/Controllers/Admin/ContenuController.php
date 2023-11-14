<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contenu;
use App\Models\SousCategorie;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ContenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dateString = '2023-11-03 00:00:00';
        $timestamp = strtotime($dateString);

        $contenus = Contenu::with('sous_categorie')->get();

        $contenus = $contenus->sortByDesc(function ($contenu) {
            return $contenu->last_modified_file();
        });

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = config('pagination.per_page');
        $currentPageItems = $contenus->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $paginatedContenus = new LengthAwarePaginator($currentPageItems, count($contenus), $perPage);
        $paginatedContenus->withPath('/admin/contenu');

        $souscategories = SousCategorie::all();

        return view('admin.contenu.index', compact('paginatedContenus', 'souscategories'));
    }

    public function open()
    {

        $escapedFilePath = escapeshellarg(request('filePath'));

        exec('python F:\\Projet\\Perso\\baiboly-to-powerpoint\\open.py ' . $escapedFilePath . '', $output, $return_var);

        if ($return_var === 0) {
            return back()->with('success', 'Arahabaina')->withInput();
        } else {
            $errorMessage = "";
            foreach ($output as $line) {
                $errorMessage .= $line . "\n";
            }
            return back()->with('error', $errorMessage)->withInput();
        }
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
