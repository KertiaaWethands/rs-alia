<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alia Hospital</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
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
            </form>
        </div>
        <div class="text-decoration">
            SILAHKAN MASUK UNTUK BUAT JANJI TEMU DOKTER
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