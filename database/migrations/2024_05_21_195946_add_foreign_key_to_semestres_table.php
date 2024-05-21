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
        Schema::table('semestres', function (Blueprint $table) {
            $table->unsignedBigInteger('idModule'); // Assurez-vous que le type est correct
            $table->foreign('idModule')->references('id')->on('modules')->onDelete('cascade')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('semestres', function (Blueprint $table) {
            $table->dropForeign(['idModule']); // Supprimer la clé étrangère
            $table->dropColumn('idModule'); // Supprimer la colonne
        });
    }
};
