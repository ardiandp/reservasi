<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pascamelahirkan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('rencana_lahiran')->nullable();
            $table->string('hpl')->nullable();
            $table->string('berat_badan')->nullable();
            $table->string('anak_ke')->nullable();
            $table->string('proses_lahiran')->nullable();
            $table->string('rencana_asi')->nullable();
            $table->string('implan')->nullable();
            $table->string('perawatan')->nullable();
            $table->string('slimming')->nullable();
            $table->string('riwayat_penyakit')->nullable();
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
        Schema::dropIfExists('pascamelahirkan');
    }
};
