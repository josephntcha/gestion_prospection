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
        Schema::create('prospections', function (Blueprint $table) {
            $table->id();
            $table->string('nom_agent');
            $table->string('nom_client');
            $table->string('adresse_client');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->string('duree');
            $table->string('produit_presente');
            $table->text('observation');
            $table->integer('myCheckbox');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prospections');
    }
};
