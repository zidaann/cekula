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
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('calon_murid');
            $table->integer('NISN');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');         
            $table->string('alamat');
            $table->string('agama');
            $table->string('telepon_murid');
            $table->string('tahun_masuk');
            $table->string('asal_sekolah');
            $table->string('alamat_asal_sekolah');
            $table->string('foto_murid')->nullable();
            $table->string('nama_bapak')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('pekerjaan_bapak')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('penghasilan_bapak')->nullable();
            $table->string('penghasilan_ibu')->nullable();
            $table->string('telepon_bapak')->nullable();
            $table->string('telepon_ibu')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('telepon_wali')->nullable();
            $table->string('SKL')->nullable();
            $table->string('rapor_K4S1')->nullable();
            $table->string('rapor_K4S2')->nullable();
            $table->string('rapor_K5S1')->nullable();
            $table->string('rapor_K5S2')->nullable();
            $table->string('rapor_K6S1')->nullable();
            $table->string('rapor_K6S2')->nullable();
            $table->string('KK')->nullable();
            $table->string('Akte')->nullable();
            $table->string('status')->nullable();
            $table->string('sandi')->nullable();
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
        Schema::dropIfExists('ppdbs');
    }
};
