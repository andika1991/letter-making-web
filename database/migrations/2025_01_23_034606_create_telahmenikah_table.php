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
        Schema::create('telahmenikah', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nosurat')->unique()->comment('Nomor Surat');
            
            // Data Suami
            $table->string('namasuami')->comment('Nama Suami');
            $table->string('niksuami', 16)->comment('NIK suami');
            $table->date('ttlsuami')->comment('Tanggal Lahir Suami');
            $table->enum('jeniskelam', ['L', 'P'])->comment('Jenis Kelamin Suami');
            $table->string('agama')->comment('Agama Suami');
            $table->string('pekerjaan')->nullable()->comment('Pekerjaan Suami');
            $table->text('alamat')->comment('Alamat Suami');
            
            // Data Istri
            $table->string('namaistri')->comment('Nama Istri');
            $table->date('ttlistri')->comment('Tanggal Lahir Istri');
            $table->string('nikistri', 16)->comment('NIK Istri');
            $table->enum('jeniskelaministri', ['L', 'P'])->comment('Jenis Kelamin Istri');
            $table->string('agamaistri')->comment('Agama Istri');
            $table->string('pekerjaanistri')->nullable()->comment('Pekerjaan Istri');
            $table->text('alamatistri')->comment('Alamat Istri');
            
            // Data Pernikahan
            $table->string('yangmembuatpernyataan')->comment('Pihak yang Membuat Pernyataan');
            $table->year('tahunmenikah')->comment('Tahun Menikah');
            
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
        Schema::dropIfExists('telahmenikah');
    }
};
