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
    <script>
 function openPopup() {
  const popupContainer = document.createElement('div');
  popupContainer.classList.add('popup-container');

  const popupContent = document.createElement('div');
  popupContent.classList.add('popup-content');

  const popupTitle = document.createElement('h2');
  popupTitle.classList.add('popup-title');
  popupTitle.innerText = 'Syarat dan Ketentuan';

  const popupText = document.createElement('p');
  popupText.innerText = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed vestibulum elit.';

  const popupClose = document.createElement('span');
  popupClose.classList.add('popup-close');
  popupClose.innerText = 'X';

  const closePopup = () => {
    document.body.removeChild(popupContainer);
    document.removeEventListener('click', handleOutsideClick);
  };

  const handleOutsideClick = (event) => {
    if (event.target === popupContainer) {
      closePopup();
    }
  };

  popupClose.addEventListener('click', closePopup);
  popupContainer.addEventListener('click', handleOutsideClick);

  popupContent.appendChild(popupClose);
  popupContent.appendChild(popupTitle);
  popupContent.appendChild(popupText);
  popupContainer.appendChild(popupContent);
  document.body.appendChild(popupContainer);
}

    </script>
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
                            <p>saya telah membaca dan menyetujui <a href="#" onclick="openPopup()">syarat dan ketentuan</a></p>
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
