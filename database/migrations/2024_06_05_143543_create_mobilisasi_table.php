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
        Schema::create('mobilisasi', function (Blueprint $table) {
            $table->id('id_mobilisasi');
            $table->foreignId('id_personil')->references('id_personil')->on('personil');
            $table->foreignId('id_tsr')->references('id_tsr')->on('tsr')->onDelete('cascade');
            $table->foreignId('id_tdb')->references('id_tdb')->on('tdb')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobilisasi');
    }
};
