<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGerejawisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_gerejawis', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable();
            $table->string('tempat_baptis')->nullable();
            $table->date('tanggal_baptis')->nullable();
            $table->string('tempat_sidhi')->nullable();
            $table->date('tanggal_sidhi')->nullable();
            $table->string('tempat_menikah')->nullable();
            $table->date('tanggal_menikah')->nullable();
            $table->string('tempat_tahbisan')->nullable();
            $table->date('tanggal_tahbisan')->nullable();
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
        Schema::dropIfExists('user_gerejawis');
    }
}
