<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaliKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wali_kelas', function (Blueprint $table) {
            $table->id();
            $table->enum('kelas',['Kelas 1','Kelas 2','Kelas 3','Kelas 4','Kelas 5','Kelas 6']);
            $table->integer('jmlh_siswa_lk')->nullable();
            $table->integer('jmlh_siswa_pr')->nullable();
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
        Schema::dropIfExists('wali_kelas');
    }
}
