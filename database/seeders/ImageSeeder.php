<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            ["titre" => "FJKM AKV", "description" => "Fiangonana Andavamamba Kristy Velona - Alitara 2023", "fichier" => "alitara.jpg"],
            ["titre" => "FJKM AKV", "description" => "Fiangonana Andavamamba Kristy Velona - Alitara 2023", "fichier" => "alitara2.jpg"],
            ["titre" => "FJKM AKV", "description" => "Fiangonana Andavamamba Kristy Velona - Alitara 2023", "fichier" => "alitara3.jpg"],
            ["titre" => "FIMPIZ AKV", "description" => "Clavier", "fichier" => "clavier.jpg"],
            ["titre" => "FJKM AKV", "description" => "Fiangonana Andavamamba Kristy Velona 2023", "fichier" => "fiangonana.jpg"],
            ["titre" => "FJKM AKV", "description" => "Fiangonana Andavamamba Kristy Velona 2023", "fichier" => "fiangonana-anatiny.jpg"],
            ["titre" => "FJKM AKV", "description" => "Fiangonana Andavamamba Kristy Velona 2023", "fichier" => "fiangonana-ivelany.jpg"],
            ["titre" => "FIMPIZ", "description" => "Alahadin'ny FIMPIZ - 12 Février 2023", "fichier" => "fimpiz.jpg"],
            ["titre" => "FIMPIZ", "description" => "Orgue", "fichier" => "orgue.jpg"],
        ];
        foreach ($images as $image) {
            Image::create($image);
        }
    }
}
