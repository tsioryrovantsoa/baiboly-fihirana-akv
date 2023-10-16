<?php

namespace Database\Seeders;

use App\Models\SousCategorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SousCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $souscategories = [
            ['id' => 1, 'categorie_id' => 1, 'nom' => "FFPM", 'ordre' => 1],
            ['id' => 2, 'categorie_id' => 1, 'nom' => "Fanampiny", 'ordre' => 2],
            ['id' => 3, 'categorie_id' => 1, 'nom' => "Fifohazana", 'ordre' => 3],
            ['id' => 4, 'categorie_id' => 1, 'nom' => "Tsanta", 'ordre' => 4],
            ['id' => 5, 'categorie_id' => 1, 'nom' => "Antema", 'ordre' => 5],
            ['id' => 6, 'categorie_id' => 2, 'nom' => "Fanekem-pinoana", 'ordre' => 1],
            ['id' => 7, 'categorie_id' => 4, 'nom' => "Interlude", 'ordre' => 1, 'nouvel_onglet' => true],
            ['id' => 8, 'categorie_id' => 4, 'nom' => "Hira hafa", 'ordre' => 2],
        ];

        foreach ($souscategories as $souscategorie) {
            SousCategorie::create($souscategorie);
        }
    }
}
