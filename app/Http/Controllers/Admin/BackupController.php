<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class BackupController extends Controller
{
    public function index()
    {
        $files = Storage::files('public/Laravel');

        // Récupérer les informations de dernière modification pour chaque fichier
        $fileDetails = [];
        foreach ($files as $file) {
            $fileDetails[$file] = Storage::lastModified($file);
        }

        // Trier les fichiers par date de dernière modification (du plus récent au plus ancien)
        arsort($fileDetails);

        // Récupérer les noms des fichiers dans l'ordre trié
        $sortedFiles = array_keys($fileDetails);

        return view('admin.backup.index', ['files' => $sortedFiles]);
    }

    public function export()
    {
        $exitCode = Artisan::call('backup:run', [
            '--disable-notifications' => true
        ]);

        if ($exitCode === 0) {
            return back()->with('success', "La sauvegarde a été effectuée avec succès. Exit Code : {$exitCode}");
        } else {
            $output = Artisan::output();
            return back()->with('error', "Erreur lors de la sauvegarde. Sortie : {$output}");
        }
    }
}
