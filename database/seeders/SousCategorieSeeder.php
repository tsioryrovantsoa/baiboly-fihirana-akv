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
            ['id' => 6, 'categorie_id' => 2, 'nom' => "Fanekem-pinoana", 'acronyme' => 'Fanekem-pinoana', 'ordre' => 1],
            ['categorie_id' => 2, 'nom' => "Fanekena", 'acronyme' => 'Fanekena', 'ordre' => 2, 'nouvel_onglet' => false, 'afficher_acronyme' => false, 'numero_requis' => false],
            ['categorie_id' => 2, 'nom' => "Vavaka Hafa", 'acronyme' => 'Vavaka hafa', 'ordre' => 3, 'nouvel_onglet' => false, 'afficher_acronyme' => false, 'numero_requis' => false],
            ['categorie_id' => 4, 'nom' => "Interlude", 'acronyme' => 'INT', 'ordre' => 1, 'nouvel_onglet' => true, 'afficher_acronyme' => false, 'numero_requis' => false],
            ['categorie_id' => 4, 'nom' => "Hira hafa", 'acronyme' => 'HHAFA', 'ordre' => 2, 'afficher_acronyme' => false, 'numero_requis' => false],
            ['categorie_id' => 4, 'nom' => "Miantsa an'i Kristy Velona", 'acronyme' => 'MKV', 'ordre' => 3, 'afficher_acronyme' => false],
            ['categorie_id' => 3, 'nom' => "FIkambanan'ny MPItendry Zavamaneno", 'acronyme' => 'FIMPIZ', 'afficher_acronyme' => false, 'numero_requis' => false, 'logo' => 'fimpiz.jpg'],
            ['categorie_id' => 3, 'nom' => "Fikambanan'ny Mpitoriteny sy Katekista", 'acronyme' => 'FMK', 'afficher_acronyme' => false, 'numero_requis' => false],
            ['categorie_id' => 3, 'nom' => "Dorkasy", 'acronyme' => "DORKASY", 'afficher_acronyme' => false, 'numero_requis' => false],
            ['categorie_id' => 3, 'nom' => "Sampana Lehilahy Kristiana", 'acronyme' => 'SLK', 'afficher_acronyme' => false, 'numero_requis' => false, 'logo' => 'slk.jpg'],
            ['categorie_id' => 3, 'nom' => "Sampana VokovokoManga", 'acronyme' => 'SVM', 'afficher_acronyme' => false, 'numero_requis' => false, 'logo' => 'svm.png'],
            ['categorie_id' => 3, 'nom' => "Sampana Tanora Kristiana", 'acronyme' => 'STK', 'afficher_acronyme' => false, 'numero_requis' => false, 'logo' => 'stk.png'],
            ['categorie_id' => 3, 'nom' => "Sampana Vondrona Fototra Laika", 'acronyme' => 'VFL', 'afficher_acronyme' => false, 'numero_requis' => false, 'logo' => 'vfl.jpg'],
            ['categorie_id' => 3, 'nom' => "Sampanasa Asa Fitoriana Filazantsara", 'acronyme' => "AFF", 'afficher_acronyme' => false, 'numero_requis' => false, 'logo' => 'aff.png'],
            ['categorie_id' => 3, 'nom' => "SAmpana FIFohazana", 'acronyme' => "SAFIF", 'afficher_acronyme' => false, 'numero_requis' => false, 'logo' => 'safif.png'],
            ['categorie_id' => 3, 'nom' => "SAmpana MPAnazava sy TIly", 'acronyme' => "SAMPATI", 'afficher_acronyme' => false, 'numero_requis' => false, 'logo' => 'sampati.jpg'],
            ['categorie_id' => 3, 'nom' => "Fikambanan'ny Diakona sy Loholona", 'acronyme' => "FDL", 'afficher_acronyme' => false, 'numero_requis' => false],
            ['categorie_id' => 3, 'nom' => "Sekoly Alahady", 'acronyme' => "SA", 'afficher_acronyme' => false, 'numero_requis' => false, 'logo' => 'sekoly alahady.png'],
            ['categorie_id' => 3, 'nom' => "Chorale Ny Akon'I Kristy Velona", 'acronyme' => "CHORALE", 'afficher_acronyme' => false, 'numero_requis' => false],
            ['categorie_id' => 3, 'nom' => "Sekoly Olom-bavaka sy FInoana", 'acronyme' => "SOFI", 'afficher_acronyme' => false, 'numero_requis' => false],
        ];

        foreach ($souscategories as $souscategorie) {
            SousCategorie::create($souscategorie);
        }
    }
}
