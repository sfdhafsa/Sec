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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('intitule');
            $table->integer('heuresCours');
            $table->integer('heuresTD');
            $table->integer('heuresTP');
            $table->string('niveau');
            $table->string('respoModule');
            $table->unsignedBigInteger('idFiliere');
            $table->foreign('idFiliere')->references('id')->on('filieres')->onDelete('cascade')->cascadeOnUpdate();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
