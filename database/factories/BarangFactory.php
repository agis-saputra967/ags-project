<?php

namespace Database\Factories;

use App\Models\Kategori;
use App\Models\Ruangan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => fake()->word(),
            'kode_inventaris' => fake()->word(),
            'kategori_id' => Kategori::inRandomOrder()->first()->id ?? 1,
            'ruangan_id' => Ruangan::inRandomOrder()->first()->id ?? 1,
            'tahun_pengadaan' => fake()->year(),
            'sumber_dana' => fake()->word(),
            'kondisi' => fake()->randomElement(['Baik', 'Rusak Ringan']),
        ];
    }
}
