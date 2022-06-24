<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInformalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_informals', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable();
            $table->string('jenis_pendidikan')->nullable();
            $table->date('tanggal_pendidikan')->nullable();
            $table->string('tempat')->nullable();
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
        Schema::dropIfExists('user_informals');
    }
}
