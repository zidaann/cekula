<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'status',
        'is_osis',   
        'is_pembina_osis',
        'is_wali_kelas',
        //Siswa 
        'kelas_id',
        'nis',
        // 'nisn',
        // 'nik',
        // 'tempat_lahir',
        // 'tanggal_lahir',
        // 'jenis_kelamin',
        // 'agama',
        // 'alamat',
        // 'no_telp',
        // 'nomor_skhun',
        // 'tahun_masuk',
        // 'asal_sekolah_dasar',
        // 'alamat_sekolah_dasar',
        'username',
        'image',
        'password',
        'password2'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime', 
    ];
}
