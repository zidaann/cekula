<?php

namespace Database\Seeders;

use App\Models\KategoriBuku;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoris = [
            [
                'nama' => 'Pengetahuan'
            ],
            [
                'nama' => 'Pengembangan'
            ],
            [
                'nama' => 'Boba'
            ]
        ];

        foreach($kategoris as $kategori){
            KategoriBuku::create($kategori);
        }
    }
}
