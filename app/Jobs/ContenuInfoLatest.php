<?php

namespace App\Jobs;

use App\Models\Contenu;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ContenuInfoLatest implements ShouldQueue
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
        $dateString = Contenu::max('fichier_date') ?? 0;
        $timestamp = strtotime($dateString);

        exec('python ' . config('baiboly.slide_app') . ' ' . config('baiboly.slide_url') . ' ' . $timestamp . '', $output, $return_var);

        $modifiedFiles = json_decode($output[0], true);

        foreach ($modifiedFiles as $filename) {
            $contenu = Contenu::where('fichier', $filename)->first();

            if ($contenu) {
                $contenu->fichier_date = $contenu->last_modified_file();
                $contenu->fichier_taille = $contenu->size();
                $contenu->save();
            }
        }
    }
}
