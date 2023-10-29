<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VavakaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vavakas = [
            ["sous_categorie_id" => 8,"titre" => "Aorian'ny famelan-keloka", "fichier" => "Vavaka hafa - Aorian'ny famelan-keloka.pptx"],
            ["sous_categorie_id" => 8,"titre" => "Aorian'ny fanambarana ny sitrapon'Andriamanitra", "fichier" => "Vavaka hafa - Aorian'ny fanambarana ny sitrapon'Andriamanitra.pptx"],
            ["sous_categorie_id" => 8,"titre" => "Aorian'ny vakiteny", "fichier" => "Vavaka hafa - Aorian'ny vakiteny.pptx"],
            ["sous_categorie_id" => 8,"titre" => "Vavaka fanetren-tena", "fichier" => "Vavaka hafa - Vavaka fanetren-tena.pptx"],
            ["sous_categorie_id" => 8,"titre" => "Vavaka nampianarin'ny Tompo", "fichier" => "Vavaka hafa - Vavaka nampianarin'ny Tompo.pptx"],
        ];

        foreach ($vavakas as $vavaka) {
            Contenu::create($vavaka);
        }
    }
}
