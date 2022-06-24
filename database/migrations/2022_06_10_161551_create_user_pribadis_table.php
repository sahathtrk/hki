<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPribadisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_pribadis', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable();
            $table->string('nama')->nullable();
            $table->string('nik')->nullable();
            $table->string('gender')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('tinggi')->nullable();
            $table->string('berat')->nullable();
            $table->string('golongan_darah')->nullable();
            $table->string('hobby')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('email')->nullable();
            $table->string('img_user')->nullable();
            $table->string('sosial_media')->nullable();
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
        Schema::dropIfExists('user_pribadis');
    }
}
