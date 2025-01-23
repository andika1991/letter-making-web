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
        Schema::create('sksp', function (Blueprint $table) {
            $table->id();
            $table->string('nosurat', 50)->unique();
            $table->string('nama', 100);
            $table->string('nik', 20);
            $table->date('ttl');
            $table->string('agama', 50);
            $table->string('status', 50);
            $table->text('alamat');
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
        Schema::dropIfExists('sksp');
    }
};

