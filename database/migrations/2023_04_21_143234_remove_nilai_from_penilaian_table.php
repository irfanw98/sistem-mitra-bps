<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveNilaiFromPenilaianTable extends Migration
{
    public function up()
    {
        Schema::table('penilaian', function (Blueprint $table) {
            $table->dropColumn('nilai_c1');
            $table->dropColumn('nilai_c2');
            $table->dropColumn('nilai_c3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penilaian', function (Blueprint $table) {
            $table->dropColumn('nilai_c1');
            $table->dropColumn('nilai_c2');
            $table->dropColumn('nilai_c3');
        });
    }
}