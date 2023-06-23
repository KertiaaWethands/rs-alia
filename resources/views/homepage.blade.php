<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alia Hospital</title>
    <link rel="stylesheet" href="css/homepage.css">
</head>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const carousell = document.querySelector('.carousell');
        const images = carousell.querySelectorAll('img');
        const carouselControlLeft = document.querySelector('#carouselControlLeft');
        const carouselControlRight = document.querySelector('#carouselControlRight');
        let currentIndex = 0;

        function showImage(index) {
            images.forEach((image, i) => {
                if (i === index) {
                    image.classList.add('active');
                } else {
                    image.classList.remove('active');
                }
            });
        }

        function showNextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            showImage(currentIndex);
        }

        function showPreviousImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            showImage(currentIndex);
        }

        carouselControlLeft.addEventListener('click', showPreviousImage);
        carouselControlRight.addEventListener('click', showNextImage);

        // Show the first image initially
        showImage(currentIndex);
    });
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.querySelector('#search-input');
        const menuButtons = document.querySelectorAll('.menu button');
        const searchResultsContainer = document.querySelector('#search-results');

        function performSearch() {
            const searchTerm = searchInput.value.toLowerCase().trim();

            menuButtons.forEach(function (button) {
                const buttonLabel = button.getAttribute('data-search-term').toLowerCase();
                if (buttonLabel.includes(searchTerm)) {
                    button.style.display = 'block';
                } else {
                    button.style.display = 'none';
                }
            });
        }

        searchInput.addEventListener('input', performSearch);

        menuButtons.forEach(function (button) {
            button.addEventListener('click', function (event) {
                const searchTerm = event.target.getAttribute('data-search-term');
                searchInput.value = searchTerm;
                performSearch();
            });
        });
    });
    const testimoniText = document.querySelector(".testimoni .text");
    const testimoniCarouselControlLeft = document.querySelector("#testimoniCarouselControlLeft");
    const testimoniCarouselControlRight = document.querySelector("#testimoniCarouselControlRight");
    let testimoniIndex = 0;

    // Fungsi untuk mengubah testimoni yang ditampilkan
    function showTestimoni(index) {
        const testimoniItems = document.querySelectorAll(".testimonial-item");
        const testimoniWidth = testimoniItems[0].offsetWidth;

        testimoniText.style.transform = `translateX(${-testimoniWidth * index}px)`;
    }

    // Fungsi untuk menampilkan testimoni sebelumnya
    function showPreviousTestimoni() {
        testimoniIndex--;
        if (testimoniIndex < 0) {
            testimoniIndex = 0;
        }
        showTestimoni(testimoniIndex);
    }

    // Fungsi untuk menampilkan testimoni berikutnya
    function showNextTestimoni() {
        const testimoniItems = document.querySelectorAll(".testimonial-item");
        const testimoniWidth = testimoniItems[0].offsetWidth;
        const maxIndex = testimoniItems.length - 1;

        testimoniIndex++;
        if (testimoniIndex > maxIndex) {
            testimoniIndex = maxIndex;
        }
        showTestimoni(testimoniIndex);
    }

    // Event listener untuk tombol previous dan next pada testimoni carousel
    testimoniCarouselControlLeft.addEventListener("click", showPreviousTestimoni);
    testimoniCarouselControlRight.addEventListener("click", showNextTestimoni);

</script>

<body>
    @extends('Layout.app_home')

    @section('content')
    <div class="carousell">
        <img src="images/transformasi.jpg" alt="carousell1" class="active">
        <img src="images/carousel1.jpg" alt="carousell2">
        <img src="images/carousel.jpg" alt="carousell3">
    </div>
    <div class="carousel-control left" id="carouselControlLeft">&lt;</div>
    <div class="carousel-control right" id="carouselControlRight">&gt;</div>


    <div class="container">
        <div class="kiri">

            <div class="layananUnggulan" id="layananUnggulan">
                <h2 style="display: flex; justif">Layanan Unggulan</h2>
                <div class="list">
                    <a href="/layananUnggulan1"><img src="icons/layananUnggulan1.svg" alt="layananUnggulan1"></a>
                    <a href="/layananUnggulan2"><img src="icons/layananUnggulan2.svg" alt="layananUnggulan2"></a>
                    <a href="/layananUnggulan3"><img src="icons/layananUnggulan3.svg" alt="layananUnggulan3"></a>
                    <a href="/layananUnggulan4"><img src="icons/layananUnggulan4.svg" alt="layananUnggulan4"></a>
                    <a href="/layananUnggulan5"><img src="icons/layananUnggulan5.svg" alt="layananUnggulan5"></a>
                    <a href="/layananUnggulan6"><img src="icons/layananUnggulan6.svg" alt="layananUnggulan6"></a>
                    <a href="/layananUnggulan7"><img src="icons/layananUnggulan7.svg" alt="layananUnggulan7"></a>
                    <a href="/layananUnggulan8"><img src="icons/layananUnggulan8.svg" alt="layananUnggulan8"></a>
                    <a href="/layananUnggulan9"><img src="icons/layananUnggulan9.svg" alt="layananUnggulan9"></a>

                </div>

            </div>

            <div class="layananPenunjang" id="layananPenunjang">
                <h2>Layanan Penunjang</h2>
                <div class="list">
                    <a href="/layananPenunjang1"><img src="icons/layananPenunjang1.svg" alt="layananPenunjang1"></a>
                    <a href="/layananPenunjang2"><img src="icons/layananPenunjang2.svg" alt="layananPenunjang2"></a>
                    <a href="/layananPenunjang3"><img src="icons/layananPenunjang3.svg" alt="layananPenunjang3"></a>
                </div>
            </div>
            <div class="paketKesehatan" id="paketKesehatan">
                <h2>Paket Kesehatan</h2>
                <div class="list">
                    <a href="/paketKesehatan1"><img src="icons/paketKesehatan1.svg" alt="paketKesehatan1"></a>
                    <a href="/paketKesehatan2"><img src="icons/paketKesehatan2.svg" alt="paketKesehatan2"></a>
                    <a href="/paketKesehatan3"><img src="icons/paketKesehatan3.svg" alt="paketKesehatan3"></a>
                </div>
            </div>

            <div class="artikel">
                <div class="artikel1">
                    <h4>The Silent Killer: “Hipertensi”</h4>
                    <p>Istilah hipertensi mungkin sudah tidak asing lagi, karena penyakit ini memang cukup
                        banyak
                        menyita perhatian. Hipertensi adalah suatu kondisi ketika tekanan darah terhadap dinding
                        arteri terlalu tinggi, yaitu di atas 120/80 mmHg. Biasanya penderita banyak ditemui pada
                        kisaran usia dewasa hingga lanjut usia. Namun tidak menutup kemungkinan jika kondisi ini
                        bisa menyerang siapa saja. Badan Kesehatan Dunia (WHO) menyebut angkanya saat ini terus
                        meningkat secara global. Peningkatan orang-orang dewasa di seluruh dunia yang akan
                        mengidap
                        hipertensi diprediksi melonjak hingga 29% pada tahun 2025. Hipertensi adalah salah satu
                        penyakit silent killer karena peny...</p>
                    <div style="display:flex; justify-content:space-between; color:black;">
                        <a href="/artikel" style="color:black; text-decoration:underline;">
                            <p>Check Other Articles</p>
                        </a>
                        <a href="artikel1" style="color:black; text-decoration:underline;">
                            <p>See More >>></p>
                        </a>
                    </div>

                </div>
            </div>

            <div class="kanan">
                <div class="search">
                    <div class="form">
                        <input type="text" id="search-input" name="search-input" placeholder="Search...">
                    </div>
                    <div class="menu">
                        <a href="/jadwal"><button data-search-term="Cari Dokter">Cari Dokter</button></a>
                        <button data-search-term="Vaksin Center">Vaksin Center</button>
                        <button data-search-term="Minimal Invasive Surgery">Minimal Invasive Surgery</button>
                        <button data-search-term="Risk Pregnancy">Risk Pregnancy</button>
                        <button data-search-term="Hemodialisa">Hemodialisa</button>
                        <button data-search-term="Rehabilitasi Center">Rehabilitasi Center</button>
                        <button data-searchsss-term="Catarac Center">Catarac Center</button>
                        <button data-search-term="Kidney Center">Kidney Center</button>
                        <button data-search-term="Digestive Center">Digestive Center</button>
                        <button data-search-term="Women & Children Center">Women & Children Center</button>
                    </div>
                </div>


                <div class="testimoni">
                    <h3>Testimoni</h3>
                    <div class="text">
                        <div class="testimonial-item">
                            <p>Pelayanannya responsif dan sangat profesional. Suasana yang sangat kondusif sehingga
                                merasa aman dan nyaman.</p>
                            <p>- Ayu [Pasien]</p>
                        </div>
                        <div class="testimonial-item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae ullamcorper ex, ac
                                tristique libero. Fusce mollis lacus vitae finibus fermentum. Sed ut odio et mauris
                                vestibulum rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                fames ac turpis egestas.</p>
                            <p>- John Doe</p>
                        </div>
                        <div class="testimonial-item">
                            <p>Aliquam erat volutpat. Mauris ac dui nec ligula vestibulum gravida ut vitae lectus. Sed
                                eget tristique tortor, vitae suscipit risus. Integer dapibus ligula id risus hendrerit
                                sagittis. Pellentesque commodo porta risus, eu gravida est ultrices et.</p>
                            <p>- Jane Smith</p>
                        </div>
                    </div>
                    <div class="carousel-control left" id="testimoniCarouselControlLeft">&lt;</div>
                    <div class="carousel-control right" id="testimoniCarouselControlRight">&gt;</div>
                </div>

                <a href="https://www.youtube.com/@Alia_Hospital">
                    <div class="podcast">
                        <h3>Podcast Kesehatan</h3>
                        <img src="icons/podcast.svg" alt="podcast">
                    </div>
                </a>

            </div>
        </div>
    </div>
    </div>
    @endsection
</body>

</html>
