<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Owner</title>
</head>
<body>
    <h1>Dashboard Owner</h1>

    <p>Ini adalah halaman utama owner.</p>

    <ul>
        <li><a href="{{ route('laporan-pesanan') }}">Laporan Pesanan</a></li>
        <li><a href="{{ route('laporan-menu') }}">Laporan Menu</a></li>
        <li><a href="{{ route('laporan-transaksi') }}">Laporan Transaksi</a></li>
        <li><a href="{{ route('ekspor-laporan') }}">Ekspor Laporan</a></li>
    </ul>
</body>
</html>
