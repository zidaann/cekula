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
            [
                'nama' => 'Bahasa Indonesia',
            ],
            [
                'nama' => 'Matematika',
            ],
            [
                'nama' => 'IPA',
            ],
            [
                'nama' => 'IPS',
            ],
            
    ];
    foreach($mapels as $mapel){
        Mapel::create($mapel);
    }
    }
}
