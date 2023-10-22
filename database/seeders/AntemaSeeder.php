<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AntemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $antemas = [
            ["sous_categorie_id" => 5, "titre" => "Masina, Masina, Masina", "numero" => 1, "fichier" => "Antema 1 - Masina, Masina, Masina.pptx"],
            ["sous_categorie_id" => 5, "titre" => "O! mihobia, ry vahoaka any Ziona!", "numero" => 10, "fichier" => "Antema 10 - O! mihobia, ry vahoaka any Ziona!.pptx"],
            ["sous_categorie_id" => 5, "titre" => "O, lanitra! O, tany masina!", "numero" => 11, "fichier" => "Antema 11 - O, lanitra! O, tany masina!.pptx"],
            ["sous_categorie_id" => 5, "titre" => "He ny aiko", "numero" => 12, "fichier" => "Antema 12 - He ny aiko.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Akory ny hamaroan'ny asanao, ry Jehovah o!", "numero" => 13, "fichier" => "Antema 13 - Akory ny hamaroan'ny asanao, ry Jehovah o!.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Haleloia !", "numero" => 14, "fichier" => "Antema 14 - Haleloia !.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Voninahitra amin'ny avo indrindra ho an'Andriamanitra", "numero" => 15, "fichier" => "Antema 15 - Voninahitra amin'ny avo indrindra ho an'Andriamanitra.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Isaoranay, isaoranay", "numero" => 16, "fichier" => "Antema 16 - Isaoranay, isaoranay.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Manopy ny masoko ho amin'ny tendrombohitra aho", "numero" => 17, "fichier" => "Antema 17 - Manopy ny masoko ho amin'ny tendrombohitra aho.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Saotra, dera, an'Ilay Mpanjaka Tompo Tsara", "numero" => 18, "fichier" => "Antema 18 - Saotra, dera, an'Ilay Mpanjaka Tompo Tsara.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Didy vaovao no omeko anareo", "numero" => 19, "fichier" => "Antema 19 - Didy vaovao no omeko anareo.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Toy ny diera", "numero" => 2, "fichier" => "Antema 2 - Toy ny diera.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Endry ny hatsaran'trano", "numero" => 20, "fichier" => "Antema 20 - Endry ny hatsaran'trano.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Jehovah ô! Hianao no vatolampy", "numero" => 21, "fichier" => "Antema 21 - Jehovah ô! Hianao no vatolampy.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Jehovah Tomponay ô! Ray mandrakizay", "numero" => 22, "fichier" => "Antema 22 - Jehovah Tomponay ô! Ray mandrakizay.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Hoderaina ny Anaranao, ry Andriamanitra ô", "numero" => 23, "fichier" => "Antema 23 - Hoderaina ny Anaranao, ry Andriamanitra ô.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Miderà ny Tomponao", "numero" => 24, "fichier" => "Antema 24 - Miderà ny Tomponao.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Ny Tompo hajao", "numero" => 3, "fichier" => "Antema 3 - Ny Tompo hajao.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Ary maro amin'izay matory ao", "numero" => 4, "fichier" => "Antema 4 - Ary maro amin'izay matory ao.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Indro ny aron'ny mandanao ry Jerosalema", "numero" => 5, "fichier" => "Antema 5 - Indro ny aron'ny mandanao ry Jerosalema.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Midera, midera, midera an'i Jehovah", "numero" => 6, "fichier" => "Antema 6 - Midera, midera, midera an'i Jehovah.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Tamin'ny andro voalohany tamin'ny herinandro", "numero" => 7, "fichier" => "Antema 7 - Tamin'ny andro voalohany tamin'ny herinandro.pptx"],
            ["sous_categorie_id" => 5, "titre" => "Mandrakizay ny Anaranao no hoderaiko", "numero" => 8, "fichier" => "Antema 8 - Mandrakizay ny Anaranao no hoderaiko.pptx"],
            ["sous_categorie_id" => 5, "titre" => "An'i Kristy ny fanjakana", "numero" => 9, "fichier" => "Antema 9 - An'i Kristy ny fanjakana.pptx"],
        ];

        foreach ($antemas as $antema) {
            Contenu::create($antema);
        }
    }
}
