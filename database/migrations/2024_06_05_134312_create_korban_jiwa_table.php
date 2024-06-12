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
            $table->integer('luka_berat');
            $table->integer('luka_ringan');
            $table->integer('meninggal');
            $table->integer('hilang');
            $table->integer('mengungsi');
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
