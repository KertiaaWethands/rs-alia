<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alia Hospital</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    @yield('css')
</head>
<body>
    <div class="nav">
        <div class="button-call">
            <button class="emergency">
                <p>Emergency Call 021-3044-9000</p>
                <img src="icons/emergency.svg" alt="emergency-icon">
            </button>
            <button class="callcenter">
                <p>Call Center  021-3040-9000</p>
                <img src="icons/callcenter.svg" alt="callcenter-icon">
            </button>
        </div>
        <button class="user">
            <img src="icons/user.svg" alt="user-icon">
        </button>
    </div>

    <div class="navbar">
        <img src="icons/logo.svg" alt="logo" style="width:150px">
        <p>Lokasi Rumah Sakit</p>
        <p>Cari Dokter</p>
        <p>Layanan</p>
        <p>Tentang Kami</p>
        <img src="icons/slogan.svg" alt="slogan" style="width:150px">
    </div>

    @yield('content')
    <div class="footer">
        <div class="kontak">
            <div class="logoFooter"><img src="icons/logoFooter.svg" alt="logo"></div>
            <div class="sosmed">
                <img src="icons/ig.svg" alt="ig">
                <img src="icons/fb.svg" alt="fb">
                <img src="icons/wa.svg" alt="wa">
                <img src="icons/yt.svg" alt="yt">
            </div>
            <p>Jl. Kartini No.2, Kec. Pancoran Mas, Kota Depok</p>
        </div>
        <div class="tentang">
            <h4>Tentang Kami</h4>
            <p>Nilai kami</p>
            <p>Tonggak Sejarah</p>
        </div>
        <div class="layanan">
            <h4>Layanan</h4>
            <p>Layanan Unggulan</p>
            <p>Layanan Penunjang</p>
            <p>Janji Temu Dokter</p>
        </div>
        <div class="info">
            <h4>Informasi Lain</h4>
            <p>Paket Kesehatan</p>
            <p>Artikel Kesehatan</p>
            <p>Podcast Kesehatan</p>
        </div>
    </div>

</body>
</html>
