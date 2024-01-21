<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Kelas</title>
</head>
<body>
    <h1>List Kelas</h1>
    <ul>
        @foreach ($kelas as $kelas)
            <li>
                <a href="{{ url('/kelas/' . $kelas->_id) }}">{{ $kelas->nama }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
