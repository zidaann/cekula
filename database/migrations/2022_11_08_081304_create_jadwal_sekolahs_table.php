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
        Schema::create('jadwal_sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('pamflet')->nullable();
            $table->string('judul');
            $table->date('tanggal_pelaksanaan');
            $table->date('tanggal_selesai_pelaksanaan');
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
        Schema::dropIfExists('jadwal_sekolahs');
    }
};
