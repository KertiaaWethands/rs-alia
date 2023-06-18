<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alia Hospital</title>
    <link rel="stylesheet" href="css/dokter.css">
</head>
<body>
        <div class=".container">
            <form action="/admin" method="POST" class="form" style="height: 600px" enctype="multipart/form-data">
                @csrf
                <div class="login-contain">
                    <div class="text-title">
                        Tambah Dokter
                    </div>
                    <div class="input-data">
                        <div class="option">
                            <input type="text" name="nama" placeholder="Nama Dokter">
                        </div>
                        <div>
                            <input type="file" name="foto">
                        </div>
                        <div>
                            <input type="text" name="spesialis" placeholder="Spesialis">
                        </div>
                        <div>
                            <input type="text" name="hari" placeholder="Hari Kerja">
                        </div>
                        <div>
                            <input type="text" name="waktuAwal" placeholder="Jam Kerja Awal (ex: 09:00 / 13:00)">
                        </div>
                        <div>
                            <input type="text" name="waktuAkhir" placeholder="Jam Kerja Akhir (ex: 09:00 / 13:00)">
                        </div>
                    </div>
                    <div class="button">
                        <button type="submit">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>
