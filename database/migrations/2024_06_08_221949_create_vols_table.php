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
        Schema::create('vols', function (Blueprint $table) {
            $table->id();
            $table->string('statut')->default('En attente');
            $table->unsignedInteger('id_user');
            $table->string('Nom_vol');
            $table->string('id_name');
            $table->string('Ville_depart');
            $table->string('Vile_arrivee');
            $table->date('date_depart');
            $table->date('date_arrivee'); 
            $table->time('H_depart');
            $table->time('H_arrivage'); 
            $table->string('type');
            $table->unsignedInteger('N_place');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->double('prix');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vols');
    }
};
