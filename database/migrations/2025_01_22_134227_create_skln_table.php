<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSklnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skln', function (Blueprint $table) {
            $table->id();
            $table->string('nosurat')->unique()->comment('Nomor Surat');
            $table->string('nama')->comment('Nama Lengkap');
            $table->string('nik', 16)->comment('Nomor Induk Kependudukan');
            $table->date('ttl')->comment('Tanggal Lahir');
            $table->enum('jeniskelam', ['Laki-Laki', 'Perempuan'])->comment('Jenis Kelamin: L=Laki-laki, P=Perempuan');
            $table->text('alamat')->comment('Alamat Lengkap');
            $table->string('kondisi')->comment('Kondisi yang Dilaporkan');
            $table->string('tujuan')->comment('Tujuan Penggunaan Surat');
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
        Schema::dropIfExists('skln');
    }
}
