<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alia Hospital</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <script>
        // Function to show the popup
        function showPopup(buttonType) {
            var popup = document.getElementById("popup");
            var nav = document.getElementById("nav");
            var navbar = document.getElementById("navbar");
            var popupContent = document.getElementById("popup-content");

            if (buttonType === "emergency") {
                popupContent.innerHTML = "Hubungi nomor berikut:<br>Emergency Call: 021-3044-9000";
            } else if (buttonType === "callcenter") {
                popupContent.innerHTML = "Hubungi nomor berikut:<br>Call Center: 021-3040-9000";
            }

            popup.style.display = "block";
            nav.classList.add("popup-open");
            navbar.classList.add("popup-open");
        }

        // Function to hide the popup
        function hidePopup() {
            var popup = document.getElementById("popup");
            var nav = document.getElementById("nav");
            var navbar = document.getElementById("navbar");

            popup.style.display = "none";
            nav.classList.remove("popup-open");
            navbar.classList.remove("popup-open");
        }

        // Event listener to close the popup when clicking outside of it
        window.addEventListener("click", function (event) {
            var popup = document.getElementById("popup");
            var button = document.getElementById("emergencyButton");
            var callCenterButton = document.getElementById("callCenterButton");

            if (event.target !== popup && event.target !== button && event.target !== callCenterButton) {
                hidePopup();
            }
        });

    </script>
    @yield('css')
</head>

<body>
    <div class="nav" id="nav">
        <div class="button-call">
            <button class="emergency" id="emergencyButton" onclick="showPopup('emergency')">
                <p>Emergency Call 021-3044-9000</p>
                <img src="icons/emergency.svg" alt="emergency-icon">
            </button>
            <button class="callcenter" id="callCenterButton" onclick="showPopup('callcenter')">
                <p>Call Center 021-3040-9000</p>
                <img src="icons/callcenter.svg" alt="callcenter-icon">
            </button>
        </div>
        <div>
            @if(Auth::check())
            <a href="/profil" class="user">
                <img src="icons/user.svg" alt="user-icon">
            </a>
            <a href="/logout"><img class="logout" src="images/logout.png" alt=""></a>
            @else
            <a href="/register" class="user">
                <img src="icons/user.svg" alt="user-icon">
            </a>
            @endif
        </div>
    </div>


    <div class="navbar" id="navbar">
        <a href="/" style="text-decoration: none; color:black">
            <img src="icons/logo.svg" alt="logo" style="width:150px">
        </a>
        <a href="/lokasi">
            <p style="color: black;padding: 12px 16px;text-decoration: none;display: block;">Lokasi Rumah Sakit</p>
        </a>
        <div class="dropdown">
            <span class="dropbtn">Cari Dokter <i class="fas fa-caret-down"></i></span>
            <div class="dropdown-content">
                <a href="/jadwal">Jadwal Dokter</a>
                <a href="/buatjanji">Janji Temu</a>
            </div>
        </div>
        <div class="dropdown">
            <span class="dropbtn">Layanan <i class="fas fa-caret-down"></i></span>
            <div class="dropdown-content">
                <a href="/#layananUnggulan">Layanan Unggulan</a>
                <a href="/#layananPenunjang">Layanan Penunjang</a>
                <a href="/#paketKesehatan">Paket Kesehatan</a>
            </div>
        </div>
        <div class="dropdown">
            <span class="dropbtn">Tentang Kami <i class="fas fa-caret-down"></i></span>
            <div class="dropdown-content">
                <a href="/nilaiKami">Nilai Kami</a>
                <a href="/tonggakSejarah">Tonggak Sejarah</a>
            </div>
        </div>
        <img src="icons/slogan.svg" alt="slogan" style="width:150px">
    </div>

    @yield('content')

    <!-- Add the popup markup -->
    <div class="popup" id="popup">
        <div class="popup-content" id="popup-content"></div>
    </div>
    <div class="footer">
        <div class="kontak">
            <div class="logoFooter"><img src="icons/logoFooter.svg" alt="logo"></div>
            <div class="sosmed">
                <a href="https://www.youtube.com/@Alia_Hospital"><img src="icons/yt.svg" alt="yt"></a>
                <a href="https://www.instagram.com/alia.hospital/"><img src="icons/ig.svg" alt="ig"></a>
                <a href="https://api.whatsapp.com/send?phone=6281133339000&text=Hallo..%20,%20Alia%20Hospital%20"><img
                        src="icons/wa.svg" alt="wa"></a>
                <img src="icons/fb.svg" alt="fb">
            </div>
            <p>Jl. Kartini No.2, Kec. Pancoran Mas, Kota Depok</p>
        </div>
        <div class="tentang">
            <h4>Tentang Kami</h4>
            <a href="/nilaiKami"><p>Nilai Kami</p></a>
            <a href="/tonggakSejarah"><p>Tonggak Sejarah</p></a>
        </div>
        <div class="layanan">
            <h4>Layanan</h4>
            <a href="/#layananUnggulan"><p>Layanan Unggulan</p></a>
            <a href="/#layananPenunjang"><p>Layanan Penunjang</p></a>
            <a href="/buatjanji"><p>Janji Temu Dokter</p></a>
        </div>
        <div class="info">


            <h4>Informasi Lain</h4>
            <a href="/#paketKesehatan"><p>Paket Kesehatan</p></a>
            <a href="/artikel"><p>Artikel</p></a>
            <a href="https://www.youtube.com/@Alia_Hospital">
                <p>Podcast Kesehatan</p>
            </a>
        </div>
    </div>


    @yield('js')
</body>

</html>
