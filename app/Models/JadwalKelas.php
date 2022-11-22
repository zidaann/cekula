<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKelas extends Model
{
    use HasFactory;

    // public function getRouteKeyName (){
    //     return 'slug';
    // }
    public function kelas (){
        return $this->hasMany(Kelas::class);
    }

    public function mapel (){
        return $this->hasMany(Mapel::class);
    }
    
}
