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
         Schema::create('skps', function (Blueprint $table) {
             $table->id(); // Primary key
             $table->string('nosurat')->unique()->comment('Nomor Surat'); // Nomor surat harus unik
             $table->string('nama')->comment('Nama Lengkap');
             $table->string('nik', 16)->comment('Nomor Induk Kependudukan (NIK)'); // Maksimal 16 karakter
             $table->date('ttl')->comment('Tanggal Lahir');
             $table->enum('jeniskelam', ['L', 'P'])->comment('Jenis Kelamin: L=Laki-laki, P=Perempuan');
             $table->string('agama')->comment('Agama');
             $table->string('pekerjaan')->nullable()->comment('Pekerjaan (opsional)');
             $table->string('kewarga')->comment('Kewarganegaraan');
             $table->text('alamat')->comment('Alamat Lengkap');
             $table->string('tujuan')->comment('Tujuan Surat');
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
         Schema::dropIfExists('skps');
     }
};
