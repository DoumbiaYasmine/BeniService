<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('adherents', function (Blueprint $table) {
            $table->id();
            $table->string('nom_adherent');
            $table->string('prenom_adherent');
            $table->string('contact_adherent');
            $table->date('date_ajout_adherent');
            $table->string('numero_compte')->nullable();
            $table->string('numero_cni')->nullable();
            $table->string('lieu_residence')->nullable();
            $table->string('lieu_travail')->nullable();
            $table->string('photo')->nullable();
            $table->text('carnet')->nullable('fasle');
            $table->enum('statut', ['archiver', 'active'])->default('active');
            $table->string('solde');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adherents');
    }
};
