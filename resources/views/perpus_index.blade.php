<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Perpustakaan</title>
</head>
<body>
    <h1>Daftar Koleksi Buku</h1>
    <ul>
        @foreach($buku as $judul)
            <li>{{ $judul }}</li>
        @endforeach
    </ul>
</body>
</html>