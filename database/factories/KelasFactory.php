<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
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
                'tingkat_kelas' => "7",
                'nama_kelas' => "A",
            ],
            [
                'tingkat_kelas' => "7",
                'nama_kelas' => "B",
            ],
            [
                'tingkat_kelas' => "7",
                'nama_kelas' => "C",
            ],
            [
                'tingkat_kelas' => "8",
                'nama_kelas' => "A",
            ],
            [
                'tingkat_kelas' => "8",
                'nama_kelas' => "B",
            ],
            [
                'tingkat_kelas' => "8",
                'nama_kelas' => "C",
            ],
            [
                'tingkat_kelas' => "9",
                'nama_kelas' => "A",
            ],
            [
                'tingkat_kelas' => "9",
                'nama_kelas' => "B",
            ],
            [
                'tingkat_kelas' => "9",
                'nama_kelas' => "C",
            ],
        ];
    }
}
