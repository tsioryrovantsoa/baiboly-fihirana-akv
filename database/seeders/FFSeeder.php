<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FFSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ffs = [
            ["sous_categorie_id" => 2, "titre" => "Mitsangana ianao ry mino", "numero" => 1, "fichier" => "FF 1 - Mitsangana ianao ry mino.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Mivavaka aho satria", "numero" => 10, "fichier" => "FF 10 - Mivavaka aho satria.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Faly aho", "numero" => 11, "fichier" => "FF 11 - Faly aho.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Am-pelatananao ry Raiko", "numero" => 12, "fichier" => "FF 12 - Am-pelatananao ry Raiko.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Mihirà fihiram-baovao", "numero" => 13, "fichier" => "FF 13 - Mihirà fihiram-baovao.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Jesoa, apetraka Aminao", "numero" => 14, "fichier" => "FF 14 - Jesoa, apetraka Aminao.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Raiko ô", "numero" => 15, "fichier" => "FF 15 - Raiko ô.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Tsy vitam-po onena", "numero" => 16, "fichier" => "FF 16 - Tsy vitam-po onena.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Ho avy ny maraina", "numero" => 17, "fichier" => "FF 17 - Ho avy ny maraina.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Afafazo", "numero" => 18, "fichier" => "FF 18 - Afafazo.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Raha Jehovah no Mpiandry", "numero" => 19, "fichier" => "FF 19 - Raha Jehovah no Mpiandry.pptx"],
            ["sous_categorie_id" => 2, "titre" => "He, manolo-tena", "numero" => 2, "fichier" => "FF 2 - He, manolo-tena.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Jesoa Fitiavana", "numero" => 20, "fichier" => "FF 20 - Jesoa Fitiavana.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Mahatoky ka tokony hekena", "numero" => 21, "fichier" => "FF 21 - Mahatoky ka tokony hekena.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Tsy mendrika ahy", "numero" => 22, "fichier" => "FF 22 - Tsy mendrika ahy.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Andriamanitra ô ! Ry Tompo Zanahary", "numero" => 23, "fichier" => "FF 23 - Andriamanitra ô ! Ry Tompo Zanahary.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Mahereza ! Fa ny Tompo momba anao", "numero" => 24, "fichier" => "FF 24 - Mahereza ! Fa ny Tompo momba anao.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Ny voadiko", "numero" => 25, "fichier" => "FF 25 - Ny voadiko.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Jesosy reharehako", "numero" => 26, "fichier" => "FF 26 - Jesosy reharehako.pptx"],
            ["sous_categorie_id" => 2, "titre" => "'Lay alim-pamonjena", "numero" => 27, "fichier" => "FF 27 - 'Lay alim-pamonjena.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Efa voadinikao Andriamanitra ô !", "numero" => 28, "fichier" => "FF 28 - Efa voadinikao Andriamanitra ô !.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Tsy mba hisy reharehako", "numero" => 29, "fichier" => "FF 29 - Tsy mba hisy reharehako.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Jeso vato fehizoro", "numero" => 3, "fichier" => "FF 3 - Jeso vato fehizoro.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Fo mitambatra ho iray", "numero" => 30, "fichier" => "FF 30 - Fo mitambatra ho iray.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Mihirà ry manam-pofonaina", "numero" => 31, "fichier" => "FF 31 - Mihirà ry manam-pofonaina.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Aza avela hahalala", "numero" => 32, "fichier" => "FF 32 - Aza avela hahalala.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Inty aho Jeso !", "numero" => 33, "fichier" => "FF 33 - Inty aho Jeso !.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Tompo malala ô !", "numero" => 34, "fichier" => "FF 34 - Tompo malala ô !.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Ry Tomponay ô avia", "numero" => 35, "fichier" => "FF 35 - Ry Tomponay ô avia.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Mifalia", "numero" => 36, "fichier" => "FF 36 - Mifalia.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Fa tsy misy fahoriana", "numero" => 37, "fichier" => "FF 37 - Fa tsy misy fahoriana.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Mba todihonao ny lasa", "numero" => 38, "fichier" => "FF 38 - Mba todihonao ny lasa.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Faniriako", "numero" => 39, "fichier" => "FF 39 - Faniriako.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Ry fanahy ô", "numero" => 4, "fichier" => "FF 4 - Ry fanahy ô.pptx"],
            ["sous_categorie_id" => 2, "titre" => "La nuit du salut", "numero" => 40, "fichier" => "FF 40 - La nuit du salut.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Jesoa no Mpanavotra", "numero" => 41, "fichier" => "FF 41 - Jesoa no Mpanavotra.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Moa misy va", "numero" => 42, "fichier" => "FF 42 - Moa misy va.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Aiza moa ianao", "numero" => 43, "fichier" => "FF 43 - Aiza moa ianao.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Ry Madagasikara soa", "numero" => 44, "fichier" => "FF 44 - Ry Madagasikara soa.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Hira fiderana", "numero" => 45, "fichier" => "FF 45 - Hira fiderana.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Mba tantanonao ry Raiko", "numero" => 46, "fichier" => "FF 46 - Mba tantanonao ry Raiko.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Fiadanana", "numero" => 47, "fichier" => "FF 47 - Fiadanana.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Andriamanitra Fitiavana Ianao", "numero" => 48, "fichier" => "FF 48 - Andriamanitra Fitiavana Ianao.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Mifona re ry Ray", "numero" => 49, "fichier" => "FF 49 - Mifona re ry Ray.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Izaho no fanaganana ny maty", "numero" => 5, "fichier" => "FF 5 - Izaho no fanaganana ny maty.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Ianao izay miasa sasatra", "numero" => 50, "fichier" => "FF 50 - Ianao izay miasa sasatra.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Ry mpamonjy olom-bery", "numero" => 51, "fichier" => "FF 51 - Ry mpamonjy olom-bery.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Avia ! Torio Kristy", "numero" => 52, "fichier" => "FF 52 - Avia ! Torio Kristy.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Havaoziko ilay voady", "numero" => 53, "fichier" => "FF 53 - Havaoziko ilay voady.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Finoana, Fanantenana, Fitiavana", "numero" => 54, "fichier" => "FF 54 - Finoana, Fanantenana, Fitiavana.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Ny teninao", "numero" => 6, "fichier" => "FF 6 - Ny teninao.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Tsy hainay ny hangina", "numero" => 7, "fichier" => "FF 7 - Tsy hainay ny hangina.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Msoko manganohano", "numero" => 8, "fichier" => "FF 8 - Msoko manganohano.pptx"],
            ["sous_categorie_id" => 2, "titre" => "Isaorana anie Jehovah", "numero" => 9, "fichier" => "FF 9 - Isaorana anie Jehovah.pptx"],
        ];
        foreach ($ffs as $ff) {
            Contenu::create($ff);
        }
    }
}
