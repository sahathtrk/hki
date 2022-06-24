<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPasangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_pasangans', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable();
            $table->string('nama_pasangan')->nullable();
            $table->string('nik_pasangan')->nullable();
            $table->string('gender_pasangan')->nullable();
            $table->string('nama_ibu_pasangan')->nullable();
            $table->string('nama_ayah_pasangan')->nullable();
            $table->string('tinggi_pasangan')->nullable();
            $table->string('berat_pasangan')->nullable();
            $table->string('golongan_darah_pasangan')->nullable();
            $table->string('hobby_pasangan')->nullable();
            $table->string('no_hp_pasangan')->nullable();
            $table->string('email_pasangan')->nullable();
            $table->string('sosial_media_pasangan')->nullable();
            $table->string('img_user')->nullable();
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
        Schema::dropIfExists('user_pasangans');
    }
}
