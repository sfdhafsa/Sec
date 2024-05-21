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
        Schema::create('filieres', function (Blueprint $table) {
            $table->id();
            $table->string('intitule');
            $table->string('cycle');
            $table->unsignedBigInteger('idDepartement');
            $table->unsignedBigInteger('idSemestre');
            $table->foreign('idDepartement')->references('id')->on('departements')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('idSemestre')->references('id')->on('semestres')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filieres');
    }
};
