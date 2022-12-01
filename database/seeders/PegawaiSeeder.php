<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pegawais = [
            [
                'nama' => "Sudirman S.Pd"
            ],
            [
                'nama' => "Supiatun S.Pd"
            ],
            [
                'nama' => "Sudrajat S.Pd"
            ],
        ];
        foreach($pegawais as $pegawai){
            Pegawai::create($pegawai);
        }
    }
}
