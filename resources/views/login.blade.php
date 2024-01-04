<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <style>
        body {
            font-family: sans-serif;
            background-color: #f5f5f5; /* Warna latar belakang */
            color: #333; /* Warna teks utama */
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff; /* Warna latar belakang container */
            border-radius: 10px; /* Sudut tumpul untuk container */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Bayangan halus */
        }

        .card-header {
            background-color: #4a5568; /* Warna header */
            color: #fff; /* Warna teks header */
            font-weight: bold;
            text-align: center;
            border-radius: 10px 10px 0 0; /* Sudut tumpul atas */
        }

        .card-body {
            padding: 20px;
        }

        .form-control {
            border-radius: 5px;
            border-color: #ced4da; /* Warna border input */
        }

        .btn {
            background-color: #4a5568; /* Warna tombol */
            color: #fff; /* Warna teks tombol */
            border-radius: 5px;
        }

        .login-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0; /* Sudut tumpul untuk gambar */
        }

        .alert-danger {
            background-color: #f8d7da; /* Warna pesan error */
            border-color: #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h2>Login</h2>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="iduser">ID User</label>
                                <input type="text" class="form-control" id="iduser" name="iduser" placeholder="ID User">
                            </div>
                            <div class="mb-3">
                                <label for="namauser">Nama User</label>
                                <input type="text" class="form-control" id="namauser" name="namauser" placeholder="Nama User">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Load image
            $(".login-img").attr("src", "{{ asset('images/login.jpg') }}");
        });
    </script>
</body>
</html>