<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kelas</title>
</head>
<body>
    <h1>Detail Kelas: {{ $kelas->nama }}</h1>
    <p>Nama Siswa:</p>
    <ul>
        @foreach ($kelas->siswa as $siswa)
            <li>{{ $siswa->nama }}</li>
        @endforeach
    </ul>
</body>
</html>
