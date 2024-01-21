<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Siswa;
use App\Models\NilaiMataPelajaran;
use App\Models\Kelas;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nis' => $this->faker->unique()->numerify('#######'),
            'nama' => $this->faker->name,
            'alamat' => $this->faker->address,
            'nilai_id' => function () {
                return NilaiMataPelajaran::factory()->create()->id;
            },
            'kelas_id' => function () {
                return Kelas::factory()->create()->id;
            },
        ];
    }
}
