<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkbiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skbi', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nosurat')->unique()->comment('Nomor Surat');
            $table->string('nama')->comment('Nama Lengkap');
            $table->string('nik', 16)->comment('Nomor Induk Kependudukan');
            $table->date('ttl')->comment('Tanggal Lahir');
            $table->enum('jeniskelam', ['L', 'P'])->comment('Jenis Kelamin: L=Laki-laki, P=Perempuan');
            $table->string('pekerjaan')->nullable()->comment('Pekerjaan');
            $table->string('agama')->comment('Agama');
            $table->text('alamat')->comment('Alamat Lengkap');
            $table->string('nama_anggota')->comment('Nama Anggota Keluarga atau Orang Terkait');
            $table->string('nohkms')->nullable()->comment('Nomor Kartu Identitas (Keluarga atau Terkait)');
            $table->enum('jeniskelamin_anggota', ['L', 'P'])->comment('Jenis Kelamin Anggota: L=Laki-laki, P=Perempuan');
            $table->text('alamat_anggota')->comment('Alamat Anggota Keluarga atau Orang Terkait');
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
        Schema::dropIfExists('skbi');
    }
}
