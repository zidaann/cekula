<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaSekolah extends Model
{
    use HasFactory;

    // protected $fillable = ['pamflet', 'judul', 'slug', 'tgl_mulai', 'tgl_selesai', 'deskripsi'];
    protected $guarded = [];
    public function getRouteKeyName (){
        return 'slug';
    }
}
