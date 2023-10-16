<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['id' => 1, 'nom' => "Fihirana", 'ordre' => 1],
            ['id' => 2, 'nom' => "Vavaka", 'ordre' => 2],
            ['id' => 3, 'nom' => "Sampana & Fikambanana", 'ordre' => 3,'afficher_dropdown' => false],
            ['id' => 4, 'nom' => "Hafa", 'ordre' => 4],
        ];

        foreach ($categories as $categorie) {
            Categorie::create($categorie);
        }
    }
}
