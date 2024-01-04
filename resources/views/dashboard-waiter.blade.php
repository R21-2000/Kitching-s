<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Waiter</title>
</head>
<body>
    <h1>Dashboard Waiter</h1>

    <p>Ini adalah halaman utama waiter.</p>

    <ul>
        <li><a href="{{ route('tambah-pesanan') }}">Buat Pesanan</a></li>
        <li><a href="{{ route('lihat-pesanan') }}">Lihat Pesanan</a></li>
    </ul>
</body>
</html>