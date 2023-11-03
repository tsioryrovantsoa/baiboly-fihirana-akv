<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SafifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $safifs = [
            ["sous_categorie_id" => 20,"titre" => "Antsoy Jesoa", "fichier" => "SAFIF - Antsoy Jesoa.pptx"],
            ["sous_categorie_id" => 20,"titre" => "Aza avela", "fichier" => "SAFIF - Aza avela.pptx"],
            ["sous_categorie_id" => 20,"titre" => "Hafa ihany ny Fifohazana", "fichier" => "SAFIF - Hafa ihany ny Fifohazana.pptx"],
            ["sous_categorie_id" => 20,"titre" => "Jesoa no nanolon-tsaina (Faneva faha 10)", "fichier" => "SAFIF - Jesoa no nanolon-tsaina (Faneva faha 10).pptx"],
            ["sous_categorie_id" => 20,"titre" => "Raona", "fichier" => "SAFIF - Raona.pptx"],
            ["sous_categorie_id" => 20,"titre" => "Ravoravo ny efitra", "fichier" => "SAFIF - Ravoravo ny efitra.pptx"],
            ["sous_categorie_id" => 20,"titre" => "Tompo Masina o!", "fichier" => "SAFIF - Tompo Masina o!.pptx"],
        ];

        foreach ($safifs as $safif) {
            Contenu::create($safif);
        }
    }
}
