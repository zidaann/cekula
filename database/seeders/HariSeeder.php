<?php

namespace Database\Seeders;

use App\Models\Hari;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $haris = [
            [
                'nama' => 'Senin'
            ],
            [
                'nama' => 'Selasa'
            ],
            [
                'nama' => 'Rabu'
            ],
            [
                'nama' => 'Kamis'
            ],
            [
                'nama' => 'Jumat'
            ],
            [
                'nama' => 'Sabtu'
            ],
           
        ];
        foreach($haris as $hari){
            Hari::create($hari);
        }
    }
}
