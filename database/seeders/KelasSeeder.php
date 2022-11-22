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
                'nama_kelas' => "A",
            ],
            [
                'tingkat_kelas' => "7",
                'nama_kelas' => "B",
                
            ],
            [
                'tingkat_kelas' => "7",
                'nama_kelas' => "C",
            ],
            [
                'tingkat_kelas' => "8",
                'nama_kelas' => "A",
            ],
            [
                'tingkat_kelas' => "8",
                'nama_kelas' => "B",
            ],
            [
                'tingkat_kelas' => "8",
                'nama_kelas' => "C",
            ],
            [
                'tingkat_kelas' => "9",
                'nama_kelas' => "A",
            ],
            [
                'tingkat_kelas' => "9",
                'nama_kelas' => "B",
            ],
            [
                'tingkat_kelas' => "9",
                'nama_kelas' => "C",
            ],
        ]);
        foreach($kelass as $kelas){
            Kelas::create($kelas);
        }
    }
}
