<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alia Hospital</title>
    <link rel="stylesheet" href="css/schedule.css">
</head>
<body>
    
    @extends('Layout.app_home')

    @section('content')
        <div class=".container">
            <form action="" method="POST" class="form">
                <div class="login-contain">
                    <div class="text-title">
                        Buat janji temu dokter
                    </div>
                    <div class="input-data">
                        <div>
                            <select name="dokter" id="dokter">
                                <option selected disabled>Nama Dokter</option>
                                <option value="Dokter Syariah">Drg. Syariah</option>
                                <option value="Dokter Syariah">Drg. Syariah</option>
                            </select>
                        </div>
                        <div>
                            <input type="date" placeholder="Pilih Tanggal">
                        </div>
                        <div>
                            <select name="waktu" id="waktu">
                                <option selected disabled>Pilih Waktu Kunjungan</option>
                                <option value="1">13:00</option>
                                <option value="2">14:00</option>
                                <option value="4">16:00</option>
                                <option value="5">17:00</option>
                            </select>
                        </div>
                    </div>
                    <div class="button">
                        <button type="submit">Buat Janji</button>
                    </div>
                </div>
            </form>
        </div>
    @endsection

</body>
</html>