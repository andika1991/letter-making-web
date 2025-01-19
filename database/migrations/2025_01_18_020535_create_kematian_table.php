<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKematianTable extends Migration
{
    public function up()
    {
        Schema::create('kematian', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom id sebagai primary key
            $table->string('nosurat')->unique(); // Nomor surat kematian, unik
            $table->string('nama'); // Nama almarhum
            $table->string('tempatTanggallahir'); // Tempat dan tanggal lahir
            $table->enum('jeniskelamin', ['Laki-Laki', 'Perempuan']); // Jenis kelamin (L untuk laki-laki, P untuk perempuan)
            $table->string('agama'); // Agama
            $table->string('pekerjaan'); // Pekerjaan
            $table->text('alamat'); // Alamat lengkap
            $table->date('tglmeninggal'); // Tanggal meninggal
            $table->time('waktu'); // Waktu meninggal
            $table->string('tempatkematian'); // Tempat meninggal
            $table->string('lokasipemakaman'); // Lokasi pemakaman
            $table->string('sebabkematian'); // Sebab kematian
            $table->timestamps(); // Kolom untuk menyimpan waktu pembuatan dan pembaruan data
        });
    }

    public function down()
    {
        Schema::dropIfExists('kematian'); // Menghapus tabel kematian jika rollback dilakukan
    }
}
