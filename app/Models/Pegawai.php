<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;


    public function mapel (){
        return $this->hasMany(Mapel::class);
    }

    public function kelas (){
       return $this->hasOne(Kelas::class); 
    }

}
