<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClusterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cluster', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('survei_id');
            $table->integer('nilai_wawancara')->nullable();
            $table->integer('nilai_pertanyaan')->nullable();
            $table->integer('jml_pengalaman');
            $table->integer('nilai_pengalaman');
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
        Schema::dropIfExists('cluster');
    }
}