<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerima', function (Blueprint $table) {
            $table->id();
            $table->string('no_kk');
            $table->string('nik');
            $table->string('nama_kk');
            $table->string('jk');
            $table->string('dusun');
            $table->string('rt');
            $table->string('rw');
            $table->integer('tanggungan');
            $table->string('pekerjaan');
            $table->string('penghasilan');
            $table->string('jenis_lantai');
            $table->string('jenis_dinding');
            $table->string('sumber_air');
            $table->string('sumber_listrik');
            $table->string('sk_mck');
            $table->string('sk_rumah');
            $table->string('status');
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
        Schema::dropIfExists('penerima');
    }
}
