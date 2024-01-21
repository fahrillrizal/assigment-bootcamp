<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         \App\Models\Kelas::factory(3)->create();

         \App\Models\NilaiMataPelajaran::factory(10)->create();
 
         \App\Models\Siswa::factory(5)->create();
    }
}
