<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'kelas_id', 'nilai_latihan_soal', 'nilai_ulangan_harian', 'nilai_ulangan_tengah_semester', 'nilai_ulangan_semester'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function nilaiMataPelajaran()
    {
        return $this->hasMany(NilaiMataPelajaran::class);
    }

    public function hitungNilaiMataPelajaran()
    {
        // Implementasikan rumus perhitungan nilai mata pelajaran di sini
        return [
            'Matematika' => rand(0, 100),
            'Bahasa Indonesia' => rand(0, 100),
            'IPA' => rand(0, 100),
            'IPS' => rand(0, 100),
            'PPKn' => rand(0,100),
            'Bahasa Inggris' => rand(0,100),
        ];
    }
}
