<?php

namespace App\Models;

use App\Models\Kelas;
use Yajra\DataTables\DataTables;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JadwalSekolah extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function getRouteKeyName (){
        return 'slug';
    }

    public function status (){
        return $this->hasOne(Status::class);
    }

    

}
