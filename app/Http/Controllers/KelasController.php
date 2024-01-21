<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();

        return response()->json($kelas);
    }

    public function show($id)
    {
        $kelas = Kelas::with('siswa')->find($id);

        return response()->json($kelas);
    }

    public function store(Request $request)
    {
        $kelas = Kelas::create($request->all());

        return response()->json($kelas);
    }

    public function update(Request $request, $id)
    {
        $kelas = Kelas::find($id);
        $kelas->update($request->all());

        return response()->json($kelas);
    }
}