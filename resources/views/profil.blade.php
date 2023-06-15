<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alia Hospital</title>
    <link rel="stylesheet" href="css/profil.css">
</head>

<body class="bg">
    @extends('Layout.app_home')

    @section('content')

    <div class="profil">
        <div class="profil-box">
            <h3><u>Data Saya</u></h3>
            <div class="text">
                <div class="text-profil">
                    <div class="form">
                        <label for="nama">Nama Lengkap:</label>
                        <input type="text" id="nama" name="nama" placeholder="">
                    </div>

                    <div class="form">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" placeholder="">
                    </div>

                    <div class="form">
                        <label for="tanggal_lahir">Tanggal Lahir:</label>
                        <input type="text" id="tanggal_lahir" name="tanggal_lahir" placeholder="">
                    </div>

                    <div class="form">
                        <label for="whatsapp">No Whatsapp:</label>
                        <input type="text" id="whatsapp" name="whatsapp" placeholder="">
                    </div>

                    <div class="form">
                        <label for="password">Buat Kata Sandi Baru:</label>
                        <input type="password" id="password" name="password" placeholder="">
                    </div>
                </div>
                <div class="img-con">
                    <img src="images/profile.png" alt="foto">
                    <button>Upload Image</button>
                    <button>Update Profile</button>
                </div>
            </div>
        </div>
    </div>
    <div class="riwayat">
        <table class="riwayat-table">
            <thead>
                <tr>
                    <th colspan="5">Riwayat Janji Temu Dokter</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>No</td>
                    <td>Nama Dokter</td>
                    <td>Tanggal Kunjungan</td>
                    <td>Waktu Kunjungan</td>
                    <td>Status</td>
                </tr>
                <tr class="white-row">
                    <td>1</td>
                    <td>Dr. John Doe</td>
                    <td>2023-06-01</td>
                    <td>10:00 AM</td>
                    <td>Selesai</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Dr. Jane Smith</td>
                    <td>2023-06-10</td>
                    <td>03:30 PM</td>
                    <td>Menunggu</td>
                </tr>
                <!-- tambahkan baris sesuai dengan data yang ada -->
            </tbody>
        </table>
    </div>





    @endsection



</body>

</html>
