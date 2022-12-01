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
                'kode_kelas' => "A",
                'nama_kelas' => "7A",
            ],
            [
                'tingkat_kelas' => "7",
                'kode_kelas' => "B",
                'nama_kelas' => "7B",
                
            ],
            [
                'tingkat_kelas' => "7",
                'kode_kelas' => "C",
                'nama_kelas' => "7C",
            ],
            [
                'tingkat_kelas' => "8",
                'kode_kelas' => "A",
                'nama_kelas' => "8A",
            ],
            [
                'tingkat_kelas' => "8",
                'kode_kelas' => "B",
                'nama_kelas' => "8B",
            ],
            [
                'tingkat_kelas' => "8",
                'kode_kelas' => "C",
                'nama_kelas' => "8C",
            ],
            [
                'tingkat_kelas' => "9",
                'kode_kelas' => "A",
                'nama_kelas' => "9A",
            ],
            [
                'tingkat_kelas' => "9",
                'kode_kelas' => "B",
                'nama_kelas' => "9B",
            ],
            [
                'tingkat_kelas' => "9",
                'kode_kelas' => "C",
                'nama_kelas' => "9C",
            ],
        ]);
        foreach($kelass as $kelas){
            Kelas::create($kelas);
        }
    }
}
