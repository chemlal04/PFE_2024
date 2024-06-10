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
        Schema::create('chambres', function (Blueprint $table) {

            $table->id();
            $table->string('statut')->default('En attente');
            $table->string('id_name');
            $table->unsignedInteger('id_user');
            $table->string('Vile_hotel');
            $table->unsignedInteger('n_place');
            $table->unsignedInteger('numero');
            $table->unsignedInteger('N_etape');
            $table->double('prix');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chambres');
    }
};