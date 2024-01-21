<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class NilaiMataPelajaran extends Model
{
    use HasFactory;
    protected $collection = 'nilai_mata_pelajaran';

    protected $fillable = ['mata_pelajaran', 'latihan_soal', 'ulangan_harian', 'ulangan_tengah_semester', 'ulangan_semester'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nilai_id');
    }
}
