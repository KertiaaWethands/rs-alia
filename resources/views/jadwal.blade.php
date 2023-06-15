<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alia Hospital</title>
    <link rel="stylesheet" href="css/jadwal.css">
</head>

<body>
    @extends('Layout.app_home')

    @section('content')

    <div class="search">
        <div class="form">
            <form>
                <input type="text" id="search-input" name="search-input" placeholder="Search...">
            </form>
        </div>
        <div class="hari">
            <h3>Hari</h3>
            <div class="jadwalHari">
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Senin</span>
                </label>

                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Selasa</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Rabu</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Kamis</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Jumat</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Sabtu</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Minggu</span>
                </label>
            </div>
        </div>

        <div class="spesialis">
            <h3>Spesialis/Poli</h3>
            <div class="bagian">
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Anak</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Bedah</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Bedah Digestive</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Fetomaternal</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Fisik & Rehabilitasi</span>
                </label>
            </div>

            <div class="bagian">
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Fisioterapi </span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Gigi</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Jantung & Pembuluh Darah</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Kulit & Kelamin</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Mata</span>
                </label>

            </div>

            <div class="bagian">
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Obgyn </span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Ortopedi</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Paru</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Penyakit Dalam</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Saraf</span>
                </label>

            </div>

            <div class="bagian">
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">THT-KL </span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Tumbuh Kembang</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Umum</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" />
                    <span class="checkbox-custom">Urologi</span>
                </label>
            </div>

        </div>
    </div>
    <div class="dokter">
  @for($i = 1; $i <= 10; $i++)
    <div class="card">
      <div class="list-dokter">
        <img src="icons/dokter.svg" alt="dokter">
        <div class="kata">
          <h2>dr. Amalia Rositawati, Sp.DV</h2>
          <h3>Kulit dan Kelamin</h3>
          <ul>
            <li>Selasa (13.00 - 17.00)</li>
            <li>Kamis (13.00 - 17.00)</li>
          </ul>
        </div>
      </div>
      <button>Buat Janji Temu</button>
    </div>
  @endfor
</div>




        @endsection



</body>

</html>
