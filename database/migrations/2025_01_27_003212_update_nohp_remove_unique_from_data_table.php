<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNohpRemoveUniqueFromDataTable extends Migration
{
    public function up()
    {
        Schema::table('data', function (Blueprint $table) {
            $table->dropUnique(['nohp']); // Menghapus constraint UNIQUE dari kolom nohp
        });
    }

    public function down()
    {
        Schema::table('data', function (Blueprint $table) {
            $table->unique('nohp'); // Mengembalikan constraint UNIQUE jika rollback
        });
    }
}
