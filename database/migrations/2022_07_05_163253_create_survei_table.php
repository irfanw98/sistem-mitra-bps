<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survei', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('nik')->unique();
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('email')->unique();
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->integer('umur');
            $table->string('nomor_hp');
            $table->string('pengalaman_survei')->nullable();
            $table->string('memiliki_fasilitas')->nullable();
            $table->enum('menggunakan_motor', ['bisa', 'tidak'])->nullable();
            $table->enum('menggunakan_hp', ['bisa', 'tidak'])->nullable();
            $table->enum('menggunakan_laptop', ['bisa', 'tidak'])->nullable();
            $table->enum('menggunakan_pc', ['bisa', 'tidak'])->nullable();
            $table->string('pendidikan');
            $table->string('status_perkawinan');
            $table->integer('status')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
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
        Schema::dropIfExists('survei');
    }
}