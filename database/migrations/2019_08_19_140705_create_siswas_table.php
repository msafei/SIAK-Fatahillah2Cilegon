<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->string('id');
            $table->string('nama');
            $table->string('jk')->nullable();
            $table->date('tanggalLahir')->nullable();
            $table->string('kelas_id')->nullable();
            $table->string('alamatSiswa')->nullable();
            $table->string('namaIbu')->nullable();
            $table->string('namaAyah')->nullable();
            $table->string('alamatOrtu')->nullable();
            $table->string('noTlpOrtu')->nullable();
            $table->string('status')->default(1);
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
        Schema::dropIfExists('siswa');
    }
}
