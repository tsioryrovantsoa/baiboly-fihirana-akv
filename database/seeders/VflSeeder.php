<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VflSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vfls = [
            ["sous_categorie_id" => 18, "titre" => "Ankohonan'Andriamanitra", "fichier" => "VFL - Ankohonan'Andriamanitra.pptx"],
            ["sous_categorie_id" => 18, "titre" => "Fa nantsoinao", "fichier" => "VFL - Fa nantsoinao.pptx"],
        ];

        foreach ($vfls as $vfl) {
            Contenu::create($vfl);
        }
    }
}
