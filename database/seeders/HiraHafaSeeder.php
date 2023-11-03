<?php

namespace Database\Seeders;

use App\Models\Contenu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HiraHafaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hirahafas = [
            ["sous_categorie_id" => 10, "titre" => "Aleoko ny ahy - Hantatiana", "fichier" => "HHAFA - Aleoko ny ahy - Hantatiana.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Amorony fo madio - Ny Mpitory", "fichier" => "HHAFA - Amorony fo madio - Ny Mpitory.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Ampy ahy Jeso - Imprimerie Adventiste", "fichier" => "HHAFA - Ampy ahy Jeso - Imprimerie Adventiste.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Anao no nindramiko - Henri Ratsimbazafy", "fichier" => "HHAFA - Anao no nindramiko - Henri Ratsimbazafy.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Andeha isika hiaraka - ANDRIANARILALA Honoré", "fichier" => "HHAFA - Andeha isika hiaraka - ANDRIANARILALA Honoré.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Andriamanitra Fitiavana - Henri Ratsimbazafy", "fichier" => "HHAFA - Andriamanitra Fitiavana - Henri Ratsimbazafy.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Antso ho anao - Hosana Ambohijatovo Fitiavana", "fichier" => "HHAFA - Antso ho anao - Hosana Ambohijatovo Fitiavana.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Antsoantso - Rija Rasolondraibe", "fichier" => "HHAFA - Antsoantso - Rija Rasolondraibe.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Areheto ny jiro - SLKM", "fichier" => "HHAFA - Areheto ny jiro - SLKM.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Dia ilay fitia - Haga", "fichier" => "HHAFA - Dia ilay fitia - Haga.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Ekeko tsotr'izao - Laurent Rakotomamonjy", "fichier" => "HHAFA - Ekeko tsotr'izao - Laurent Rakotomamonjy.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Eny - Ampifitia", "fichier" => "HHAFA - Eny - Ampifitia.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Eo ambany fahasoavanao - AMAF", "fichier" => "HHAFA - Eo ambany fahasoavanao - AMAF.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Fanahy Masina - Fara Andriamamonjy", "fichier" => "HHAFA - Fanahy Masina - Fara Andriamamonjy.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Fanekena - SLKM", "fichier" => "HHAFA - Fanekena - SLKM.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Feno fiderana Anao - Vetsonkira", "fichier" => "HHAFA - Feno fiderana Anao - Vetsonkira.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Feno toky ny fanahy - APF", "fichier" => "HHAFA - Feno toky ny fanahy - APF.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Hafaliana ho ahy - Laurent Rakotomamonjy", "fichier" => "HHAFA - Hafaliana ho ahy - Laurent Rakotomamonjy.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Hatramin'ny farany - CEVAM", "fichier" => "HHAFA - Hatramin'ny farany - CEVAM.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Hitako ny làlan-tsara - Groupe Finoana", "fichier" => "HHAFA - Hitako ny làlan-tsara - Groupe Finoana.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Ho aiza - Rojo Ny Avo", "fichier" => "HHAFA - Ho aiza - Rojo Ny Avo.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Ho anao izay mikasa - Ny Mpitory", "fichier" => "HHAFA - Ho anao izay mikasa - Ny Mpitory.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Ho tahiana ianao - Zah MTF", "fichier" => "HHAFA - Ho tahiana ianao - Zah MTF.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Ho tokantrano sambatra - Hosana Ambohijatovo Fitiavana", "fichier" => "HHAFA - Ho tokantrano sambatra - Hosana Ambohijatovo Fitiavana.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Hosana Hosana Hosana", "fichier" => "HHAFA - Hosana Hosana Hosana.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Jesoa mino Anao - CEVAM", "fichier" => "HHAFA - Jesoa mino Anao - CEVAM.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Lalan-davitra - Zah MTF", "fichier" => "HHAFA - Lalan-davitra - Zah MTF.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Lehibe ny Finoako - Rojo Ny Avo", "fichier" => "HHAFA - Lehibe ny Finoako - Rojo Ny Avo.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Mamela ny nosinay - TMI", "fichier" => "HHAFA - Mamela ny nosinay - TMI.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Manana anao - Jocelyn Ranjarison", "fichier" => "HHAFA - Manana anao - Jocelyn Ranjarison.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Mifankatiava ihany - Solika", "fichier" => "HHAFA - Mifankatiava ihany - Solika.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Mijoroa (Hira faneva faha 50)", "fichier" => "HHAFA - Mijoroa (Hira faneva faha 50).pptx"],
            ["sous_categorie_id" => 10, "titre" => "Misafotofoto - Zah MTF", "fichier" => "HHAFA - Misafotofoto - Zah MTF.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Misaotra Anao ‘zahay ry Ray - Fara Andriamamonjy", "fichier" => "HHAFA - Misaotra Anao ‘zahay ry Ray - Fara Andriamamonjy.pptx"],
            ["sous_categorie_id" => 10, "titre" => "No hifarana ny dia - Laurent Rakotomamonjy", "fichier" => "HHAFA - No hifarana ny dia - Laurent Rakotomamonjy.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Nosy Tanindrazako - Ludger Andrianjaka", "fichier" => "HHAFA - Nosy Tanindrazako - Ludger Andrianjaka.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Ny andro vao maraina", "fichier" => "HHAFA - Ny andro vao maraina.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Ny mifankatia - Bessa", "fichier" => "HHAFA - Ny mifankatia - Bessa.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Ny mino- Groupe Ny Mino", "fichier" => "HHAFA - Ny mino- Groupe Ny Mino.pptx"],
            ["sous_categorie_id" => 10, "titre" => "O ry fireneko - Ny Tsantan'IMahamasina", "fichier" => "HHAFA - O ry fireneko - Ny Tsantan'IMahamasina.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Omeo - Rija Ramanantoanina", "fichier" => "HHAFA - Omeo - Rija Ramanantoanina.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Tadiavo Jesoa - Bessa", "fichier" => "HHAFA - Tadiavo Jesoa - Bessa.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Tiako loatra - Mialy Rakotomamonjy", "fichier" => "HHAFA - Tiako loatra - Mialy Rakotomamonjy.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Tompo ô henoy izahay, miantso Anao", "fichier" => "HHAFA - Tompo ô henoy izahay, miantso Anao.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Tsofy ny anjomara - Joseph d'Af", "fichier" => "HHAFA - Tsofy ny anjomara - Joseph d'Af.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Tsy hangina - Joseph D'af", "fichier" => "HHAFA - Tsy hangina - Joseph D'af.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Valinteny - AMPIFITIA", "fichier" => "HHAFA - Valinteny - AMPIFITIA.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Vonjeo ny taninay - TMI", "fichier" => "HHAFA - Vonjeo ny taninay - TMI.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Zany Teninao, ry Tompo, hazavana", "fichier" => "HHAFA - Zany Teninao, ry Tompo, hazavana.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Andriamanitra o, Andriamanitra o (MM 21)", "fichier" => "HHAFA - Andriamanitra o, Andriamanitra o (MM 21).pptx"],
            ["sous_categorie_id" => 10, "titre" => "Miderà ny Tompo Avo (MM 12)", "fichier" => "HHAFA - Miderà ny Tompo Avo (MM 12).pptx"],
            ["sous_categorie_id" => 10, "titre" => "Misaora an’I Zanahary (MM 13)", "fichier" => "HHAFA - Misaora an’I Zanahary (MM 13).pptx"],
            ["sous_categorie_id" => 10, "titre" => "Ny teninao Andriamanitra o! dia feno fitiavan-dehibe (Hasina 357)", "fichier" => "HHAFA - Ny teninao Andriamanitra o! dia feno fitiavan-dehibe (Hasina 357).pptx"],
            ["sous_categorie_id" => 10, "titre" => "Vatolampy tsy mikoro (MM 79)", "fichier" => "HHAFA - Vatolampy tsy mikoro (MM 79).pptx"],
            ["sous_categorie_id" => 10, "titre" => "Jesosy Ampandomba - Ampikora Morombe Toliara", "fichier" => "HHAFA - Jesosy Ampandomba - Ampikora Morombe Toliara.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Jesosy magnankagnahy - Kerombima Ankatso", "fichier" => "HHAFA - Jesosy magnankagnahy - Kerombima Ankatso.pptx"],
            ["sous_categorie_id" => 10, "titre" => "Misaotra Anao aho Jesoa", "fichier" => "HHAFA - Misaotra Anao aho Jesoa.pptx"],
        ];

        foreach ($hirahafas as $hirahafa) {
            Contenu::create($hirahafa);
        }
    }
}
