<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    public function pegawai (){
        return $this->hasMany(Pegawai::class);
    }
    public function jadwal_kelas (){
        return $this->hasMany(JadwalKelas::class);
    }
}
