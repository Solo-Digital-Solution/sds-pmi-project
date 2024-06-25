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
        Schema::create('korban_terdampak', function (Blueprint $table) {
            $table->id('id_korban_terdampak');
            $table->integer('jmlh_kk')->default('0');
            $table->integer('jmlh_jiwa')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('korban_terdampak');
    }
};
