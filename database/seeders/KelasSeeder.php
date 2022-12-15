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
                'user_id' => mt_rand(6,7)
            ],
            [
                'tingkat_kelas' => "7",
                'nama_kelas' => "7B",
                'user_id' => mt_rand(6,7)
                
            ],
            [
                'tingkat_kelas' => "7",
                'nama_kelas' => "7C",
                'user_id' => mt_rand(6,7)
            ],
            [
                'tingkat_kelas' => "8",
                'nama_kelas' => "8A",
                'user_id' => mt_rand(6,7)
            ],
            [
                'tingkat_kelas' => "8",
                'nama_kelas' => "8B",
                'user_id' => mt_rand(6,7)
            ],
            [
                'tingkat_kelas' => "8",
                'nama_kelas' => "8C",
                'user_id' => mt_rand(6,7)
            ],
            [
                'tingkat_kelas' => "9",
                'nama_kelas' => "9A",
                'user_id' => mt_rand(6,7)
            ],
            [
                'tingkat_kelas' => "9",
                'nama_kelas' => "9B",
                'user_id' => mt_rand(6,7)
            ],
            [
                'tingkat_kelas' => "9",
                'nama_kelas' => "9C",
                'user_id' => mt_rand(6,7)
            ],
        ]);
        foreach($kelass as $kelas){
            Kelas::create($kelas);
        }
    }
}
