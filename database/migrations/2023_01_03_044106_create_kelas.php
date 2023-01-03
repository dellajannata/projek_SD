<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mapel');
            $table->time('jm_mulai');
            $table->time('jm_akhir');
            $table->enum('hari',['senin','selasa','rabu','kamis','jumat','sabtu','minggu']);
            $table->integer('guru_id')->unsigned()->nullable();
            $table->foreign('guru_id')->references('id')->on('guru');
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
        Schema::dropIfExists('kelas');
    }
}
