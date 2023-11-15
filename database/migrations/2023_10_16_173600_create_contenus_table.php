<?php

use App\Models\SousCategorie;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contenus', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(SousCategorie::class);
            $table->string('titre');
            $table->integer('numero')->nullable();
            $table->string('fichier');
            $table->timestamp('fichier_date')->nullable();
            $table->decimal('fichier_taille', 10, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contenus');
    }
};
