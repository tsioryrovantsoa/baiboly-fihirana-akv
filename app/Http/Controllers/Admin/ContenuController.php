<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contenu;
use Illuminate\Http\Request;
use App\Models\SousCategorie;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\Contenu\StoreContenuRequest;
use App\Http\Requests\Contenu\UpdateContenuRequest;
use Exception;

class ContenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $orderBy = $request->input('sort_by', 'fichier_date');
        $order = $request->input('order', 'desc');
        $perPage = $request->input('per_page', config('pagination.per_page'));
        $search = $request->input('search', '');
        $sous_categorie = $request->input('sous_categorie');
        // dd($sous_categorie);

        $contenus = Contenu::with('sous_categorie')->applyFilters($orderBy, $order, $search);
        if (!empty($sous_categorie)) {
            $contenus->whereRelation('sous_categorie', 'id', $sous_categorie);
        }


        $souscategories = SousCategorie::all();

        return view('admin.contenu.index', [
            'contenus' => $contenus->paginate(config('pagination.per_page')),
            'souscategories' => $souscategories,
            'search' => $search
        ]);
    }

    public function open()
    {
        // $filePath = escapeshellarg(request('filePath'));
        $filePath = (request('filePath'));
        $command = 'start /B python ' . config('baiboly.open_app') . ' ' . $filePath;

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
        $souscategories = SousCategorie::all();
        return view('admin.contenu.create', compact('souscategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContenuRequest $request, Contenu $contenu)
    {
        $data = ($request->validated());
        $sous_categorie = SousCategorie::findOrFail($data['sous_categorie_id']);
        $fichier = $request->validated('fichier');
        $extension = $fichier->getClientOriginalExtension();
        $filename = $sous_categorie->acronyme . ' - ' . $data['titre'] . '.' . $extension;
        if ($sous_categorie->numero_requis) {
            $filename = $sous_categorie->acronyme . ' ' . $data['numero'] . ' - ' . $data['titre'] . '.' . $extension;
        }
        $fichier->storeAs('public/slide', $filename);
        $data['fichier'] = $filename;
        $data['fichier_date'] = $contenu->get_last_modified_file($filename);
        $data['fichier_taille'] = $contenu->get_size($filename);
        Contenu::create($data);
        return to_route('admin.contenu.index')->with('success', 'Arahabaina');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contenu $contenu)
    {
        return $contenu;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contenu $contenu)
    {
        return view('admin.contenu.edit', ['contenu' => $contenu->load('sous_categorie'), 'souscategories' => SousCategorie::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContenuRequest $request, Contenu $contenu)
    {
        try {
            $data = $request->validated();

            if ($data['numero']) {
                $count = Contenu::where('numero', $data['numero'])->where('sous_categorie_id', $data['sous_categorie_id'])->count();
                if ($count >= 2) {
                    throw new Exception("Tsy mahazo misy contenu mihoatra'anaky roa mitovy numero. Mba ovaina ny iray");
                }
            }

            if ($request->hasFile('fichier')) {
                $sous_categorie = SousCategorie::findOrFail($data['sous_categorie_id']);
                $fichier = $request->file('fichier');
                $extension = $fichier->getClientOriginalExtension();
                $filename = $sous_categorie->acronyme . ' - ' . $data['titre'] . '.' . $extension;

                if ($sous_categorie->numero_requis) {
                    $filename = $sous_categorie->acronyme . ' ' . $data['numero'] . ' - ' . $data['titre'] . '.' . $extension;
                }

                $fichier->storeAs('public/slide', $filename);
                $data['fichier'] = $filename;
                $data['fichier_date'] = $contenu->get_last_modified_file($filename);
                $data['fichier_taille'] = $contenu->get_size($filename);

                // if ($contenu->fichier && Storage::exists('public/slide/' . $contenu->fichier)) {
                //     Storage::delete('public/slide/' . $contenu->fichier);
                // }
            }

            $contenu->update($data);

            return redirect()->route('admin.contenu.index')->with('success', 'Contenu mis à jour avec succès');
        } catch (\Throwable $th) {
            return back()->with('success', $th->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contenu $contenu)
    {
        Storage::move('public/slide/' . $contenu->fichier, 'public/slide/delete/' . $contenu->fichier);
        $contenu->delete();
        return to_route('admin.contenu.index')->with('success', 'Supprimer avec success');
    }

    public function getRequisNumero(Request $request)
    {
        $sousCategorieId = $request->input('sous_categorie_id');
        $sousCategorie = SousCategorie::findOrFail($sousCategorieId);

        return response()->json(['requis_numero' => $sousCategorie->numero_requis]);
    }

    public function getProchainNumero(Request $request)
    {
        $sousCategorieId = $request->input('sous_categorie_id');

        // Trouver le prochain numéro en fonction de la sous-catégorie
        $prochainNumero = Contenu::where('sous_categorie_id', $sousCategorieId)->max('numero') + 1;

        // Renvoyer le prochain numéro au format JSON
        return response()->json(['prochain_numero' => $prochainNumero]);
    }
}
