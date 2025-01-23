<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratJalanSapiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_jalan_sapi', function (Blueprint $table) {
            $table->id();
            $table->string('nosurat', 50)->unique();
            $table->string('nama', 100);
            $table->string('jeniskelam', 10);
            $table->integer('umur')->unsigned();
            $table->string('pekerjaan', 50);
            $table->text('alamat');
            
            $table->string('diperolehasal', 100);
            $table->string('jenishewan', 50);
            $table->integer('banyaknya')->unsigned();
            $table->integer('umur_hewan')->unsigned();
            $table->string('warna', 50);
            $table->string('tujuan', 100);
            $table->string('jenisangkutan', 50);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_jalan_sapi');
    }
}
