<?php

use App\Models\Categorie;
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
        Schema::create('sous_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Categorie::class);
            $table->string('nom', 120);
            $table->string('acronyme', 15);
            $table->integer('ordre')->nullable();
            $table->boolean('nouvel_onglet')->default(false);
            $table->boolean('afficher_acronyme')->default(true);
            $table->boolean('numero_requis')->default(true);
            $table->string('logo')->default('fjkm.jpg');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sous_categories');
    }
};
