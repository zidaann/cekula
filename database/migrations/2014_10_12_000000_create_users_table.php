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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('status');

            //Role Siswa
            $table->boolean('is_osis')->default(0);

            //Role Guru
            $table->boolean('is_pembina_osis')->default(0);
            $table->boolean('is_wali_kelas')->default(0);

            //Siswa
            $table->string('kelas_id')->nullable();
            $table->string('nis')->nullable();
            // $table->string('nisn')->nullable();
            // $table->string('nik')->nullable();
            // $table->string('tempat_lahir')->nullable();
            // $table->string('tanggal_lahir')->nullable();
            // $table->string('jenis_kelamin')->nullable();
            // $table->string('agama')->nullable();
            // $table->string('alamat')->nullable();
            // $table->string('no_telp')->nullable();
            // $table->string('nomor_skhun')->nullable();
            // $table->string('tahun_masuk')->nullable();
            // $table->string('asal_sekolah_dasar')->nullable();
            // $table->string('alamat_sekolah_dasar')->nullable();
            //Pegawai
            // $table->string('nis')->nullable();
            $table->string('username')->unique()->nullable();
            $table->string('image')->nullable();
            $table->string('password')->nullable();
            $table->string('password2')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
