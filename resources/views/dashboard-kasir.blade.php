<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Kasir</title>
</head>
<body>
    <h1>Dashboard Kasir</h1>

    <p>Ini adalah halaman utama kasir.</p>

    <ul>
        <li><a href="{{ route('tambah-transaksi') }}">Buat Transaksi</a></li>
        <li><a href="{{ route('lihat-transaksi') }}">Lihat Transaksi</a></li>
    </ul>
</body>
</html>
