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
        Schema::create('report', function (Blueprint $table) {
            $table->id('id_report');
            $table->unsignedBigInteger('id_perumahan');
            $table->unsignedBigInteger('id_blok');
            $table->string('nama_pembeli');
            $table->decimal('nik', 25, 0);
            $table->string('alamat');
            $table->string('no_tlp');
            $table->string('email');
            $table->date('tgl_pesan');
            $table->date('tgl_selesai');
            $table->string('jumlah_dp');
            $table->string('sisa_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report');
    }
};
