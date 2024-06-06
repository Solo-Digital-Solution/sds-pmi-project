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
        Schema::create('personil', function (Blueprint $table) {
            $table->id('id_personil');
            $table->integer('pengurus');
            $table->integer('staf_markas');
            $table->integer('relawan_pmi');
            $table->integer('sukarelawan_spesialis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personil');
    }
};
