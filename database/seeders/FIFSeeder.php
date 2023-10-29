<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FIFSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fifs = [
            ["sous_categorie_id" => 3, "titre" => "Asandrato avo re ny hiranao", "numero" => 10, "fichier" => "FIF 10 - Asandrato avo re ny hiranao.pptx"],
            ["sous_categorie_id" => 3, "titre" => "Iza no hahasaraka ahy", "numero" => 145, "fichier" => "FIF 145 - Iza no hahasaraka ahy.pptx"],
            ["sous_categorie_id" => 3, "titre" => "Mitsimoka ao an-tanimbolinao ry Ray", "numero" => 183, "fichier" => "FIF 183 - Mitsimoka ao an-tanimbolinao ry Ray.pptx"],
            ["sous_categorie_id" => 3, "titre" => "Ry Ray be fiantra manankery", "numero" => 190, "fichier" => "FIF 190 - Ry Ray be fiantra manankery.pptx"],
            ["sous_categorie_id" => 3, "titre" => "Misikina re, ry sakaiza ô", "numero" => 225, "fichier" => "FIF 225 - Misikina re, ry sakaiza ô.pptx"],
            ["sous_categorie_id" => 3, "titre" => "Faingàna ajoroy ny faneva re", "numero" => 316, "fichier" => "FIF 316 - Faingàna ajoroy ny faneva re.pptx"],
            ["sous_categorie_id" => 3, "titre" => "Tsy misy soa ho ahy", "numero" => 324, "fichier" => "FIF 324 - Tsy misy soa ho ahy.pptx"],
            ["sous_categorie_id" => 3, "titre" => "Aza avela ho mandalo re ny Teny", "numero" => 326, "fichier" => "FIF 326 - Aza avela ho mandalo re ny Teny.pptx"],
            ["sous_categorie_id" => 3, "titre" => "Ny antsonao Andriamanitra o", "numero" => 328, "fichier" => "FIF 328 - Ny antsonao Andriamanitra o.pptx"],
            ["sous_categorie_id" => 3, "titre" => "Raiko o! Izaho misaotra Anao (Tokim-mpanompoana)", "numero" => 356, "fichier" => "FIF 356 - Raiko o! Izaho misaotra Anao (Tokim-mpanompoana).pptx"],
            ["sous_categorie_id" => 3, "titre" => "Jesosy o! Indreto ny olonao", "numero" => 359, "fichier" => "FIF 359 - Jesosy o! Indreto ny olonao.pptx"],
            ["sous_categorie_id" => 3, "titre" => "Ry Fanahy Masina ao ambony", "numero" => 70, "fichier" => "FIF 70 - Ry Fanahy Masina ao ambony.pptx"],
        ];
        foreach ($fifs as $fif) {
            Contenu::create($fif);
        }
    }
}
