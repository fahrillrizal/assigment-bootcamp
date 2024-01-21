<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NilaiMataPelajaran;
class NilaiMataPelajaranController extends Controller
{
    public function show($id)
    {
        $nilaiMataPelajaran = NilaiMataPelajaran::find($id);

        if (!$nilaiMataPelajaran) {
            return response()->json(['message' => 'NilaiMataPelajaran not found'], 404);
        }

        return response()->json($nilaiMataPelajaran);
    }

    public function store(Request $request)
    {

        $nilaiMataPelajaran = NilaiMataPelajaran::create($request->all());

        return response()->json($nilaiMataPelajaran, 201);
    }

    public function update(Request $request, $id)
    {
        $nilaiMataPelajaran = NilaiMataPelajaran::find($id);

        if (!$nilaiMataPelajaran) {
            return response()->json(['message' => 'NilaiMataPelajaran not found'], 404);
        }

        $nilaiMataPelajaran->update($request->all());

        return response()->json($nilaiMataPelajaran, 200);
    }
}
