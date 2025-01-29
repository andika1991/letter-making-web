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
        Schema::create('ahli_waris', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('surat_ahli_waris_id'); // Foreign Key ke surat_ahli_waris
            $table->string('nama'); // Nama Ahli Waris
            $table->integer('anakke')->nullable(); // Anak Ke (Opsional)
            $table->integer('umur'); // Umur Ahli Waris
            $table->text('alamat'); // Alamat Ahli Waris
            $table->timestamps(); // Created At & Updated At

            // Relasi Foreign Key
            $table->foreign('surat_ahli_waris_id')
                  ->references('id')
                  ->on('surat_ahli_waris')
                  ->onDelete('cascade'); // Cascade jika surat dihapus
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ahli_waris');
    }
};
