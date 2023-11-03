<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slks = [
            ["sous_categorie_id" => 15,"titre" => "Mahereza", "fichier" => "SLK - Mahereza.pptx"],
            ["sous_categorie_id" => 15,"titre" => "Mihevera", "fichier" => "SLK - Mihevera.pptx"],
            ["sous_categorie_id" => 15,"titre" => "Mijoro ny lehilahy (Faneva)", "fichier" => "SLK - Mijoro ny lehilahy (Faneva).pptx"],
            ["sous_categorie_id" => 15,"titre" => "Modia izao", "fichier" => "SLK - Modia izao.pptx"],
        ];
        foreach ($slks as $slk) {
            Contenu::create($slk);
        }
    }
}
