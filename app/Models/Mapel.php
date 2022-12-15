<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $guarded = [];

   
    public function pegawai (){
        return $this->belongsTo(Pegawai::class);
    }
    public function jadwal_kelas (){
       return $this->belongsTo(JadwalKelas::class); 
    }
}
