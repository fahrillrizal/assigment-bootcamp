<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiMataPelajaran extends Model
{
    use HasFactory;
    protected $fillable = ['mata_pelajaran', 'nilai'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
