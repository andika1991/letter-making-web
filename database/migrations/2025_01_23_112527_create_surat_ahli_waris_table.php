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
        Schema::create('surat_ahli_waris', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('nosurat')->unique(); // Nomor Surat
            $table->string('nama_almarhum'); // Nama Almarhum
            $table->integer('tahun_meninggal'); // Tahun Meninggal
            $table->string('lokasi_meninggal'); // Lokasi Meninggal
            $table->string('tujuan'); // Tujuan Surat
            $table->integer('luas_tanah'); // Luas Tanah
            $table->text('alamat_tanah'); // Alamat Tanah
            $table->unsignedBigInteger('penerima_kuasa')->nullable(); // ID Penerima Kuasa
            $table->date('tanggal_surat'); // Tanggal Surat
            $table->timestamps(); // Created At & Updated At
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_ahli_waris');
    }
};
