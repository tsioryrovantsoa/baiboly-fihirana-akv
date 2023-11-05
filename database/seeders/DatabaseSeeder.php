<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorieSeeder::class,
            SousCategorieSeeder::class,
            FFPMSeeder::class,
            FFSeeder::class,
            AntemaSeeder::class,
            TsantaSeeder::class,
            FIFSeeder::class,
            FanekemPinoanaSeeder::class,
            FanekenaSeeder::class,
            VavakaSeeder::class,
            MiantsaKristyVelonaSeeder::class,
            HiraHafaSeeder::class,
            InterludeSeeder::class,
            ChoraleSeeder::class,
            FdlSeeder::class,
            SafifSeeder::class,
            SampatiSeeder::class,
            SlkSeeder::class,
            StkSeeder::class,
            SvmSeeder::class,
            VflSeeder::class,
            SofiSeeder::class
        ]);
    }
}
