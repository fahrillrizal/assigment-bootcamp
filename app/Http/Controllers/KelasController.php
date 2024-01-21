<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
class KelasController extends Controller
{
    public function listKelas()
    {
        $kelas = Kelas::all();
        return response()->json($kelas);
    }

    public function detailKelas($id)
    {
        $kelas = Kelas::with('siswa')->find($id);
        return response()->json($kelas);
    }

    public function simpanKelas(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
        ]);

        $kelas = Kelas::create($request->all());
        return response()->json($kelas, 201);
    }

    public function perbaruiKelas(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
        ]);

        $kelas = Kelas::find($id);
        $kelas->update($request->all());
        return response()->json($kelas);
    }
}
