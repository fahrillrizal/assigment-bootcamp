<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $collection = 'siswa';

    protected $fillable = ['nis', 'nama', 'alamat', 'mata_pelajaran_id'];

    public function nilai()
    {
        return $this->hasOne(NilaiMataPelajaran::class, '_id', 'nilai_id');
    }
}
