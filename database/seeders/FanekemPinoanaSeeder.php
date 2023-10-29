<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FanekemPinoanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fnkpns = [
            ["sous_categorie_id" => 6,"titre" => "Mino an’Andriamanitra Ray Tsitoha", "numero" => 1, "fichier" => "Fanekem-pinoana 1 - Mino an’Andriamanitra Ray Tsitoha.pptx"],
            ["sous_categorie_id" => 6,"titre" => "Isika mino an’Andriamanitra iray, Ray Tsitoha", "numero" => 2, "fichier" => "Fanekem-pinoana 2 - Isika mino an’Andriamanitra iray, Ray Tsitoha.pptx"],
            ["sous_categorie_id" => 6,"titre" => "Mino an’Andriamanitra Tsitoha aho", "numero" => 3, "fichier" => "Fanekem-pinoana 3 - Mino an’Andriamanitra Tsitoha aho.pptx"],
            ["sous_categorie_id" => 6,"titre" => "Manambara ny finoantsika an’I Jesoa Kristy isika", "numero" => 4, "fichier" => "Fanekem-pinoana 4 - Manambara ny finoantsika an’I Jesoa Kristy isika.pptx"],
            ["sous_categorie_id" => 6,"titre" => "Mino an’Andriamanitra Mpahary aho", "numero" => 5, "fichier" => "Fanekem-pinoana 5 - Mino an’Andriamanitra Mpahary aho.pptx"],
        ];
        foreach ($fnkpns as $fnkpn) {
            Contenu::create($fnkpn);
        }
    }
}
