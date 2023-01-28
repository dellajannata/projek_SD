<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEkstra1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekstra1', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('nama')->nullable();
            $table->time('jam')->nullable();
            $table->enum('hari',['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu']);
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
        Schema::dropIfExists('table_ekstra1');
    }
}
