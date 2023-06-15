<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alia Hospital</title>
    <link rel="stylesheet" href="css/register.css">
    <style>
        @font-face {
            font-family: 'lilita';
            src: url('fonts/LilitaOne-Regular.ttf');
        }
        .text-decoration {
            font-family: 'lilita', sans-serif;
        }

    </style>
</head>
<body>

    @extends('Layout.app_home')

    @section('content')
        <div class=".container">
            <form action="" method="POST" class="form">
                <div class="login-contain">
                    <div class="text-register">
                        Daftar
                    </div>
                    <div class="input-data">
                        <div>
                            <input type="text" placeholder="Nama Lengkap">
                        </div>
                        <div>
                            <input type="text" placeholder="Username">
                        </div>
                        <div>
                            <input type="text" placeholder="Tanggal Lahir (DD/MM/YY)">
                        </div>
                        <div>
                            <input type="text" placeholder="Nomor Whatsapp (08xx)">
                        </div>
                        <div>
                            <input type="text" placeholder="Buat Kata Sandi">
                        </div>
                        <div class="terms">
                            <input type="checkbox" name="terms" id="terms">
                            <p>saya telah membaca dan menyetujui syarat dan ketentuan</p>
                        </div>
                    </div>
                    <div class="button">
                        <button type="submit">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="text-decoration">
            SILAHKAN DAFTAR AKUN UNTUK AKSES FITUR BUAT JANJI TEMU DOKTER
        </div>
        <div class="register-section">
            <p>atau</p>
            <a href="">Masuk</a>
            <p>Jika sudah memiliki akun</p>
        </div>
        <div class="login-image">
            <img src="/icons/loginImage.svg" alt="Dokter">
        </div>
    @endsection

</body>
</html>
