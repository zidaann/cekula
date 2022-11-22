<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mapel>
 */
class MapelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            [
                'nama' => 'Bahasa Indonesia',
                'icon' => null,
                'jam_masuk' => Carbon::now(),
                'jam_keluar' => Carbon::now(),
                'pegawai_id' => mt_rand(1,2),
            ],
            [
                'nama' => 'Matematika',
                'icon' => null,
                'jam_masuk' => Carbon::now(),
                'jam_keluar' => Carbon::now(),
                'pegawai_id' => mt_rand(1,2),
            ],

        ];
    }
}
