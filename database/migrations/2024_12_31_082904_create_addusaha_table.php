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
        Schema::table('usahas', function (Blueprint $table) {
            $table->string('namaUsaha')->after('alamat');
            $table->string('jenisUsaha')->after('namaUsaha');
            $table->text('alamatUsaha')->after('jenisUsaha');
            $table->date('mulaiBerdiri')->after('alamatUsaha')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usahas', function (Blueprint $table) {
            $table->dropColumn(['namaUsaha', 'jenisUsaha', 'alamatUsaha', 'mulaiBerdiri']);
        });
    }
};
