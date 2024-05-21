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
        Schema::create('semestres', function (Blueprint $table) {
            $table->id();
            $table->integer('numeroSemestre');
            $table->string('saison');
            $table->integer('nbrSemaines');
            // $table->unsignedBigInteger('idModule'); // Nouvelle clé étrangère ajoutée
            // $table->foreign('idModule')->references('idModule')->on('modules')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semestres');
    }
};
