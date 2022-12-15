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
        Schema::create('kegiatan_oses', function (Blueprint $table) {
            $table->id();
            $table->string('pamflet')->nullable();
            $table->string('nama')->unique();
            $table->string('slug')->unique();
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('lokasi');
            $table->foreignId('user_id');
            $table->string('deskripsi');
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
        Schema::dropIfExists('kegiatan_oses');
    }
};
