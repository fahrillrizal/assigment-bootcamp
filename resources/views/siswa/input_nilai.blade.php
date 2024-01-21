<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai Siswa</title>
</head>
<body>
    <h1>Input Nilai Siswa</h1>
    <form action="{{ url('/siswa/' . $siswa->_id . '/nilai') }}" method="post">
        @csrf
        <label for="mata_pelajaran">Mata Pelajaran:</label>
        <input type="text" name="mata_pelajaran" required>
        <br>
        <label for="nilai">Nilai:</label>
        <input type="number" name="nilai" min="0" max="100" required>
        <br>
        <button type="submit">Simpan Nilai</button>
    </form>
</body>
</html>
