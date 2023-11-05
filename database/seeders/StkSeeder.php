<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stks = [
            ["sous_categorie_id" => 17, "titre" => "Hanadratra anao", "fichier" => "STK - Hanadratra anao.pptx"],
            ["sous_categorie_id" => 17, "titre" => "Vavaka", "fichier" => "STK - Vavaka.pptx"],
        ];
        foreach ($stks as $stk) {
            Contenu::create($stk);
        }
    }
}
