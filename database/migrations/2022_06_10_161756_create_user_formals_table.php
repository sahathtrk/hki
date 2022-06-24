<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFormalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_formals', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable();
            $table->string('nama_sd')->nullable();
            $table->string('masuk_sd')->nullable();
            $table->string('selesai_sd')->nullable();
            $table->string('nama_smp')->nullable();
            $table->string('masuk_smp')->nullable();
            $table->string('selesai_smp')->nullable();
            $table->string('nama_sma')->nullable();
            $table->string('masuk_sma')->nullable();
            $table->string('selesai_sma')->nullable();
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
        Schema::dropIfExists('user_formals');
    }
}
