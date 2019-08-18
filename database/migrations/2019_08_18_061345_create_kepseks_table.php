<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKepseksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepsek', function (Blueprint $table) {
            $table->string('id');
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->string('jk')->nullable();
            $table->date('tanggalLahir')->nullable();
            $table->string('noTlp')->nullable();
            $table->string('email')->unique();
            $table->string('user_id')->nullable();
            $table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kepsek');
    }
}
