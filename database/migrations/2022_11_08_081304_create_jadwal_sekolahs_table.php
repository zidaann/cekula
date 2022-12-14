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
            $table->string('judul')->unique();
            $table->string('slug')->unique();
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('deskripsi',1000);
            $table->timestamps();
            $table->softDeletes();
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
