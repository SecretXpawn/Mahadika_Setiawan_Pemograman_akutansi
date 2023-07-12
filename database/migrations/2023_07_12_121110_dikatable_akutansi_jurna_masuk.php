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
        Schema::create('dikatabel_akuntansi_jurnal_masuk', function (Blueprint $table) {
            $table->integer('nomor_jurnal')->autoIncrement();
            $table->string('kode_jurnal', 15);
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->timestamp('Laporan_dibuat')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dikatabel_akuntansi_jurnal_masuk');
    }
};