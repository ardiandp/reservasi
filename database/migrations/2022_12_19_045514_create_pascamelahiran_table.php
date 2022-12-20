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
        Schema::create('pascamelahiran', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('rencana_lahiran');
            $table->string('hpl');
            $table->string('berat_badan');
            $table->string('anak_ke');
            $table->string('proses_lahiran');
            $table->string('rencana_asi');
            $table->string('implan');
            $table->string('perawatan');
            $table->string('slimming');
            $table->string('riwayat_penyakit');
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
        Schema::dropIfExists('pascalahiran');
    }
};
