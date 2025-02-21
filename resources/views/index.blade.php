<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesantren Leadership Daarut Tarqiyah Primago</title>
    <link rel="icon" type="image/png" href="{{ asset('image/tels.png') }}">
    <link rel="stylesheet" href="{{ asset('css/output/index/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
</head>
<style>
    .cabin-sketch-regular {
        font-family: "Cabin Sketch", serif;
        font-weight: 400;
        font-style: normal;
    }

    .cabin-sketch-bold {
        font-family: "Cabin Sketch", serif;
        font-weight: 700;
        font-style: normal;
    }

    .rubik-300 {
        font-family: "Rubik", serif;
        font-optical-sizing: auto;
        font-weight: 300;
        font-style: normal;
    }

    .rubik-700 {
        font-family: "Rubik", serif;
        font-optical-sizing: auto;
        font-weight: 700;
        font-style: normal;
    }

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
</style>

<body>
    {{-- Bagian Utama/Atas --}}
    <header id="header">
        <img id="imgicon" src="{{ asset('image/logo.png') }}" alt="Icon Pesantren Leadership Daarut Tarqiyah Primago">
        {{-- Bagian Navbar didalam Header --}}
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#visi-misi">Visi & Misi</a>
            <a href="#jurusan">Jurusan</a>
            <a href="#ekskul">Ekstrakurikuler</a>
            <a href="#p2db" style="margin-right: 20px;">P2DB</a>
        </nav>
    </header>

    {{-- Bagian Kumpulan Konten Home --}}
    <section id="home">
        <video autoplay loop muted>
            <source src="{{ asset('image/video/bg.mp4') }}" type="video/mp4">
        </video>
        <p id="text1">Pesantren Leadership Daarut Tarqiyah Primago</p>
        <p id="text2">"We Are Not The Best But We Want To Be Excellent"</p>
        {{-- Shape CSS --}}

    </section>

    {{-- Bagian Kumpulan Konten Visi-Misi' --}}
    

        <div id="visi-misi" style="width: 100%; height: 100vh; display: flex">
            <div
                style="width: 50%; height: 100vh;  background-color: #3A5063; display: flex; justify-content: center; align-items: center">
                <div style="width: 80%; height: 70vh">
                    <div>
                        <p class="rubik-700" style="color:#FFA100;font-size:20px;">V I S I</p>
                    </div>
                    <div>
                        <p class="cabin-sketch-bold"
                            style="color: white;font-size:39px;width:100%; display:flex; justify-content:center">MENJADI
                            SEKOLAH UNGGUL DALAM ILMU PENGETAHUAN DAN TEKNOLOGI</p>
                    </div>
                    <div>
                        <p class="rubik-700" style="color:#FFA100;font-size:20px;">M I S I</p>
                    </div>
                    <div>
                        <p class="rubik-300"
                            style="color: white;font-size:20px;width:100%; display:flex; justify-content:center">
                            Menyelenggarakan pendidikan siswa/siswi di bidang
                            Teknologi Telekomunikasi dan Informasi.
                            Mengembangkan suasana akademis yang mendukung kebutuhan pengguna lulusan.
                            Pemberdayaan laboratorium bahasa dan komputer untuk menunjang siswa mempunyai skill memadai.
                            Mengembangkan kurikulum sesuai kompetensi yang diharapkan oleh pengguna lulusan.
                            Segala aktivitas dilandasi nilai-nilai agama.</p>
                    </div>
                </div>
            </div>
            <div
                style="width: 50%; height: 100vh; background-position: center; background-size: cover ;background-image: url('{{ asset('image/548220230503091827img-20230503-wa00010.png') }}');display: flex; justify-content: center; align-items: center">

            </div>

        </div>


    <section id="jurusan" class="bg-light">

       
            <div style="background-color: #007A7A ; width: 100%; height: 90vh; display: flex; ">
                <div style=" width: 50%; height: 100vh">
    
                </div>
                <div style="width: 50%; height: 90vh">
                    <div style="width: 100%; height: 130px; border-bottom-left-radius: 100px;display: flex">
                        <div style="width: 25%; height: 130px; background-color: rgb(0, 154, 154); border-bottom-left-radius: 100px">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked
                            onclick="toggleCard(1)">
                            <label style="display: flex; justify-content: center; align-items: center;width: 100%; height: 130px; border-bottom-left-radius: 100px; font-size: 30px; font-weight: bold; color: white; cursor: pointer" for="btnradio1">RPL</label>
                        </div>
                        <div style="width: 25%; height: 130px; background-color: rgb(24, 209, 209);">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off"
                            onclick="toggleCard(2)">
                            <label style="display: flex; justify-content: center; align-items: center;width: 100%; height: 130px; border-bottom-left-radius: 100px; font-size: 30px; font-weight: bold; color: white; cursor: pointer" for="btnradio2">DKV</label>
                        </div>
                        <div style="width: 25%; height: 130px; background-color: rgb(30, 149, 149);">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off"
                            onclick="toggleCard(3)">
                            <label style="display: flex; justify-content: center; align-items: center;width: 100%; height: 130px; border-bottom-left-radius: 100px; font-size: 30px; font-weight: bold; color: white; cursor: pointer" for="btnradio3">TKJ</label>
                        </div>
                        <div style="width: 25%; height: 130px; background-color: rgb(30, 74, 74);">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off"
                            onclick="toggleCard(4)">
                            <label style="display: flex; justify-content: center; align-items: center;width: 100%; height: 130px; border-bottom-left-radius: 100px; font-size: 30px; font-weight: bold; color: white; cursor: pointer" for="btnradio4">T3</label>
                        </div>
                    </div>

                    <div style="width: 100%; display: flex; justify-content: center">
                        <div style="width: 85%; height: auto;">
                            <div style="width: 80%; margin-top: 100px; border: 1px solid white; height: auto; padding: 20px">

                                <div id="rpl-select">
                                    <ol style="font-size: 25px; font-weight: bold; color: white" >
                                        <li class="cabin-sketch-regular ">Perancangan Sistem</li>
                                        <li class="cabin-sketch-regular ">Database</li>
                                        <li class="cabin-sketch-regular ">Pemrograman Berorientasi Objek</li>
                                        <li class="cabin-sketch-regular ">Pemrograman Web dan Mobile</li>
                                    </ol>
                                </div>

                                <div id="dkv-select" class="d-none">
                                    <ol style="font-size: 25px; font-weight: bold; color: white">
                                        <li class="cabin-sketch-regular ">Desain Grafis Percetakan</li>
                                        <li class="cabin-sketch-regular ">Desain Media Interaktif</li>
                                        <li class="cabin-sketch-regular ">Teknik Animasi 2D dan 3D</li>
                                        <li class="cabin-sketch-regular ">Teknik Pengolahan Audio dan Video</li>
                                    </ol>
                                </div>

                                <div id="tkj-select" class="d-none">
                                    <ol style="font-size: 25px; font-weight: bold; color: white">
                                        <li class="cabin-sketch-regular ">Teknologi Jaringan Berbasis Luar</li>
                                        <li class="cabin-sketch-regular ">Administrasi Infrastruktur Jaringan</li>
                                        <li class="cabin-sketch-regular ">Administrasi Sistem Jaringan</li>
                                        <li class="cabin-sketch-regular ">Teknologi Layanan Jaringan</li>
                                        <li class="cabin-sketch-regular ">Troubleshooting Jaringan</li>
                                        <li class="cabin-sketch-regular ">Keamanan Jaringan</li>
                                    </ol>
                                </div>

     
                                <div id="telco-select" class="d-none">
                                    <ol style="font-size: 25px; font-weight: bold; color: white">
                                        <li class="cabin-sketch-regular ">Dasar Sistem Telekomunikasi</li>
                                        <li class="cabin-sketch-regular ">Elektronika dan Microcontroller</li>
                                        <li class="cabin-sketch-regular ">Transmisi Satelit [VSAT.IP]</li>
                                        <li class="cabin-sketch-regular ">Transmisi Radio [BTS]</li>
                                        <li class="cabin-sketch-regular ">Transmisi Fiber Optic [FTTH]</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            


        {{-- <div class="container">
            <!-- Header Section -->
            <div class="text-center mb-4">
                <h2 class="fw-bold">JURUSAN KAMI</h2>
                <hr class="w-25 mx-auto">
            </div>

            <div class="row justify-content-center">
                <!-- Info Box: Total Siswa -->
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card text-center p-3 shadow-sm">
                        <h5 class="fw-bold">Rekayasa Perangkat Lunak (10-12)</h5>
                        <p>Total Siswa T.P 2023/2024:</p>
                        <div class="fs-3 fw-bold text-primary">3</div>
                        <p>Sampai Dengan T.P 2024/2025</p>
                    </div>
                </div>

                <!-- Info Box: Total Kelas -->
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card text-center p-3 shadow-sm">
                        <h5 class="fw-bold">Rekayasa Perangkat Lunak (10-12)</h5>
                        <p>Total Kelas T.P 2023/2024:</p>
                        <div class="fs-3 fw-bold text-primary">3</div>
                        <p>Sampai Dengan T.P 2024/2025</p>
                    </div>
                </div>
            </div>

            <!-- Pilihan Jurusan -->
            <div class="d-flex justify-content-center mb-4">
                <div class="btn-group" role="group" aria-label="Jurusan">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked
                        onclick="toggleCard(1)">
                    <label class="btn btn-outline-primary" for="btnradio1">Rekayasa Perangkat Lunak</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off"
                        onclick="toggleCard(2)">
                    <label class="btn btn-outline-primary" for="btnradio2">Desain Komunikasi Visual</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off"
                        onclick="toggleCard(3)">
                    <label class="btn btn-outline-primary" for="btnradio3">Teknik Komputer & Jaringan</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off"
                        onclick="toggleCard(4)">
                    <label class="btn btn-outline-primary" for="btnradio4">Teknik Transmisi Telekomunikasi</label>
                </div>
            </div>

            <!-- Card Jurusan -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="row g-0">

                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Paket Keahlian:</h5>

                                    <!-- RPL -->
                                    <div id="rpl-select">
                                        <ol>
                                            <li>Perancangan Sistem</li>
                                            <li>Database</li>
                                            <li>Pemrograman Berorientasi Objek</li>
                                            <li>Pemrograman Web dan Mobile</li>
                                        </ol>
                                    </div>

                                    <!-- DKV -->
                                    <div id="dkv-select" class="d-none">
                                        <ol>
                                            <li>Desain Grafis Percetakan</li>
                                            <li>Desain Media Interaktif</li>
                                            <li>Teknik Animasi 2D dan 3D</li>
                                            <li>Teknik Pengolahan Audio dan Video</li>
                                        </ol>
                                    </div>

                                    <!-- TKJ -->
                                    <div id="tkj-select" class="d-none">
                                        <ol>
                                            <li>Teknologi Jaringan Berbasis Luar</li>
                                            <li>Administrasi Infrastruktur Jaringan</li>
                                            <li>Administrasi Sistem Jaringan</li>
                                            <li>Teknologi Layanan Jaringan</li>
                                            <li>Troubleshooting Jaringan</li>
                                            <li>Keamanan Jaringan</li>
                                        </ol>
                                    </div>

                                    <!-- Telco -->
                                    <div id="telco-select" class="d-none">
                                        <ol>
                                            <li>Dasar Sistem Telekomunikasi</li>
                                            <li>Elektronika dan Microcontroller</li>
                                            <li>Transmisi Satelit [VSAT.IP]</li>
                                            <li>Transmisi Radio [BTS]</li>
                                            <li>Transmisi Fiber Optic [FTTH]</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>

    {{-- Bagian Kumpulan Konten Ekstrakurikuler --}}
    <section id="ekskul">
        {{-- Shape CSS --}}
        <div class="custom-shape-divider-top-1708188153">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                    opacity=".25" class="shape-fill"></path>
                <path
                    d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                    opacity=".5" class="shape-fill"></path>
                <path
                    d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                    class="shape-fill"></path>
            </svg>
        </div>
        {{-- Text Title --}}
        <div class="text-extra">
            <h2>EKSTRAKURIKULER</h2>
        </div>
        <div class="underline"></div>
        {{-- Kumpulan Konten Image Barisan Pertama --}}
        <div class="wrapper">
            <div class="img-ekskul-row1">
                <div class="subimg-allrow">
                    <img id="img1" src="{{ asset('image/tarung-derajat.png') }}" alt="">
                    <h6 id="text-1">Tarung Derajat</h6>
                </div>
                <div class="subimg-allrow">
                    <img id="img2" src="{{ asset('image/basket.png') }}" alt="">
                    <h6 id="text-2">Basket Tels</h6>
                </div>
                <div class="subimg-allrow">
                    <img id="img3" src="{{ asset('image/paskibra.png') }}" alt="">
                    <h6 id="text-3">Paskibra</h6>
                </div>
                <div class="subimg-allrow">
                    <img id="img4" src="{{ asset('image/mandarin-club.png') }}" alt="">
                    <h6 id="text-4">Mandarin Club</h6>
                </div>
                <div class="subimg-allrow">
                    <img id="img5" src="{{ asset('image/futsal.png') }}" alt="">
                    <h6 id="text-5">Futsal Tels</h6>
                </div>
                <div class="subimg-allrow">
                    <img id="img6" src="{{ asset('image/pmr.png') }}" alt="">
                    <h6 id="text-6">Palang Merah Remaja</h6>
                </div>
            </div>

            {{-- Kumpulan Konten Image Barisan Kedua --}}
            <div class="img-ekskul-row2">
                <div class="subimg-allrow">
                    <img id="img1" src="{{ asset('image/english-club.png') }}" alt="">
                    <h6 id="text-1">English Club</h6>
                </div>
                <div class="subimg-allrow">
                    <img id="img2" src="{{ asset('image/matematika.png') }}" alt="">
                    <h6 id="text-2">Bengkel Matematika</h6>
                </div>
                <div class="subimg-allrow">
                    <img id="img3" src="{{ asset('image/rohis.png') }}" alt="">
                    <h6 id="text-3">Rohis</h6>
                </div>
                <div class="subimg-allrow">
                    <img id="img4" src="{{ asset('image/voli.png') }}" alt="">
                    <h6 id="text-4">Voli Tels</h6>
                </div>
                <div class="subimg-allrow">
                    <img id="img5" src="{{ asset('image/sepak-bola.png') }}" alt="">
                    <h6 id="text-5">Sepak Bola</h6>
                </div>
                <div class="subimg-allrow">
                    <img id="img6" src="{{ asset('image/kesenian.png') }}" alt="">
                    <h6 id="text-6">Kesenian Tels</h6>
                </div>
            </div>

            {{-- Kumpulan Konten Image Barisan Ketiga --}}
            <div class="img-ekskul-row3">
                <div class="subimg-allrow">
                    <img id="img1" src="{{ asset('image/osis.png') }}" alt="">
                    <h6 id="text-1">OSIS</h6>
                </div>
                <div class="subimg-allrow">
                    <img id="img2" src="{{ asset('image/pramuka.png') }}" alt="">
                    <h6 id="text-2">Pramuka</h6>
                </div>
                <div class="subimg-allrow">
                    <img id="img3" src="{{ asset('image/syntax.png') }}" alt="">
                    <h6 id="text-3">Syntax (RPL)</h6>
                </div>
                <div class="subimg-allrow">
                    <img id="img4" src="{{ asset('image/seni-media.png') }}" alt="">
                    <h6 id="text-4">Seni Media (DKV)</h6>
                </div>
                <div class="subimg-allrow">
                    <img id="img5" src="{{ asset('image/tomcat.png') }}" alt="">
                    <h6 id="text-5">Tomcat (TKJ)</h6>
                </div>
            </div>
        </div>
    </section>

    {{-- Bagian Kumpulan Konten P2DB --}}
    <section id="p2db">
        {{-- Shape CSS --}}
        <div class="custom-shape-divider-top-1708001615">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                    opacity=".25" class="shape-fill"></path>
                <path
                    d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                    opacity=".5" class="shape-fill"></path>
                <path
                    d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <img id="img-p2db" src="{{ asset('image/ppdb.png') }}" alt="PPDB TELAH DIBUKA">
        <img id="img-assets1" src="{{ asset('image/cloud.png') }}" alt="">
        <img src="{{ asset('image/cloud.png') }}" alt="" id="img-assets2">
        <img src="{{ asset('image/cloud.png') }}" alt="" id="img-assets3">
        {{-- Isi Sub-Konten P2DB --}}
        <div class="content-p2db">
            <img src="{{ asset('image/img-p2db.png') }}" alt="Come and Joy With Us">
            {{-- class text-content-p2db digunakan untuk mengelompokkan  --}}
            <div class="text-content-p2db">
                {{-- Text Gelombang pertama dengan arah kesamping (display: flex, flex-direction: row) --}}
                <div class="class1">
                    <h4 style="color: white; font-weight: bolder;">GELOMBANG 1: <h4
                            style="color: #FDFF5B; font-weight: bold; margin-left: 20px;">Rp 7.750.000</h4>
                    </h4>
                </div>
                {{-- Text Latin/Huruf dari harga p2db Gelombang 1 --}}
                <p
                    style="color: white; top: 0; font-size: small; padding: 0; margin-top: -8px; margin-left: 40px; margin-bottom: 25px;">
                    (Tujuh juta tujuh ratus lima puluh ribu rupiah)</p>
                {{-- Kenapa menggunakan class1? karena class1 sudah diatur untuk arah kesamping saja (display: flex, flex-direction: row) --}}
                <div class="class1">
                    <h4 style="color: white; font-weight: bolder;">GELOMBANG 2: <h4
                            style="color: #FDFF5B; font-weight: bold; margin-left: 20px;">Rp 8.950.000</h4>
                    </h4>
                </div>
                {{-- Text Latin/Huruf dari harga p2db Gelombang 2 --}}
                <p
                    style="color: white; top: 0; font-size: small; padding: 0; margin-top: -8px; margin-left: 25px; margin-bottom: 20px;">
                    (Delapan juta sembilan ratus lima puluh ribu rupiah)</p>
                {{-- Kenapa menggunakan class1? karena class1 sudah diatur untuk arah kesamping saja (display: flex, flex-direction: row) --}}
                <div class="class1">
                    {{-- Tampilan Button Info P2DB dengan ikon WhatsApp --}}
                    <div class="button" id="button-daftar">
                        <a href="https://wa.link/wdzbxl" class="join-now-link">
                            <div ></div>
                            Info P2db
                        </a>
                    </div>
                    {{-- Tampilan Button Daftar P2DB --}}
                    <div class="button" id="button-daftar">
                        <a href="{{ route('login') }}" class="join-now-link">
                            <div ></div>
                            Join Now!
                        </a>
                    </div>
                </div>
            </div>
            <hr>
            <iframe style="border: 1.5px solid black; float: right; margin-left: auto; margin-right: 2.5rem;"
                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=primago&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                width="580" height="360" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <hr>

        </div>
    </section>

    {{-- Footer adalah bagian dari sebuah halaman web atau dokumen yang terletak di bagian bawah. Biasanya digunakan untuk hak cipta --}}
    <footer>
        {{-- Elemen span adalah elemen umum yang tidak memiliki makna khusus dan sering digunakan sebagai kontainer untuk memformat atau memberikan gaya pada sebagian kecil teks --}}
        <p>&copy;2024 Created by <span
                onclick="openLink('https://www.instagram.com/pesantrenleadershipprimago/')">Kelompok Irji</span> (XII
            RPL 1) || Source from
            <span onclick="openLink('https://www.instagram.com/pesantrenleadershipprimago/">Pesantren Leadership Daarut
                Tarqiyah Primago</span>
        </p>
    </footer>
</body>
<script>
    function toggleCard(option) {
        document.getElementById("rpl-select").classList.add("d-none");
        document.getElementById("dkv-select").classList.add("d-none");
        document.getElementById("tkj-select").classList.add("d-none");
        document.getElementById("telco-select").classList.add("d-none");

        if (option === 1) {
            document.getElementById("rpl-select").classList.remove("d-none");
        } else if (option === 2) {
            document.getElementById("dkv-select").classList.remove("d-none");
        } else if (option === 3) {
            document.getElementById("tkj-select").classList.remove("d-none");
        } else if (option === 4) {
            document.getElementById("telco-select").classList.remove("d-none");
        }
    }
</script>
{{-- JavaScript Index --}}
<script src="{{ asset('js/js-index.js') }}"></script>
{{-- JavaScript Bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
