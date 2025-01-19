<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id(); // Kolom id auto-increment
            $table->string('nama'); // Nama, tipe string
            $table->integer('umur'); // Umur, tipe integer
            $table->string('pekerjaan'); // Pekerjaan, tipe string
            $table->string('hiburan')->nullable(); // Hiburan, tipe string, bisa null
            $table->text('alamat'); // Alamat, tipe text untuk data panjang
            $table->string('nohp')->unique(); // Nomor HP, tipe string, harus unik
            $table->date('haritgl'); // Tanggal, tipe date
            $table->string('waktu'); // Waktu, tipe time
            $table->string('tempat'); // Tempat, tipe string
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
