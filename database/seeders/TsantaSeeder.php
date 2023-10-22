<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TsantaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tsantas = [
            ["sous_categorie_id" => 4, "titre" => "Jehovah o, iza no hitoetra ao amin'ny taberna-kelinao", "numero" => 1, "fichier" => "Tsanta 1 - Jehovah o, iza no hitoetra ao amin'ny taberna-kelinao.pptx"],
            ["sous_categorie_id" => 4, "titre" => "He! Hianareo rehetra izay mangetaheta", "numero" => 10, "fichier" => "Tsanta 10 - He! Hianareo rehetra izay mangetaheta.pptx"],
            ["sous_categorie_id" => 4, "titre" => "Midera anao izahay, Andriamanitra o", "numero" => 11, "fichier" => "Tsanta 11 - Midera anao izahay, Andriamanitra o.pptx"],
            ["sous_categorie_id" => 4, "titre" => "Ry Raiko o Tariho", "numero" => 12, "fichier" => "Tsanta 12 - Ry Raiko o Tariho.pptx"],
            ["sous_categorie_id" => 4, "titre" => "Avia, aoka isika hihoby ho an'i Jehovah", "numero" => 13, "fichier" => "Tsanta 13 - Avia, aoka isika hihoby ho an'i Jehovah.pptx"],
            ["sous_categorie_id" => 4, "titre" => "Ny Amena fito", "numero" => 14, "fichier" => "Tsanta 14 - Ny Amena fito.pptx"],
            ["sous_categorie_id" => 4, "titre" => "Jehovah no Mpiandry ahy", "numero" => 2, "fichier" => "Tsanta 2 - Jehovah no Mpiandry ahy.pptx"],
            ["sous_categorie_id" => 4, "titre" => "Andriamanitra anie hamindra fo aminay sy hitahy anay", "numero" => 3, "fichier" => "Tsanta 3 - Andriamanitra anie hamindra fo aminay sy hitahy anay.pptx"],
            ["sous_categorie_id" => 4, "titre" => "Mihobia ho an'i Jehovah", "numero" => 4, "fichier" => "Tsanta 4 - Mihobia ho an'i Jehovah.pptx"],
            ["sous_categorie_id" => 4, "titre" => "Misaora an'i Jehovah, ry fanahiko", "numero" => 5, "fichier" => "Tsanta 5 - Misaora an'i Jehovah, ry fanahiko.pptx"],
            ["sous_categorie_id" => 4, "titre" => "Aoka ho tonga amiko ny famindram-ponao", "numero" => 6, "fichier" => "Tsanta 6 - Aoka ho tonga amiko ny famindram-ponao.pptx"],
            ["sous_categorie_id" => 4, "titre" => "Tao amin'ny lalina no niantsoako Anao", "numero" => 7, "fichier" => "Tsanta 7 - Tao amin'ny lalina no niantsoako Anao.pptx"],
            ["sous_categorie_id" => 4, "titre" => "Miderà an'i Jehovah, fa tsara Izy", "numero" => 8, "fichier" => "Tsanta 8 - Miderà an'i Jehovah, fa tsara Izy.pptx"],
            ["sous_categorie_id" => 4, "titre" => "Haleloia. Miderà an'i Jehovah, ry any an-danitra", "numero" => 9, "fichier" => "Tsanta 9 - Haleloia. Miderà an'i Jehovah, ry any an-danitra.pptx"],
        ];

        foreach ($tsantas as $tsanta) {
            Contenu::create($tsanta);
        }
    }
}
