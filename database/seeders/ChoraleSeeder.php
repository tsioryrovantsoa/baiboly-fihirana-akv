<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChoraleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chorales =
            [
                ["sous_categorie_id" => 24, "titre" => "Misaora", "fichier" => "CHORALE - Misaora.pptx"],
                ["sous_categorie_id" => 24, "titre" => "Fagnahy o", "fichier" => "CHORALE - Fagnahy o.pptx"],
                ["sous_categorie_id" => 24, "titre" => "Modia", "fichier" => "CHORALE - Modia.pptx"],
                ["sous_categorie_id" => 24, "titre" => "Tsara Andriamanitra", "fichier" => "CHORALE - Tsara Andriamanitra.pptx"],
            ];

        foreach ($chorales as $chorale) {
            Contenu::create($chorale);
        }
    }
}
