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
    public function index(Request $request)
    {
        $orderBy = $request->input('sort', 'fichier_date');
        $order = $request->input('order', 'desc');
        $perPage = $request->input('per_page', config('pagination.per_page'));
        $search = $request->input('search', '');

        $contenus = Contenu::with('sous_categorie')->applyFilters($orderBy, $order, $search)->paginate(config('pagination.per_page'));

        $souscategories = SousCategorie::all();

        return view('admin.contenu.index', compact('contenus', 'souscategories','search'));
    }

    public function open()
    {
        // $filePath = escapeshellarg(request('filePath'));
        $filePath = (request('filePath'));
        $command = 'start /B python F:\\Projet\\Perso\\baiboly-to-powerpoint\\open.py ' . $filePath;

        // Lancer la commande en arrière-plan
        pclose(popen($command, 'r'));

        // Attendre 5 secondes
        sleep(5);

        // Terminer le processus s'il est toujours en cours après le délai
        exec("tasklist /FI \"IMAGENAME eq python3.11.exe\" /FO CSV 2>NUL | findstr /R /C:python3.11.exe", $processState);
        if (!empty($processState)) {
            exec("taskkill /F /IM python3.11.exe");
            return back()->with('error', 'Le délai d\'attente est dépassé');
        }

        // La commande a réussi
        return back()->with('success', 'Arahabaina');
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
