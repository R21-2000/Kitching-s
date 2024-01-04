<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transaksi</title>
</head>
<body>
    <h1>Transaksi</h1>
    <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah Transaksi</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID transaksi</th>
                <th>ID pesanan</th>
                <th>Total</th>
                <th>Bayar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi as $transaksi)
                <tr>
                    <td>{{ $transaksi->idtransaksi }}</td>
                    <td>{{ $transaksi->idpesanan }}</td>
                    <td>{{ $transaksi->total }}</td>
                    <td>{{ $transaksi->bayar }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>