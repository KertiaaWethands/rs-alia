<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alia Hospital</title>
    <link rel="stylesheet" href="css/login.css">
    <style>
        @font-face {
            font-family: 'lilita';
            src: url('fonts/LilitaOne-Regular.ttf');
        }

        .text-decoration h1 {
            font-family: 'lilita', sans-serif;
        }
        .register-section a{
            text-decoration: none !important;
            color: black;
            padding: 8px 50px;
            background-color: white;
            border: 1px solid;
            border-radius: 15px;
            font-weight: 400;
        }
        .text-lupa-password a{
            text-decoration: none !important;
            color: black;
        }
    </style>
</head>
<body class="page">

    @extends('Layout.app_home')

    @section('content')
        <div class=".container">
            <form action="" method="POST" class="form">
                <div class="login-contain">
                    <div class="text-masuk">
                        Masuk
                    </div>
                    <div class="input-data">
                        <div>
                            <input type="text" placeholder="Username">
                        </div>
                        <div>
                            <input type="text" placeholder="Kata Sandi">
                        </div>
                    </div>
                    <div class="text-lupa-password">
                        <a href="">forgot password?</a>
                    </div>
                    <div class="button">
                        <button type="submit">Masuk</button>
                    </div>
                </div>
        </div>
        <div class="text-decoration">
            <h1>SILAHKAN MASUK UNTUK BUAT JANJI TEMU DOKTER</h1>
        </div>
        <div class="register-section">
            <p>atau</p>
            <a href="">Daftar</a>
            <p>Jika belum memiliki akun</p>
        </div>
        <div class="login-image">
            <img src="/icons/loginImage.svg" alt="Dokter">
        </div>
    @endsection

</body>
</html>
