<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SofiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sofis = [
            ["sous_categorie_id" => 25, "titre" => "Antso (Mihavao)", "fichier" => "SOFI - Antso (Mihavao).pptx"],
        ];
        foreach ($sofis as $sofi) {
            Contenu::create($sofi);
        }
    }
}
