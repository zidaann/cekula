<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'calon_murid',
        'NISN',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'agama',
        'telepon_murid',
        'tahun_masuk',
        'asal_sekolah',
        'alamat_asal_sekolah',
        'foto_murid',
        'nama_bapak',
        'nama_ibu',
        'pekerjaan_bapak',
        'pekerjaan_ibu',
        'penghasilan_bapak',
        'penghasilan_ibu',
        'telepon_bapak',
        'telepon_ibu',
        'nama_wali',
        'pekerjaan_wali',
        'telepon_wali',
        'SKL',
        'rapor_K4S1',
        'rapor_K4S2',
        'rapor_K5S1',
        'rapor_K5S2',
        'rapor_K6S1',
        'rapor_K6S2',
        'KK',
        'Akte',
        'status',
        'sandi'
    ];
}
