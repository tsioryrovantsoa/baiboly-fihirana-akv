<?php

namespace App\Jobs;

use App\Models\Contenu;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ContenuInfoFile implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $contenus = Contenu::all();
        foreach($contenus as $contenu){
            $contenu->fichier_date = $contenu->last_modified_file();
            $contenu->fichier_taille = $contenu->size();
            $contenu->save();
        }
    }
}
