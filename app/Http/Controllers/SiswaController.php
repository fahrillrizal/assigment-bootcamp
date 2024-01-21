<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function listSiswa()
    {
        $siswa = Siswa::all();
        return response()->json($siswa);
    }

    public function detailSiswa($id)
    {
        $siswa = Siswa::find($id);
        return response()->json($siswa);
    }

    public function simpanSiswa(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'kelas_id' => 'required|exists:kelas,_id',
        ]);

        $siswa = Siswa::create($request->all());
        return response()->json($siswa, 201);
    }

    public function perbaruiSiswa(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'kelas_id' => 'required|exists:kelas,_id',
        ]);

        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        return response()->json($siswa);
    }

    public function detailNilaiMataPelajaran($id)
    {
        $siswa = Siswa::find($id);
        $nilaiMataPelajaran = $siswa->hitungNilaiMataPelajaran();
        return response()->json($nilaiMataPelajaran);
    }

    public function simpanNilaiMataPelajaran(Request $request, $id)
    {
        $siswa = Siswa::find($id);

        $request->validate([
            'mata_pelajaran' => 'required|string',
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        $siswa->nilaiMataPelajaran()->create([
            'mata_pelajaran' => $request->input('mata_pelajaran'),
            'nilai' => $request->input('nilai'),
        ]);

        return response()->json(['message' => 'Nilai mata pelajaran berhasil disimpan'], 201);
    }
}
