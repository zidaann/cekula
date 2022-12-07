<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabatans = [
            [
                'nama' => 'Guru'
            ],
            [
                'nama' => 'Wali Kelas'
            ],
           
        ];
        foreach($jabatans as $jabatan){
            Jabatan::create($jabatan);
        }
    }
}
