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
        Schema::create('surattidakmampu', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('jeniskelamin', ['Laki-laki', 'Perempuan']);
            $table->string('tempattgllahir');
            $table->string('agama');
            $table->string('alamat');
            $table->string('alamat2')->nullable();
            $table->string('tujuan')->nullable(); // misal untuk keperluan beasiswa
            $table->integer('umur')->nullable();
            $table->string('muridmhs'); // murid atau mahasiswa
            $table->timestamps(); // untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surattidakmampu');
    }
};