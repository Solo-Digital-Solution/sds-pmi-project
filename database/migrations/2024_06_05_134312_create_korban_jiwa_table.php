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
        Schema::create('korban_jiwa', function (Blueprint $table) {
            $table->id('id_korban_jiwa');
            $table->integer('luka_berat')->default('0');
            $table->integer('luka_ringan')->default('0');
            $table->integer('meninggal')->default('0');
            $table->integer('hilang')->default('0');
            $table->integer('mengungsi')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('korban_jiwa');
    }
};
