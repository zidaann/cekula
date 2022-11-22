<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    public function pegawai (){
        return $this->belongsTo(Pegawai::class);
    }

    public function jadwalKelas (){
        return $this->hasMany(JadwalKelas::class);
    }
}
