<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\NilaiMataPelajaranModel;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NilaiMataPelajaran>
 */
class NilaiMataPelajaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'mata_pelajaran' => [
                'nama' => $this->faker->word,
                'nilai' => $this->faker->numberBetween(0, 100),
            ],
            'latihan_soal' => [
                $this->faker->numberBetween(0, 100),
                $this->faker->numberBetween(0, 100),
                $this->faker->numberBetween(0, 100),
                $this->faker->numberBetween(0, 100),
            ],
            'ulangan_harian' => [
                $this->faker->numberBetween(0, 100),
                $this->faker->numberBetween(0, 100),
            ],
            'ulangan_tengah_semester' => $this->faker->randomFloat(2, 0, 100),
            'ulangan_semester' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}