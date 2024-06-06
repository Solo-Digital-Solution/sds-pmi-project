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
            $table->bigInteger('luka_berat');
            $table->bigInteger('luka_ringan');
            $table->bigInteger('meninggal');
            $table->bigInteger('hilang');
            $table->bigInteger('mengungsi');
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
