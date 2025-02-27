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
        Schema::create('detailunit', function (Blueprint $table) {
            $table->id('id_unit');
            $table->integer('kamar_tidur');
            $table->integer('kamar_mandi');
            $table->string('Ruang_tamu');
            $table->string('Carport');
            $table->string('Luas_tanah');
            $table->string('Luas_bangunan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailunit');
    }
};
