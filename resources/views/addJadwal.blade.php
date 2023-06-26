<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alia Hospital</title>
    <link rel="stylesheet" href="css/dokter2.css">
</head>
<body>
        <div class=".container">
            <form action="/addJadwal" method="POST" class="form" style="height: 600px">
                @csrf
                <div class="login-contain">
                    <div class="text-title">
                        Tambah Jadwal Dokter
                    </div>
                    <div class="input-data">
                        <div class="option">
                            <input type="text" name="id" value="{{ $id }}" readonly hidden>
                        </div>
                        <div>
                            <select name="hari" id="hari">
                                <option selected disabled>Pilih Hari</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
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
