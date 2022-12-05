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
                'nama' => "Sudirman S.Pd",
                'jabatan_id' => mt_rand(1,2)
            ],
            [
                'nama' => "Supiatun S.Pd",
                'jabatan_id' => mt_rand(1,2)
            ],
            [
                'nama' => "Sudrajat S.Pd",
                'jabatan_id' => mt_rand(1,2)
            ],
        ];
        foreach($pegawais as $pegawai){
            Pegawai::create($pegawai);
        }
    }
}
