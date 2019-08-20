<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominalPembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominal_pembayaran', function (Blueprint $table) {
            $table->string('id');
            $table->string('jenis_pembayaran_id');
            $table->string('kelas_id');
            $table->string('nominal');
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
        Schema::dropIfExists('nominal_pembayaran');
    }
}
