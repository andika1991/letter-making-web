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
        Schema::create('surat_izin_ortu', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat')->unique();
            $table->string('keperluan');
            $table->string('kepala_kampung');
            
            // Kolom untuk pemberi izin
            $table->string('pemberi_izin_role'); // Ayah, Ibu, Suami, Istri
            $table->string('pemberi_izin_nama');
            $table->string('pemberi_izin_tempat_lahir');
            $table->date('pemberi_izin_tgl_lahir');
            $table->string('pemberi_izin_nik');
            $table->enum('pemberi_izin_jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('pemberi_izin_agama');
            $table->string('pemberi_izin_pekerjaan');
            $table->text('pemberi_izin_alamat');

            // Kolom untuk pemohon izin
            $table->string('pemohon_izin_role'); // Anak, Suami, Istri
            $table->string('pemohon_izin_nama');
            $table->string('pemohon_izin_tempat_lahir');
            $table->date('pemohon_izin_tgl_lahir');
            $table->string('pemohon_izin_nik');
            $table->enum('pemohon_izin_jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('pemohon_izin_agama');
            $table->string('pemohon_izin_pekerjaan');
            $table->text('pemohon_izin_alamat');

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
        Schema::dropIfExists('surat_izin');
    }
};
