<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SvmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $svms = [
            ["sous_categorie_id" => 16,"titre" => "Antsoy Jesoa", "fichier" => "SVM - Antsoy Jesoa.pptx"],
            ["sous_categorie_id" => 16,"titre" => "Imela", "fichier" => "SVM - Imela.pptx"],
            ["sous_categorie_id" => 16,"titre" => "Tomponay o", "fichier" => "SVM - Tomponay o.pptx"],
            ["sous_categorie_id" => 16,"titre" => "Tranon'ny fanahy", "fichier" => "SVM - Tranon'ny fanahy.pptx"],
        ];
        foreach ($svms as $svm) {
            Contenu::create($svm);
        }
    }
}
