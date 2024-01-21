<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
</head>
<body>
    <h1>Detail Siswa: {{ $siswa->nama }}</h1>
    <p>Nilai Mata Pelajaran:</p>
    <ul>
        @foreach ($siswa->hitungNilaiMataPelajaran() as $mapel => $nilai)
            <li>{{ $mapel }}: {{ $nilai }}</li>
        @endforeach
    </ul>
</body>
</html>
