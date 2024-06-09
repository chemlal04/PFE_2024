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
            $table->string('Nom_vol');
            $table->string('Ville_depart');
            $table->string('Vile_arrivee');
            $table->date('date_depart');
            $table->date('date_arrivee'); 
            $table->time('H_depart');
            $table->time('H_arrivage'); 
            $table->string('type');
            $table->unsignedInteger('N_place');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->string('image5');
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
