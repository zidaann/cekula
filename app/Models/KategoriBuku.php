<?php

namespace App\Models;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KategoriBuku extends Model
{
    use HasFactory;

    public function bukus (){
        // 1 kategori dapat memiliki banyak buku
       return $this->hasMany(Buku::class); 
    }
}
