<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIzinsuamiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izinsuami', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nosurat')->unique()->comment('Nomor Surat');
            
            // Data Suami
            $table->string('namasuami')->comment('Nama Suami');
            $table->date('ttlsuami')->comment('Tanggal Lahir Suami');
            $table->string('niksuami', 16)->comment('NIK Suami');
            $table->enum('jeniskelamsuami', ['L', 'P'])->comment('Jenis Kelamin Suami');
            $table->string('agamasuami')->comment('Agama Suami');
            $table->string('pekerjaansuami')->nullable()->comment('Pekerjaan Suami');
            $table->text('alamatsuami')->comment('Alamat Suami');

            // Data Istri
            $table->string('namaistri')->comment('Nama Istri');
            $table->date('ttlistri')->comment('Tanggal Lahir Istri');
            $table->string('nikistri', 16)->comment('NIK Istri');
            $table->enum('jeniskelamistri', ['L', 'P'])->comment('Jenis Kelamin Istri');
            $table->string('agamaistri')->comment('Agama Istri');
            $table->string('pekerjaanistri')->nullable()->comment('Pekerjaan Istri');
            $table->text('alamatistri')->comment('Alamat Istri');

            // Tujuan
            $table->string('tujuan')->comment('Tujuan Surat');

            $table->timestamps(); // created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('izinsuami');
    }
}
