<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jabatan;
use Carbon\Carbon;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Pegawai;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory(1)->create([
            'name' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('password')
        ]);
       $this->call([KelasSeeder::class, MapelSeeder::class,PegawaiSeeder::class, JabatanSeeder::class, HariSeeder::class ]);
        

        

        
        
        

            
    }

        
}
