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
            <form action="/register" method="POST" class="form">
                @csrf
                <div class="login-contain">
                    <div class="text-register">
                        Daftar
                    </div>
                    <div class="input-data">
                        <div>
                            <input type="text" name="nama" placeholder="Nama Lengkap">
                            @error('nama')
                                <div class="text-red-800 text-left">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input type="text" name="username" placeholder="Username">
                            @error('username')
                                <div class="text-red-800 text-left">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input type="date" name="tglLahir"">
                            @error('tglLahir')
                                <div class="text-red-800 text-left">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input type="text" name="nomor" placeholder="Nomor Whatsapp (08xx)">
                            @error('nomor')
                                <div class="text-red-800 text-left">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input type="password" name="password" placeholder="Buat Kata Sandi">
                            @error('password')
                                <div class="text-red-800 text-left">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="terms">
                            <input type="checkbox" name="terms" id="terms" onclick="agree()">
                            <p>saya telah membaca dan menyetujui syarat dan ketentuan</p>
                        </div>
                    </div>
                    <div class="button">
                        <button type="submit" id="button">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="text-decoration">
            SILAHKAN DAFTAR AKUN UNTUK AKSES FITUR BUAT JANJI TEMU DOKTER
        </div>
        <div class="register-section">
            <p>atau</p>
            <a href="/login">Masuk</a>
            <p>Jika sudah memiliki akun</p>
        </div>
        <div class="login-image">
            <img src="/icons/loginImage.svg" alt="Dokter">
        </div>
    @endsection

    <script type="text/javascript">
        function agree(){
            const button = document.querySelector('#button');

            const disableButton = () => {
            console.log("va");
                button.disabled = false;

            };
        }
    </script>
</body>
</html>
