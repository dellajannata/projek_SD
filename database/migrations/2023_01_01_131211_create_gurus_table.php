<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('nik')->unique();
            $table->string('nama');
            $table->enum('jk',['p','l']);
            $table->date('tglLahir');
            $table->string('nuptk')->unique();
            $table->string('nip')->unique();
            $table->string('gol');
            $table->string('status');
            $table->string('jenisPTK');
            $table->string('pendidikanTerakhir');
            $table->string('jurusan');
            $table->date('tmt_gtk');
            $table->date('tmt_gtk_induk');
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
        Schema::dropIfExists('guru');
    }
}
