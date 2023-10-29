<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MiantsaKristyVelonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mkvs = [
            ["sous_categorie_id" => 11,"titre" => "Zay tahian-janahary", "numero" => 1, "fichier" => "MKV 1 - Zay tahian-janahary.pptx"],
            ["sous_categorie_id" => 11,"titre" => "Kristy Velona", "numero" => 12, "fichier" => "MKV 12 - Kristy Velona.pptx"],
            ["sous_categorie_id" => 11,"titre" => "Te hiantso Anao indrindra", "numero" => 2, "fichier" => "MKV 2 - Te hiantso Anao indrindra.pptx"],
            ["sous_categorie_id" => 11,"titre" => "Hazoniko Jesoa (Faneva faha-10 Past Felamanitra)", "numero" => 21, "fichier" => "MKV 21 - Hazoniko Jesoa (Faneva faha-10 Past Felamanitra).pptx"],
            ["sous_categorie_id" => 11,"titre" => "Fitopolotaona izay (Faneva faha-70)", "numero" => 22, "fichier" => "MKV 22 - Fitopolotaona izay (Faneva faha-70).pptx"],
            ["sous_categorie_id" => 11,"titre" => "O Avia", "numero" => 3, "fichier" => "MKV 3 - O Avia.pptx"],
            ["sous_categorie_id" => 11,"titre" => "Hetseho mafy ny herinao (Faneva faha-60)", "numero" => 4, "fichier" => "MKV 4 - Hetseho mafy ny herinao (Faneva faha-60).pptx"],
            ["sous_categorie_id" => 11,"titre" => "'Ty Kapoaka", "numero" => 5, "fichier" => "MKV 5 - 'Ty Kapoaka.pptx"],
            ["sous_categorie_id" => 11,"titre" => "Miverena ry tanora", "numero" => 6, "fichier" => "MKV 6 - Miverena ry tanora.pptx"],
        ];
        foreach ($mkvs as $mkv) {
            Contenu::create($mkv);
        }
    }
}
