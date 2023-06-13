<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alia Hospital</title>
    <link rel="stylesheet" href="css/profil.css">
</head>

<body>
    @extends('Layout.app_home')

    @section('content')

    <div class="profil">
        <div class="testimoni">
            <h3><u>Profil Saya</u></h3>
            <div class="text">
                <label for="nama">Nama Lengkap :</label>
                <input type="text" id="nama" name="nama" placeholder="">

                <label for="nama">Username :</label>
                <input type="text" id="username" name="username" placeholder="">

                <label for="nama">Tanggal Lahir :</label>
                <input type="text" id="username" name="username" placeholder="">

                <label for="nama">No Whatsapp :</label>
                <input type="text" id="username" name="username" placeholder="">

                <label for="nama">Buat Password Baru :</label>
                <input type="password" id="username" name="username" placeholder="">

            </div>

        </div>
    </div>
    @endsection



</body>

</html>
