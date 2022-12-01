<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mapels = [
            ['nama' => 'Bahasa Indonesia',
            // 'icon' => null,
            'kode_mapel' => Str::random(4),
            'jam_masuk' => Carbon::now(),
            'jam_keluar' => Carbon::now(),
            'pegawai_id' => mt_rand(1,2)
            ],
            ['nama' => 'Matematika',
            // 'icon' => null,
            'kode_mapel' => Str::random(4),
            'jam_masuk' => Carbon::now(),
            'jam_keluar' => Carbon::now(),
            'pegawai_id' => mt_rand(1,2)
        ],
            ['nama' => 'Ilmu Pengetahuan Alam',
            // 'icon' => null,
            'kode_mapel' => Str::random(4),
            'jam_masuk' => Carbon::now(),
            'jam_keluar' => Carbon::now(),
            'pegawai_id' => mt_rand(1,2)
            ]
    ];
    foreach($mapels as $mapel){
        Mapel::create($mapel);
    }
    }
}
