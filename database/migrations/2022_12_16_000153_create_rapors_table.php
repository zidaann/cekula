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
        Schema::create('rapors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('tahun');
            $table->integer('semester');
            $table->foreignId('mapel_id');
            $table->foreignId('penilaian_pembelajaran_id');
            $table->foreignId('penilaian_ekstrakulikuler_id');
            $table->foreignId('presensi_murid_id');
            $table->string('ttd_wali_murid')->nullable();
            $table->string('ttd_wali_kelas')->nullable();
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
        Schema::dropIfExists('rapors');
    }
};
