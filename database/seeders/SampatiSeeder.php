<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SampatiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sampatis = [
            ["sous_categorie_id" => 21, "titre" => "Efa reko hatry ny ela be", "fichier" => "SAMPATI - Efa reko hatry ny ela be.pptx"],
            ["sous_categorie_id" => 21, "titre" => "Fahazavana (80 taona Mpanazava)", "fichier" => "SAMPATI - Fahazavana (80 taona Mpanazava).pptx"],
            ["sous_categorie_id" => 21, "titre" => "Fiainam-pifaliana", "fichier" => "SAMPATI - Fiainam-pifaliana.pptx"],
            ["sous_categorie_id" => 21, "titre" => "Fikambanana iray", "fichier" => "SAMPATI - Fikambanana iray.pptx"],
            ["sous_categorie_id" => 21, "titre" => "Iny no izory (Faneva 25)", "fichier" => "SAMPATI - Iny no izory (Faneva 25).pptx"],
            ["sous_categorie_id" => 21, "titre" => "Iza no hanolon-tena", "fichier" => "SAMPATI - Iza no hanolon-tena.pptx"],
            ["sous_categorie_id" => 21, "titre" => "Medley", "fichier" => "SAMPATI - Medley.pptx"],
            ["sous_categorie_id" => 21, "titre" => "Miainga", "fichier" => "SAMPATI - Miainga.pptx"],
            ["sous_categorie_id" => 21, "titre" => "Tanana Haolo", "fichier" => "SAMPATI - Tanana Haolo.pptx"],
            ["sous_categorie_id" => 21, "titre" => "Tsikitsiky ihany", "fichier" => "SAMPATI -Tsikitsiky ihany.pptx"],
        ];

        foreach ($sampatis as $sampati) {
            Contenu::create($sampati);
        }
    }
}
