<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Jabatan;
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

        $users = [
                [
                'nama' => "Augusta Satrianto",
                'status' => "Administrator",
                'username' => "admin",
                'password' => bcrypt("123456"),
                'password2' => "123456",
                ],
            [
                'nama' => "Yonathan Setiagita",
                'status' => "Murid",
                'username' => "jo",
                'password' => bcrypt("123456"),
                'password2' => "123456",
                'is_osis' => true,
                'nis' => "109844322",
                'kelas_id' => "1",    
            ],
            [
                'nama' => "Friday Zahrotul Jannah",
                'status' => "Tata Usaha",
                'username' => "friday",
                'password' => bcrypt("123456"),
                'password2' => "123456",    
            ],
            [
                'nama' => "Amrullah Rahman Farisi",
                'status' => "Guru Mata Pelajaran",
                'username' => "faris",
                'password' => bcrypt("123456"),
                'password2' => "123456",
                'is_pembina_osis' => true,    
            ],
            [
                'nama' => "Hany Fitriaruli",
                'status' => "Guru Ekstrakurikuler",
                'username' => "hany",
                'password' => bcrypt("123456"),
                'password2' => "123456",    
            ]
        ];
        foreach($users as $user){
            User::create($user);
        }
       $this->call([KelasSeeder::class, MapelSeeder::class,PegawaiSeeder::class, JabatanSeeder::class, HariSeeder::class ]);
        

        

        
        
        

            
    }

        
}
