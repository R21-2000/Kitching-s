<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pesanan</title>
</head>
<body>

    <h1>Pesanan</h1>

    <a href="{{ route('pesanan.create') }}" class="btn btn-primary">Tambah Pesanan</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID pesanan</th>
                <th>ID menu</th>
                <th>ID pelanggan</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pesanan as $pesanan)
                <tr>
                    <td>{{ $pesanan->idpesanan }}</td>
                    <td>{{ $pesanan->idmenus }}</td>
                    <td>{{ $pesanan->idpelanggan }}</td>
                    <td>{{ $pesanan->jumlah }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>