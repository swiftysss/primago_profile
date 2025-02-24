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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Text:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
</head>
<style>
    .wix-madefor-text-400 {
        font-family: "Wix Madefor Text", serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
    }

    .wix-madefor-text-700 {
        font-family: "Wix Madefor Text", serif;
        font-optical-sizing: auto;
        font-weight: 700;
        font-style: normal;
    }

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
            style="width: 50%; height: 100vh;  background-color: #FFFFFF; display: flex; justify-content: center; align-items: center">
            <div style="width: 80%; height: 70vh">
                <div>
                    <p class="rubik-700" style="color:#2C3E50;font-size:20px;">V I S I</p>
                </div>
                <div>
                    <p class="cabin-sketch-bold"
                        style="color: #2C3E50;font-size:39px;width:100%; display:flex; justify-content:center">MENJADI
                        SEKOLAH UNGGUL DALAM ILMU PENGETAHUAN DAN TEKNOLOGI</p>
                </div>
                <div>
                    <p class="rubik-700" style="color:#2C3E50;font-size:20px;">M I S I</p>
                </div>
                <div>
                    <p class="rubik-300"
                        style="color: #2C3E50;font-size:20px;width:100%; display:flex; justify-content:center">
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
        <div class="wrapper" style="background-color: #F5F5F5 ; width: 100%; height: 115vh; display: flex; ">
            <div style=" width: 50%; height: 100vh; display: flex; justify-content: center; align-items: center">
                <div style=" width: 400px; height: 60vh">
                    <div class="RPLIMG" id="rplimg">
                        <img style="width: 400px; height: 400px" src="{{ asset('image/TRPL.png') }}" alt="">
                    </div>
                    <div class="DKVIMG" id="dkvimg" class="d-none">
                        <img style="width: 400px; height: 400px" src="{{ asset('image/DEKV.png') }}" alt="">
                    </div>
                    <div class="TKJIMG" id="tkjimg" class="d-none">
                        <img style="width: 350px; height: 400px;" src="{{ asset('image/TKJJ.png') }}" alt="">
                    </div>
                    <div class="TELCOIMG" id="tttimg" class="d-none">
                        <img style="width: 400px; height: 400px;" src="{{ asset('image/TTT.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div style="width: 50%; height: 90vh;">
                <div style="width: 100%; height: 130px; border-bottom-left-radius: 100px;display: flex">
                    <div class="rpl" style="width: 25%; height: 130px; background-color: #CCCCCC; border-bottom-left-radius: 100px">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off"
                            checked onclick="toggleCard(1)">
                        <label
                            style="display: flex; justify-content: center; align-items: center;width: 100%; height: 130px; border-bottom-left-radius: 100px; font-size: 30px; font-weight: bold; color: white; cursor: pointer"
                            for="btnradio1">RPL</label>
                    </div>
                    <div class="rpl" style="width: 25%; height: 130px; background-color: #aaaaaa;">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off"
                            onclick="toggleCard(2)">
                        <label
                            style="display: flex; justify-content: center; align-items: center;width: 100%; height: 130px; border-bottom-left-radius: 100px; font-size: 30px; font-weight: bold; color: white; cursor: pointer"
                            for="btnradio2">DKV</label>
                    </div>
                    <div class="rpl" style="width: 25%; height: 130px; background-color: #858585;">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off"
                            onclick="toggleCard(3)">
                        <label
                            style="display: flex; justify-content: center; align-items: center;width: 100%; height: 130px; border-bottom-left-radius: 100px; font-size: 30px; font-weight: bold; color: white; cursor: pointer"
                            for="btnradio3">TKJ</label>
                    </div>
                    <div class="rpl" style="width: 25%; height: 130px; background-color: #6f6f6f;">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off"
                            onclick="toggleCard(4)">
                        <label
                            style="display: flex; justify-content: center; align-items: center;width: 100%; height: 130px; border-bottom-left-radius: 100px; font-size: 30px; font-weight: bold; color: white; cursor: pointer"
                            for="btnradio4">Telco</label>
                    </div>
                </div>

                <div style="width: 100%; display: flex; justify-content: center;transition: .5s">
                    <div style="width: 85%; height: auto;">
                        <div
                            style="width: 80%; margin-top: 100px;border-radius: 10px ; border: 2px solid #222222; background-color: #FFFFFF; height: auto; padding: 20px">

                            <div class="ERPEEL" id="rpl-select">
                                <ol style="font-size: 25px; font-weight: bold; color: #222222">
                                    <li class="cabin-sketch-regular ">Perancangan Sistem</li>
                                    <li class="cabin-sketch-regular ">Database</li>
                                    <li class="cabin-sketch-regular ">Pemrograman Berorientasi Objek</li>
                                    <li class="cabin-sketch-regular ">Pemrograman Web dan Mobile</li>
                                </ol>
                            </div>

                            <div class="DEKAVE" id="dkv-select" class="d-none">
                                <ol style="font-size: 25px; font-weight: bold; color: #222222">
                                    <li class="cabin-sketch-regular ">Desain Grafis Percetakan</li>
                                    <li class="cabin-sketch-regular ">Desain Media Interaktif</li>
                                    <li class="cabin-sketch-regular ">Teknik Animasi 2D dan 3D</li>
                                    <li class="cabin-sketch-regular ">Teknik Pengolahan Audio dan Video</li>
                                </ol>
                            </div>

                            <div class="TEKAJE" id="tkj-select" class="d-none">
                                <ol style="font-size: 25px; font-weight: bold; color: #222222">
                                    <li class="cabin-sketch-regular ">Teknologi Jaringan Berbasis Luar</li>
                                    <li class="cabin-sketch-regular ">Administrasi Infrastruktur Jaringan</li>
                                    <li class="cabin-sketch-regular ">Administrasi Sistem Jaringan</li>
                                    <li class="cabin-sketch-regular ">Teknologi Layanan Jaringan</li>
                                    <li class="cabin-sketch-regular ">Troubleshooting Jaringan</li>
                                    <li class="cabin-sketch-regular ">Keamanan Jaringan</li>
                                </ol>
                            </div>


                            <div class="TELCO" id="telco-select" class="d-none">
                                <ol style="font-size: 25px; font-weight: bold; color: #222222">
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

    </section>

    <section id="kegiatan">
        <div style="width: 100%; min-height: 90vh; padding-bottom: 40px; background-color: #CCCCCC ">
            <div>
                <div class="wix-madefor-text-700"
                    style="padding-top: 150px;width: 100%; display: flex; justify-content: center">
                    <p style="font-size: 60px;color: #2C3E50">Galery Kegiatan</p>
                </div>
                <div class="wix-madefor-text-400" style="width: 100%; display: flex; justify-content: center">
                    <p style="font-size: 20px;color: #2C3E50">Pesantren Leadership Primago</p>
                </div>
            </div>
            <div class="wix-madefor-text-400 gtw"
                style="gap: 20px;width: 100%; display: flex; justify-content: center">
                <button id="all"
                    style="background-color: #2C3E50;font-size: 20px;color: white; font-weight: 500;border-radius:15px ;width: 50px; height: 40px; border: none">
                    All
                </button>
                <button id="tahunan"
                    style="background-color: #2C3E50;font-size: 20px;color: white; font-weight: 500;border-radius:15px ;width: 250px; height: 40px; border: none">
                    Kegiatan Tahunan
                </button>
                <button id="estra"
                    style="background-color: #2C3E50;font-size: 20px;color:white; font-weight: 500;border-radius:15px ;width: 200px; height: 40px; border: none">
                    Ekstrakulikuler
                </button>
            </div>

            <div style="width: 100%; display: flex; justify-content: center;">
                <div style="margin-top:40px;width: 85%; height: auto;flex-wrap: wrap; display: flex; gap: 30px">
                    
                    <div id="thn" style="width: 400px; height: 315px; ">
                        <div style="display: flex; justify-content: center; width: 100%;">
                            <div style="width: 100%; overflow: hidden;border-radius: 10px">
                                <img class="balde" style=" transition: all .5s ease;border-top-left-radius: 10px; border-top-right-radius: 10px; width: 100%; height: 250px;object-fit: cover; " src="https://primagoschool.com/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2023-03-17-at-16.28.32-q3n3ze3fepm6hlriru0qbsz5dgxveqz27g4cz1ijjk.jpeg">
                                <div style="width: 100%; display: flex; justify-content: center; margin-top: 10px">
                                    <p class="wix-madefor-text-400" style="font-size: 20px">Perfotoan Santri Putra Angkatan 4</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="thn1" style="width: 400px; height: 315px; ">
                        <div style="display: flex; justify-content: center; width: 100%;">
                            <div style="width: 100%; overflow: hidden;border-radius: 10px">
                                <img class="balde" style=" transition: all .5s ease;border-top-left-radius: 10px; border-top-right-radius: 10px; width: 100%; height: 250px; object-fit: cover;" src="https://primagoschool.com/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2022-12-19-at-12.28.36-1-1-pzdn6l07tictdyny2tn3z7n1889xajb9bg4kxnv3w0.jpeg">
                                <div style="width: 100%; display: flex; justify-content: center; margin-top: 10px">
                                    <p class="wix-madefor-text-400" style="font-size: 20px">Primago Art Show Putri</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="thn2" style="width: 400px; height: 315px; ">
                        <div style="display: flex; justify-content: center; width: 100%;">
                            <div style="width: 100%; overflow: hidden;border-radius: 10px">
                                <img class="balde" style=" transition: all .5s ease;border-top-left-radius: 10px; border-top-right-radius: 10px; width: 100%; height: 250px; object-fit: cover;" src="https://primagoschool.com/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2022-09-22-at-09.09.44-pv485wgmhevocmf2xj57qfr01bjgay87wudbjv4rqo.jpeg">
                                <div style="width: 100%; display: flex; justify-content: center; margin-top: 10px">
                                    <p class="wix-madefor-text-400" style="font-size: 20px">Study Enterpreneurhip Hidroponik Putri</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- eskurl --}}
                    <div id="eskul" style="width: 400px; height: 315px; ">
                        <div style="display: flex; justify-content: center; width: 100%;">
                            <div style="width: 100%; overflow: hidden;border-radius: 10px">
                                <img class="balde" style=" transition: all .5s ease;border-top-left-radius: 10px; border-top-right-radius: 10px; width: 100%; height: 250px; object-fit: cover;" src="https://primagoschool.com/wp-content/uploads/elementor/thumbs/IMG_20210915_071956-pdamaz70fuoltfuys68d7cmwru6y63uwshnp4igl0w.jpg">
                                <div style="width: 100%; display: flex; justify-content: center; margin-top: 10px">
                                    <p class="wix-madefor-text-400" style="font-size: 20px">Pramuka</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="eskul1" style="width: 400px; height: 315px; ">
                        <div style="display: flex; justify-content: center; width: 100%;">
                            <div style="width: 100%; overflow: hidden;border-radius: 10px">
                                <img class="balde" style=" transition: all .5s ease;border-top-left-radius: 10px; border-top-right-radius: 10px; width: 100%; height: 250px; object-fit: cover;" src="https://primagoschool.com/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2022-12-19-at-12.29.41-pzdn5eph9yqwviddxtcwd0bahw2eo5nc5mrqc7lto0.jpeg">
                                <div style="width: 100%; display: flex; justify-content: center; margin-top: 10px">
                                    <p class="wix-madefor-text-400" style="font-size: 20px">Pencak Silat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="eskul2" style="width: 400px; height: 315px; ">
                        <div style="display: flex; justify-content: center; width: 100%;">
                            <div style="width: 100%; overflow: hidden;border-radius: 10px">
                                <img class="balde" style=" transition: all .5s ease;border-top-left-radius: 10px; border-top-right-radius: 10px; width: 100%; height: 250px; object-fit: cover;" src="https://primagoschool.com/wp-content/uploads/elementor/thumbs/531536c653df4771b0471a697a35d5f3-q0b94d3oazo94uk48ew2323837iq27ojmg01ueb4a8.jpg">
                                <div style="width: 100%; display: flex; justify-content: center; margin-top: 10px">
                                    <p class="wix-madefor-text-400" style="font-size: 20px">Jamnas V Anak Sholeh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>

        </div>

    </section>

    {{-- Bagian Kumpulan Konten Ekstrakurikuler --}}
    <section id="ekskul">
        {{-- Shape CSS --}}
        <div class="custom-shape-divider-top-1708001615">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                    opacity=".25" fill="#CCCCCC"></path>
                <path
                    d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                    opacity=".5" fill="#2C3E50"></path>
                <path
                    d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                    fill="#CCCCCC"></path>
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
        <div style="justify-content: center; align-items: center;" class="content-p2db">
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
                            <div></div>
                            Info P2db
                        </a>
                    </div>
                    {{-- Tampilan Button Daftar P2DB --}}
                    <div class="button" id="button-daftar">
                        <a href="{{ route('login') }}" class="join-now-link">
                            <div></div>
                            Join Now!
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <section id="alamat-pesantren" style="margin-top: 50px">

        <div class="text-center mb-4">
            <h2 class="fw-bold text-orange">ALAMAT PESANTREN LEADERSHIP PRIMAGO</h2>
            <hr class="w-25 mx-auto">
        </div>
        <div style=" width: 100%; height: 40vh; display: flex; margin-bottom: 50px">

            <div style="display: flex;width: 50%; justify-content: center; align-items: center">
                <div style="border:  1px solid; width: 80%; height: 120px; border-radius: 10px; padding: 10px">
                    <h4 class=" wix-madefor-text-400 fw-bold text-orange">Kampus Putra</h4>
                    <p class="text-muted">
                        Kawasan Palem Ganda Asri, Jl. Tupai Raya Blok A2 No.1, Meruyung, Limo, Kota Depok, Jawa
                        Barat.
                    </p>
                </div>
            </div>
            <div style="display: flex;width: 50%; justify-content: center; align-items: center">
                <div style="border:  1px solid; width: 80%; height: 120px; border-radius: 10px; padding: 10px">
                    <h4 class="fw-bold text-orange">Kampus Putri</h4>
                    <p class="text-muted">
                        Jl. Raya Kampung Sawah no. 19 RT.1/RW.2 Jatimulya Cilodong, Kota Depok, Jawa Barat.
                    </p>
                </div>
            </div>

            
            {{-- <div class="text-center mb-4">
                <h2 class="fw-bold text-orange">ALAMAT PESANTREN LEADERSHIP PRIMAGO</h2>
                <hr class="w-25 mx-auto">
            </div>

            <div class="justify-content-end">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h4 class="fw-bold text-orange">Kampus Putra</h4>
                            <p class="text-muted">
                                Kawasan Palem Ganda Asri, Jl. Tupai Raya Blok A2 No.1, Meruyung, Limo, Kota Depok, Jawa
                                Barat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h4 class="fw-bold text-orange">Kampus Putri</h4>
                            <p class="text-muted">
                                Jl. Raya Kampung Sawah no. 19 RT.1/RW.2 Jatimulya Cilodong, Kota Depok, Jawa Barat.
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}
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
window.onload = function() {
    var tahunList = [
        document.getElementById('thn'),
        document.getElementById('thn1'),
        document.getElementById('thn2')
    ];
    
    var eskulList = [
        document.getElementById('eskul'),
        document.getElementById('eskul1'),
        document.getElementById('eskul2')
    ];

    var all = document.getElementById('all');
    var tahunan = document.getElementById('tahunan');
    var estra = document.getElementById('estra');

    
    function toggleVisibility(showTahun, showEskul) {
        tahunList.forEach(el => el && el.classList.toggle('d-none', !showTahun));
        eskulList.forEach(el => el && el.classList.toggle('d-none', !showEskul));
    }

    
    toggleVisibility(true, true);

    if (all) {
        all.addEventListener('click', function() {
            toggleVisibility(true, true);
        });
    }

    if (tahunan) {
        tahunan.addEventListener('click', function() {
            toggleVisibility(true, false);
        });
    }

    if (estra) {
        estra.addEventListener('click', function() {
            toggleVisibility(false, true);
        });
    }
};

</script>
<script>
    function toggleCard(option) {
        var rplimg = document.getElementById('rplimg')
        var dkvimg = document.getElementById('dkvimg')
        var tkjimg = document.getElementById('tkjimg')
        var tttimg = document.getElementById('tttimg')

        var rpl = document.getElementById("rpl-select")
        var dkv = document.getElementById("dkv-select")
        var tkj = document.getElementById("tkj-select")
        var t3 = document.getElementById("telco-select")

        tttimg.classList.add('d-none')
        dkvimg.classList.add('d-none')
        rplimg.classList.add('d-none')
        tkjimg.classList.add('d-none')
        rpl.classList.add("d-none");
        dkv.classList.add("d-none");
        tkj.classList.add("d-none");
        t3.classList.add("d-none");

        if (option === 1) {
            rplimg.style.display = 'block'
            rplimg.classList.remove("d-none");
            rpl.classList.remove("d-none");
            rpl.style.display = 'block'
        } else if (option === 2) {
            dkv.classList.remove("d-none");
            dkvimg.classList.remove("d-none");
            dkv.style.display = 'block'
            dkvimg.style.display = 'block'
        } else if (option === 3) {
            tkj.classList.remove("d-none");
            tkjimg.classList.remove("d-none");
            tkj.style.display = 'block'
            tkjimg.style.display = 'block'
        } else if (option === 4) {
            t3.classList.remove("d-none");
            tttimg.classList.remove("d-none");
            t3.style.display = 'block'
            tttimg.style.display = 'block'
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
