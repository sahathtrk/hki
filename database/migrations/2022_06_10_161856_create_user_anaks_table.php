<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAnaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_anaks', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable();
            $table->string('nama_anak')->nullable();
            $table->string('nik_anak')->nullable();
            $table->string('gender_anak')->nullable();
            $table->string('nama_ibu_anak')->nullable();
            $table->string('nama_ayah_anak')->nullable();
            $table->string('tinggi_anak')->nullable();
            $table->string('berat_anak')->nullable();
            $table->string('golongan_darah_anak')->nullable();
            $table->string('hobby_anak')->nullable();
            $table->string('no_hp_anak')->nullable();
            $table->string('email_anak')->nullable();
            $table->string('sosial_media_anak')->nullable();
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
        Schema::dropIfExists('user_anaks');
    }
}
