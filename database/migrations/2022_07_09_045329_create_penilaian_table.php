<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('survei_id');
            $table->integer('nilai_c1');
            $table->integer('nilai_c2');
            $table->integer('nilai_c3');
            $table->integer('nilai_c4');
            $table->double('hasil_akhir');
            $table->timestamps();

            $table->foreign('survei_id')->references('id')->on('survei')->onDelete('restrict');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaian');
    }
}