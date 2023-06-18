<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alia Hospital</title>
    <link rel="stylesheet" href="css/homepage.css">
</head>

<body>
    @extends('Layout.app_home')

    @section('content')
    <div>
        <div class="carousell">
            <img src="images/carousell.png" alt="carousell">
        </div>
        <div class="container">
            <div class="kiri">
                <div class="layananUnggulan">
                    <h2 style="display: flex; justif">Layanan Unggulan</h2>
                    <div class="list">
                        <img src="icons/layananUnggulan1.svg" alt="layananUnggulan1">
                        <img src="icons/layananUnggulan2.svg" alt="layananUnggulan2">
                        <img src="icons/layananUnggulan3.svg" alt="layananUnggulan3">
                        <img src="icons/layananUnggulan4.svg" alt="layananUnggulan4">
                        <img src="icons/layananUnggulan5.svg" alt="layananUnggulan5">
                        <img src="icons/layananUnggulan6.svg" alt="layananUnggulan6">
                        <img src="icons/layananUnggulan7.svg" alt="layananUnggulan7">
                        <img src="icons/layananUnggulan8.svg" alt="layananUnggulan8">
                        <img src="icons/layananUnggulan9.svg" alt="layananUnggulan9">
                    </div>

                </div>

                <div class="layananPenunjang">
                    <h2>Layanan Penunjang</h2>
                    <div class="list">
                        <img src="icons/layananPenunjang1.svg" alt="layananPenunjang1">
                        <img src="icons/layananPenunjang2.svg" alt="layananPenunjang2">
                        <img src="icons/layananPenunjang3.svg" alt="layananPenunjang3">
                        <img src="icons/layananPenunjang4.svg" alt="layananPenunjang4">

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
                                <a href="" style="color:black; text-decoration:underline;">
                                    <p>Check Other Articles</p>
                                </a>
                                <a href="" style="color:black; text-decoration:underline;">
                                    <p>See More >>></p>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="kanan">
                    <div class="search">
                        <div class="form">
                            <form>
                                <input type="text" id="search-input" name="search-input" placeholder="Search...">
                            </form>
                        </div>
                        <div class="menu">
                            <button>Cari Dokter</button>
                            <button>Vaksin Center</button>
                            <button>Minimal Invasive Surgery</button>
                            <button>Risk Pregnancy</button>
                            <button>Hemodialisa</button>
                            <button>Rehabilitasi Center</button>
                            <button>Catarac Center</button>
                            <button>Kidney Center</button>
                            <button>Digestive Center</button>
                            <button>Women & Children Center</button>
                        </div>
                    </div>

                    <div class="testimoni">
                        <h3>Testimoni</h3>
                        <div class="text">
                            <p>“Pelayanannya responsif dan sangat profesional. Suasana yang sangat kondusif sehingga
                                merasa
                                aman dan nyaman.” </p>
                            <p>-Ayu [Pasien]</p>
                        </div>
                    </div>

                    <div class="podcast">
                        <h3>Podcast Kesehatan</h3>
                        <img src="icons/podcast.svg" alt="podcast">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>
