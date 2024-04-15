<?php

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
        Schema::disableForeignKeyConstraints();
        Schema::create('besoins', function (Blueprint $table) {
            $table->id();
            $table->string('title_ouvrage');
            $table->string('auteur');
            $table->string('edition_date');
            $table->string('quantite');
            $table->timestamps();
            $table->foreignId('matricule')->constrained('emprunteurs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('besoins');
    }
};
