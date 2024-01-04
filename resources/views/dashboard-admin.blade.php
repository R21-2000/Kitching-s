<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
</head>
<body>
    <h1>Dashboard Admin</h1>

    <p>Ini adalah halaman utama admin.</p>

    <ul>
        <li><a href="{{ route('crud-meja') }}">CRUD Meja</a></li>
        <li><a href="{{ route('crud-barang') }}">CRUD Barang</a></li>
    </ul>
</body>
</html>
