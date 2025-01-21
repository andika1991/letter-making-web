<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHajatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hajat', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('nama'); // Nama field (string)
            $table->integer('umur'); // Umur field (integer)
            $table->string('pekerjaan'); // Pekerjaan field (string)
            $table->string('alamat'); // Alamat field (string)
            $table->string('nohp'); // No HP field (string)
            $table->string('nomor'); // Nomor field (string)
            $table->string('dalamrangka'); // Dalam Rangka field (string)
            $table->string('denganhiburan'); // Dengan Hiburan field (string)
            $table->date('haritgl'); // Hari / Tanggal field (date)
            $table->string('waktu'); // Waktu field (string, as text)
            $table->string('tempat'); // Tempat field (string)
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hajat');
    }
}
