<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spahamil', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('telp');
            $table->integer('beratbadan');
            $table->integer('usiakehamilan');
            $table->string('kehamilan_ke');
            $table->string('menggunakan_pen');
            $table->string('ada_keluhan');
            $table->string('kondisi_plasenta');
            $table->string('kram_tubuh');
            $table->string('pendarahan');
            $table->string('stretchmark');
            $table->string('lokasi_perawatan');
            $table->string('gerai');
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
        Schema::dropIfExists('spahamil');
    }
};
