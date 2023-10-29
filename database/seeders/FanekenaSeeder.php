<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FanekenaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fanekenas = [
            ["sous_categorie_id" => 7,"titre" => "Fanekena Katekomena", "fichier" => "Fanekena - Fanekena Katekomena.pptx"],
            ["sous_categorie_id" => 7,"titre" => "Fanekena SOFI", "fichier" => "Fanekena - Fanekena SOFI.pptx"],
            ["sous_categorie_id" => 7,"titre" => "Fanekena SVM", "fichier" => "Fanekena - Fanekena SVM.pptx"],
            ["sous_categorie_id" => 7,"titre" => "Faneken'ny diakona", "fichier" => "Fanekena - Faneken'ny diakona.pptx"],
        ];
        foreach ($fanekenas as $fanekena) {
            Contenu::create($fanekena);
        }
    }
}
