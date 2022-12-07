<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelass = ([
            [
                'tingkat_kelas' => "7",
                'nama_kelas' => "7A",
                'pegawai_id' => mt_rand(1,2)
            ],
            [
                'tingkat_kelas' => "7",
                'nama_kelas' => "7B",
                'pegawai_id' => mt_rand(1,2)
                
            ],
            [
                'tingkat_kelas' => "7",
                'nama_kelas' => "7C",
                'pegawai_id' => mt_rand(1,2)
            ],
            [
                'tingkat_kelas' => "8",
                'nama_kelas' => "8A",
                'pegawai_id' => mt_rand(1,2)
            ],
            [
                'tingkat_kelas' => "8",
                'nama_kelas' => "8B",
                'pegawai_id' => mt_rand(1,2)
            ],
            [
                'tingkat_kelas' => "8",
                'nama_kelas' => "8C",
                'pegawai_id' => mt_rand(1,2)
            ],
            [
                'tingkat_kelas' => "9",
                'nama_kelas' => "9A",
                'pegawai_id' => mt_rand(1,2)
            ],
            [
                'tingkat_kelas' => "9",
                'nama_kelas' => "9B",
                'pegawai_id' => mt_rand(1,2)
            ],
            [
                'tingkat_kelas' => "9",
                'nama_kelas' => "9C",
                'pegawai_id' => mt_rand(1,2)
            ],
        ]);
        foreach($kelass as $kelas){
            Kelas::create($kelas);
        }
    }
}
