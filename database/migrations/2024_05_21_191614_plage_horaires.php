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
        Schema::create('plage_horaires', function (Blueprint $table) {
            $table->id();
            $table->integer('semaineDebut');
            $table->integer('semaineFin');
            $table->integer('heureDebut');
            $table->integer('heureFin');
            $table->string('jour');
            $table->string('type');
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('professeur_id');
            $table->unsignedBigInteger('salle_id');
            $table->timestamps();

            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
            $table->foreign('professeur_id')->references('id')->on('professeurs')->onDelete('cascade');
            $table->foreign('salle_id')->references('id')->on('salle_dispos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plage_horaires');
    }
};
