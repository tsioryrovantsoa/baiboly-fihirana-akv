<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InterludeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $interludes = [
            ["sous_categorie_id" => 9,"titre" => "5 min ho an'ny ankizy sy tanora", "fichier" => "INT - 5 min ho an'ny ankizy sy tanora.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "5 min manga", "fichier" => "INT - 5 min manga.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "Ankatoka", "fichier" => "INT - Ankatoka.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "Asa vavolombelona", "fichier" => "INT - Asa vavolombelona.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "Batisa", "fichier" => "INT - Batisa.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "Chorale", "fichier" => "INT - Chorale.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "Famelan-keloka", "fichier" => "INT - Famelan-keloka.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "Fandraisana", "fichier" => "INT - Fandraisana.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "Fanoloran-jaza", "fichier" => "INT - Fanoloran-jaza.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "Feonjavamaneno", "fichier" => "INT - Feonjavamaneno.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "Fiarahabana Apostolika", "fichier" => "INT - Fiarahabana Apostolika.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "Fifonana", "fichier" => "INT - Fifonana.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "Litorjian'ny Tenin'Andriamanitra", "fichier" => "INT - Litorjian'ny Tenin'Andriamanitra.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "Raharaham-piangonana", "fichier" => "INT - Raharaham-piangonana.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "Sitrapon'Andriamanitra", "fichier" => "INT - Sitrapon'Andriamanitra.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "STK", "fichier" => "INT - STK.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "Teny Fohy", "fichier" => "INT - Teny Fohy.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "Teny soa mahafaly", "fichier" => "INT - Teny soa mahafaly.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "Trinite Masina", "fichier" => "INT - Trinite Masina.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "Tsodrano", "fichier" => "INT - Tsodrano.ppsx"],
            ["sous_categorie_id" => 9,"titre" => "Vavaka", "fichier" => "INT - Vavaka.ppsx"],
        ];

        foreach ($interludes as $interlude) {
            Contenu::create($interlude);
        }
    }
}
