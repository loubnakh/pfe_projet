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
        Schema::create('ouvrages', function (Blueprint $table) {
            $table->id();
            $table->string('idouvrage');
            $table->string('num_l_j');
            $table->string('title_ouvrage');
            $table->string('auteur');
            $table->string('edition_date');
            $table->string('support_accomp');
            $table->string('quantite');
            $table->string('recu_le');
            $table->string('origine');
            $table->string('code_secteur');
            $table->string('observation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ouvrages');
    }
};