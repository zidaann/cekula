<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKelas extends Model
{
    use HasFactory;
    protected $guarded = [];
    // public function getRouteKeyName (){
    //     return 'slug';
    // }
    
    public function pegawai (){
        // return $this->hasMany(Pegawai::class);
        return $this->belongsTo(Pegawai::class);
    }
    public function hari (){
    //    return $this->hasMany(Hari::class); 
       return $this->belongsTo(Hari::class); 
    }
    public function kelas (){
       return $this->belongsTo(Kelas::class); 
    }
    public function mapel (){
        // return $this->hasMany(Mapel::class);
        return $this->belongsTo(Mapel::class);
    }
}
