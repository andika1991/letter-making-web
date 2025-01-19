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
        Schema::create('suratpermohonankrm', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('nosurat')->unique(); // Nomor Surat
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pekerjaan');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('agama');
            $table->string('status_perkawinan');
            $table->text('alamat');
            $table->string('no_hp');

            // Detail acara
            $table->string('hariac');
            $table->date('tanggalac');
            $table->time('waktuac');
            $table->string('acaraac');
            $table->text('alamatac');

            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suratpermohonankrm');
    }
};
