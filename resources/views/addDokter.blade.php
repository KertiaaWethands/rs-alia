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
                            <select name="spesialis" id="spesialis">
                                <option selected disabled>Pilih Spesialisasi</option>
                                <option value="Anak">Anak</option>
                                <option value="Bedah">Bedah</option>
                                <option value="Bedah Digestive">Bedah Digestive</option>
                                <option value="Fetomaternal">Fetomaternal</option>
                                <option value="Fisik & Rehabilitasi">Fisik & Rehabilitasi</option>
                                <option value="Fisioterapi">Fisioterapi</option>
                                <option value="Gigi">Gigi</option>
                                <option value="Jantung & Pembuluh Darah">Jantung & Pembuluh Darah</option>
                                <option value="Kulit & Kelamin">Kulit & Kelamin</option>
                                <option value="Mata">Mata</option>
                                <option value="Obgyn"> Obgyn</option>
                                <option value="Ortopedi">Ortopedi</option>
                                <option value="Paru">Paru</option>
                                <option value="Penyakit Dalam">Penyakit Dalam</option>
                                <option value="Saraf">Saraf</option>
                                <option value="THT-KL">THT-KL</option>
                                <option value="Tumbuh Kembang">Tumbuh Kembang</option>
                                <option value="Umum">Umum</option>
                                <option value="Urologi">Urologi</option>
                            </select>
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
