<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FdlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fdls =
            [
                ["sous_categorie_id" => 22, "titre" => "Deraina sy ankalazaina Ianao Ray ô (Mankato)", "fichier" => "FDL - Deraina sy ankalazaina Ianao Ray ô (Mankato).pptx"],
            ];

        foreach ($fdls as $fdl) {
            Contenu::create($fdl);
        }
    }
}
