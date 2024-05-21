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
        Schema::create('salle_dispos', function (Blueprint $table) {
            $table->id();
            $table->string('typeSalle');
            $table->integer('numero');
            $table->boolean('disponibilite');
            $table->string('jour');
            $table->boolean('matin');
            $table->boolean('apres_midi');
            $table->unsignedBigInteger('idSecretaire');
            $table->foreign('idSecretaire')->references('id')->on('secretaires')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salle_dispos');
    }
};
