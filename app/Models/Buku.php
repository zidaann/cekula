<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kategori_buku(){
        // 1 buku dimiliki 1 kategori
        return $this->belongsTo(KategoriBuku::class, 'kategori_id');
    }


    public function getRouteKeyName (){
        return 'slug';
    }
}
