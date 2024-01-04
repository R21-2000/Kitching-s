<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
</head>
<body>

    <h1>Menu</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID menu</th>
                <th>Nama menu</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
                <tr>
                    <td>{{ $menu->idmenu }}</td>
                    <td>{{ $menu->namamenu }}</td>
                    <td>{{ $menu->harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
