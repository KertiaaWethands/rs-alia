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
            <form id="search-form">
                <input type="text" id="search-input" name="search-input" placeholder="Search...">
            </form>
        </div>
        <div class="hari">
            <h3>Hari</h3>
            <div class="jadwalHari">
                <label class="checkbox-container">
                    <input type="checkbox" name="hari" value="senin" />
                    <span class="checkbox-custom">Senin</span>
                </label>

                <label class="checkbox-container">
                    <input type="checkbox" name="hari" value="selasa" />
                    <span class="checkbox-custom">Selasa</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="hari" value="rabu" />
                    <span class="checkbox-custom">Rabu</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="hari" value="kamis" />
                    <span class="checkbox-custom">Kamis</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="hari" value="jumat" />
                    <span class="checkbox-custom">Jumat</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="hari" value="sabtu" />
                    <span class="checkbox-custom">Sabtu</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="hari" value="minggu" />
                    <span class="checkbox-custom">Minggu</span>
                </label>
            </div>
        </div>

        <div class="spesialis">
            <h3>Spesialis/Poli</h3>
            <div class="bagian">
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="anak" />
                    <span class="checkbox-custom">Anak</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="bedah" />
                    <span class="checkbox-custom">Bedah</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="bedah digestive" />
                    <span class="checkbox-custom">Bedah Digestive</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="fetomaternal" />
                    <span class="checkbox-custom">Fetomaternal</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="fisik & rehabilitasi" />
                    <span class="checkbox-custom">Fisik & Rehabilitasi</span>
                </label>
            </div>

            <div class="bagian">
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="fisioterapi" />
                    <span class="checkbox-custom">Fisioterapi</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="gigi" />
                    <span class="checkbox-custom">Gigi</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="jantung & pembuluh Darah" />
                    <span class="checkbox-custom">Jantung & Pembuluh Darah</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="kulit & kelamin" />
                    <span class="checkbox-custom">Kulit & Kelamin</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="mata" />
                    <span class="checkbox-custom">Mata</span>
                </label>

            </div>

            <div class="bagian">
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="obgyn" />
                    <span class="checkbox-custom">Obgyn</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="ortopedi" />
                    <span class="checkbox-custom">Ortopedi</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="paru" />
                    <span class="checkbox-custom">Paru</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="penyakit dalam" />
                    <span class="checkbox-custom">Penyakit Dalam</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="saraf" />
                    <span class="checkbox-custom">Saraf</span>
                </label>

            </div>

            <div class="bagian">
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="tht-kl" />
                    <span class="checkbox-custom">THT-KL</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="tumbuh kembang" />
                    <span class="checkbox-custom">Tumbuh Kembang</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="umum" />
                    <span class="checkbox-custom">Umum</span>
                </label>
                <label class="checkbox-container">
                    <input type="checkbox" name="spesialis" value="urologi" />
                    <span class="checkbox-custom">Urologi</span>
                </label>
            </div>

        </div>
    </div>
    <div class="container">
        @foreach($dokter as $dokter)
        <div class="card" data-nama="{{$dokter->namaDokter}}" data-hari="{{$dokter->hari}}" data-spesialis="{{$dokter->spesialis}}">
            <img src="images/{{$dokter->foto}}" alt="dokter">
            <div>
                <h3 class="card-title">{{$dokter->namaDokter}}</h3>

                <p class="card-text">{{$dokter->spesialis}}</p>
                <p class="card-text">{{$dokter->hari}} ({{$dokter->waktuAwal}} - {{$dokter->waktuAkhir}})</p>
                <form action="/buatjanji2" method="POST">
                    @csrf
                    <input type="text" name="dokter" id="dokter" value="{{$dokter->id}}" hidden>
                    <button type="submit">Buat Janji Temu</button>
                </form>
            </div>
        </div>
        @endforeach

    </div>

    <script>
    const searchForm = document.getElementById('search-form');
    const searchInput = document.getElementById('search-input');
    const cards = Array.from(document.getElementsByClassName('card'));

    searchForm.addEventListener('submit', function (event) {
        event.preventDefault();
        filterCards();
    });

    searchInput.addEventListener('input', function () {
        filterCards();
    });

    document.querySelectorAll('input[name="hari"]').forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            filterCards();
        });
    });

    document.querySelectorAll('input[name="spesialis"]').forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            filterCards();
        });
    });

    function filterCards() {
    const searchValue = searchInput.value.toLowerCase().trim();
    const selectedHari = Array.from(document.querySelectorAll('input[name="hari"]:checked')).map(function (checkbox) {
        return checkbox.value;
    });
    const selectedSpesialis = Array.from(document.querySelectorAll('input[name="spesialis"]:checked')).map(function (checkbox) {
        return checkbox.value;
    });

    cards.forEach(function (card) {
        const nama = card.getAttribute('data-nama').toLowerCase();
        const hari = card.getAttribute('data-hari').toLowerCase();
        const spesialis = card.getAttribute('data-spesialis').toLowerCase();

        const isNamaMatch = nama.includes(searchValue);
        const isHariMatch = selectedHari.length === 0 || selectedHari.includes(hari);
        const isSpesialisMatch = selectedSpesialis.length === 0 || selectedSpesialis.includes(spesialis);

        if (isNamaMatch && isHariMatch && isSpesialisMatch) {
            card.classList.remove('hidden');
        } else {
            card.classList.add('hidden');
        }
    });
}


</script>


    @endsection
</body>

</html>
