<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
    use HasFactory;

    public function jadwal_kelas (){
       return $this->belongsTo(JadwalKelas::class); 
    }
}
