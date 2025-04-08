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
        Schema::create('payement_mensuels', function (Blueprint $table) {
            $table->id();
            $table->string('mois');
            $table->integer('nombre_de_jours');
            $table->date('date');
            $table->date('nombre_jour_payer');
            $table->string('montant_total');
            $table->foreignId('id_adherent')->references('id')->on('adherents')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payement_mensuels');
    }
};
