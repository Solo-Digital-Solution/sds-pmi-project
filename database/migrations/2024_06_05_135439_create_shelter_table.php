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
        Schema::create('shelter', function (Blueprint $table) {
            $table->id('id_lokasi_shelter');
            $table->text('lokasi_shelter')->default('-');
            $table->integer('jumlah_kk')->default('0');
            $table->integer('jumlah_jiwa')->default('0');
            $table->integer('jumlah_laki')->default('0');
            $table->integer('jumlah_perempuan')->default('0');
            $table->integer('dibawah_lima')->default('0');
            $table->integer('antara_lima_dan_delapanbelas')->default('0');
            $table->integer('lebih_delapanbelas')->default('0');
            $table->integer('jumlah')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shelter');
    }
};
