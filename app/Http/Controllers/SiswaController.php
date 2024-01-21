<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\NilaiMataPelajaranController;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();

        return response()->json($siswa);
    }

    public function show($id)
    {
        $siswa = Siswa::with(['nilai'])->find($id);
        $siswa->nilai_akhir = $siswa->nilai->hitungNilai();

        return response()->json($siswa);
    }

    public function store(Request $request)
    {
        $siswa = Siswa::create($request->all());

        return response()->json($siswa);
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->update($request->all());

        return response()->json($siswa);
    }
}
