<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sktm', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('nama'); // Nama pemohon
            $table->string('tempat_lahir'); // Tempat lahir
            $table->date('tanggal_lahir'); // Tanggal lahir
            $table->char('nik', 16); // Nomor Induk Kependudukan
            $table->string('nomor_surat'); // Nomor surat
            $table->string('kode_surat'); // Kode surat
            $table->string('ttd_scan')->nullable(); // Path tanda tangan (opsional)
            $table->string('qrcode')->nullable(); // Path QR Code (opsional)
            $table->string('hash', 64); // Hash untuk verifikasi
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sktm'); // Menghapus tabel sktm jika rollback
    }
};
