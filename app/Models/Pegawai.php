<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    public function jabatan (){
        return $this->hasOne(Jabatan::class);
    }
    public function mapel (){
       return $this->hasMany(Mapel::class); 
    }
    public function kelas (){
       return $this->belongsTo(Kelas::class); 
    }
    public function jadwal_kelas (){
        return $this->belongsTo(JadwalKelas::class);
    }

}
