<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveNilaiFromClusterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cluster', function (Blueprint $table) {
            $table->dropColumn('nilai_wawancara');
            $table->dropColumn('nilai_pertanyaan');
            $table->dropColumn('jml_pengalaman');
            $table->dropColumn('nilai_pengalaman');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cluster', function (Blueprint $table) {
            $table->dropColumn('nilai_wawancara');
            $table->dropColumn('nilai_pertanyaan');
            $table->dropColumn('jml_pengalaman');
            $table->dropColumn('nilai_pengalaman');
        });
    }
}