<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared(
            'ALTER TABLE sous_categories
            ADD FOREIGN KEY (categorie_id)
            REFERENCES categories(id);

            ALTER TABLE contenus
            ADD FOREIGN KEY (sous_categorie_id)
            REFERENCES sous_categories(id);
            '
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
