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
    <style>
        /* Add the styles for the popup */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 9999;
        }

        /* Add the styles to blur the background outside the popup */
        .popup-open #nav,
        .popup-open #navbar {
            filter: blur(4px);
        }

        /* Add the styles to blur the background */
        .popup-open::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            z-index: 9998;
        }

        /* Add the styles to display the dropdown on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Hide the dropdown content by default */
        .dropdown-content {
            display: none;
            position: absolute; /* Added to position the dropdown content */
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

    </style>
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
        <a href="{{ Auth::check() ? '/profil' : '/register' }}" class="user">
            <img src="icons/user.svg" alt="user-icon">
        </a>
    </div>


    <div class="navbar" id="navbar">
        <a href="/" style="text-decoration: none; color:black">
            <img src="icons/logo.svg" alt="logo" style="width:150px">
        </a>
        <p>Lokasi Rumah Sakit</p>
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
                <a href="/paket-kesehatan">Paket Kesehatan</a>
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
                <a href="https://api.whatsapp.com/send?phone=6281133339000&text=Hallo..%20,%20Alia%20Hospital%20"><img src="icons/wa.svg" alt="wa"></a>
                <img src="icons/fb.svg" alt="fb">
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


    @yield('js')
</body>

</html>
