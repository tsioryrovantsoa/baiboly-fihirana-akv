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
            ['id' => 1, 'categorie_id' => 1, 'nom' => "FFPM", 'acronyme' => 'FFPM', 'ordre' => 1],
            ['id' => 2, 'categorie_id' => 1, 'nom' => "Fanampiny", 'acronyme' => 'FF', 'ordre' => 2],
            ['id' => 3, 'categorie_id' => 1, 'nom' => "Fifohazana", 'acronyme' => 'FIF', 'ordre' => 3],
            ['id' => 4, 'categorie_id' => 1, 'nom' => "Tsanta", 'acronyme' => 'Tsanta', 'ordre' => 4],
            ['id' => 5, 'categorie_id' => 1, 'nom' => "Antema", 'acronyme' => 'Antema', 'ordre' => 5],
            ['id' => 6, 'categorie_id' => 2, 'nom' => "Fanekem-pinoana", 'acronyme' => 'FNKP', 'ordre' => 1],
            ['id' => 7, 'categorie_id' => 4, 'nom' => "Interlude", 'acronyme' => 'INT', 'ordre' => 1, 'nouvel_onglet' => true, 'afficher_acronyme' => false, 'numero_requis' => false],
            ['id' => 8, 'categorie_id' => 4, 'nom' => "Hira hafa", 'acronyme' => 'HHAFA', 'ordre' => 2, 'afficher_acronyme' => false, 'numero_requis' => false],
            ['categorie_id' => 3, 'nom' => "FIkambanan'ny MPItendry Zavamaneno", 'acronyme' => 'FIMPIZ'],
            ['categorie_id' => 3, 'nom' => "Fikambanan'ny Mpitoriteny sy Katekista", 'acronyme' => 'FMK'],
            ['categorie_id' => 3, 'nom' => "Dorkasy", 'acronyme' => "DORKASY"],
            ['categorie_id' => 3, 'nom' => "Sampana Lehilahy Kristiana", 'acronyme' => 'SLK'],
            ['categorie_id' => 3, 'nom' => "Sampana VokovokoManga", 'acronyme' => 'SVM'],
            ['categorie_id' => 3, 'nom' => "Sampana Tanora Kristiana", 'acronyme' => 'STK'],
            ['categorie_id' => 3, 'nom' => "Sampana Vondrona Fototra Laika", 'acronyme' => 'VFL'],
            ['categorie_id' => 3, 'nom' => "Sampanasa Asa Fitoriana Filazantsara", 'acronyme' => "AFF"],
            ['categorie_id' => 3, 'nom' => "SAmpana FIFohazana", 'acronyme' => "SAFIF"],
            ['categorie_id' => 3, 'nom' => "SAmpana MPAnazava sy TIly", 'acronyme' => "SAMPATI"],
            ['categorie_id' => 3, 'nom' => "Fikambanan'ny Diakona sy Loholona", 'acronyme' => "FDL"],
            ['categorie_id' => 3, 'nom' => "Sekoly Alahady", 'acronyme' => "SA"],
            ['categorie_id' => 3, 'nom' => "Chorale Ny Akon'I Kristy Velona", 'acronyme' => "CHORALE"],
        ];

        foreach ($souscategories as $souscategorie) {
            SousCategorie::create($souscategorie);
        }
    }
}
