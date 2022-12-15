<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_buku' => Str::random(10),
            'judul' => fake()->word(6),
            'cover' => fake()->image(null, 360, 360, 'animals', true),
            'slug' => Str::random(10),
            'kategori_id' => mt_rand(1,5),
            'pengarang' => fake()->word(2),
            'penerbit' => fake()->word(2),
            'tahun_terbit' => fake()->year(3000),
            'kota_terbit' => fake()->city(),
            'status_buku' => Str::random('7'),
            'id_penyumbang' => Str::random(10),
            'nama_penyumbang' => fake()->name(),
            'tgl_sumbang' => fake()->date()
        ];
    }
}
