<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pesanan</title>
</head>
<body>

    <h1>Tambah Pesanan</h1>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('pesanan.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="idmenus">Menu:</label>
            <select name="idmenus" id="idmenus" class="form-control">
                @foreach ($menus as $menu)
                    <option value="{{ $menu->idmenus }}">{{ $menu->namamenu }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="idpelanggan">Pelanggan:</label>
            <select name="idpelanggan" id="idpelanggan" class="form-control">
                @foreach ($pelanggan as $pelanggan)
                    <option value="{{ $pelanggan->idpelanggan }}">{{ $pelanggan->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="jumlah">Jumlah:</label>
            <input type="number" min="1" class="form-control" id="jumlah" name="jumlah" value="{{ old('jumlah') }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Pesanan</button>
    </form>

</body>
</html>