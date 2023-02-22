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
            $table->integer('beratbadan')->nullable();
            $table->integer('usiakehamilan')->nullable();
            $table->string('kehamilan_ke')->nullable();
            $table->string('menggunakan_pen')->nullable();
            $table->string('ada_keluhan')->nullable();
            $table->string('kondisi_plasenta')->nullable();
            $table->string('kram_tubuh')->nullable();
            $table->string('pendarahan')->nullable();
            $table->string('stretchmark')->nullable();
            $table->string('lokasi_perawatan')->nullable();
            $table->string('gerai')->nullable();
            $table->string('status')->nullable();
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
