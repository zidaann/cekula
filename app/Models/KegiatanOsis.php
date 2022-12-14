<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanOsis extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getRouteKeyName (){
        return 'slug';
    }

    public function user (){
        return $this->belongsTo(User::class);
    }
}
