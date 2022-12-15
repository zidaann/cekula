<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function pegawai(){
        return $this->hasMany(User::class);
    }
    public function jadwal_kelas (){
        return $this->hasMany(JadwalKelas::class);
    }
}
