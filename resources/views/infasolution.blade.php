@extends('components.header')

<!doctype html>
<html lang="en">

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bungee&family=Fasthand&family=Knewave&display=swap');
    </style>


    <title>Infasolution Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>



    <link rel="stylesheet" type="text/css" href="rbpl.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>

@section('content')

    <body>
        <!--navbar-->
        <!--<nav class="navbar navbar-expand-lg fixed-top">
                                                                                                                                                                                                                                            <div class="container-fluid">
                                                                                                                                                                                                                                                <a class="navbar-brand" href="#"></a>
                                                                                                                                                                                                                                                <img src="images\Infacare logo.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
                                                                                                                                                                                                                                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                                                                                                                                                                                                                                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                                                                                                                                                                                                                    <i class="fa fa-bars"></i>
                                                                                                                                                                                                                                                </button>

                                                                                                                                                                                                                                                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent" ;">
                                                                                                                                                                                                                                                    <ul class="navbar-nav ml-auto">
                                                                                                                                                                                                                                                        <li class="nav-item active">
                                                                                                                                                                                                                                                            <a class="nav-link" href="#" style="color: black;">Infasolution</a>
                                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                                        <li class="nav-item">
                                                                                                                                                                                                                                                            <a class="nav-link" href="#" style="color: black;">Infagrowth</a>
                                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                                        <li class="nav-item">
                                                                                                                                                                                                                                                            <a class="nav-link" href="#" style="color: black;">Infanurse</a>
                                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                                        <li class="nav-item">
                                                                                                                                                                                                                                                            <a class="nav-link" href="#" style="color: black;">Infarent</a>
                                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                                        <div class="d-flex">
                                                                                                                                                                                                                                                            <a class="nav-link text-dark mx-2" aria-current="page" href="#">Karina Ayu</a>
                                                                                                                                                                                                                                                            <img src="profile.png" class="profile-pict" alt="" style="width:40px">
                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                    </ul>
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                        </nav>-->


        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-md-6">
                    <h1>Infasolution</h1>
                </div>
            </div>
        </div>

        <!-- artikel -->
        <div>
            <div class="row justify-content-evenly py-2" id="card-container">
                <div class="card mb-3" style="max-width: 450px;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h7 class="card-title">sehatnegeriku.kemkes.go.id</h7>
                                <a href="https://sehatnegeriku.kemkes.go.id/baca/rilis-media/20230125/3142280/prevalensi-stunting-di-indonesia-turun-ke-216-dari-244/"
                                    target="_blank">
                                    <h5 class="card-subtitle mb-2 pt-3">
                                        Prevalensi Stunting di Indonesia Turun ke 21,6% dari
                                        24,4%</h5>
                                </a>
                                <p class="card-text">Kementerian Kesehatan mengumumkan hasil Survei Status Gizi
                                    Indonesia
                                    (SSGI) pada Rapat Kerja Nasional BKKBN, Rabu (25/1) dimana prevalensi stunting di
                                    Indonesia turun dari 24,4% di tahun 2021 menjadi 21,6% di 2022..</p>
                                <h7 class="card-title text-muted">Jakarta, 25 Januari 2023</h7>
                            </div>

                        </div>
                        <div class="col-md-4 py-5" style="max-width: 200px;">
                            <img src="https://sehatnegeriku.kemkes.go.id/wp-content/uploads/2023/01/52647353717_79679f67e2_c.jpg"
                                class="img-fluid rounded" alt=" ">
                        </div>
                    </div>
                </div>


                <div class="card mb-3" style="max-width: 450px;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h7 class="card-title">nestlehealthscience.co.id</h7>
                                <a href="https://www.nestlehealthscience.co.id/artikel/masalah-stunting-anak"
                                    target="_blank">
                                    <h5 class="card-subtitle mb-2 pt-3">
                                        KETAHUI
                                        MASALAH STUNTING DAN CARA UNTUK KURANGI RISIKONYA
                                    </h5>
                                </a>
                                <p class="card-text">Stunting menjadi salah satu problem kesehatan yang masih menggejala di
                                    Indonesia. Masalah stunting bahkan menjadi perhatian khusus Kementerian Kesehatan lewat
                                    sejumlah kampanye nya...
                                </p>
                                <h7 class="card-title text-muted">1 Mei 2016</h7>
                            </div>
                        </div>
                        <div class="col-md-4 py-5" style="max-width: 200px;">
                            <img src="https://live-69566-healthscience-corporate-id.pantheonsite.io/sites/default/files/1_1.jpg"
                                class="img-fluid rounded" alt=" ">
                        </div>
                    </div>
                </div>


                <div class="card mb-3" style="max-width: 450px;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h7 class="card-title">www.halodoc.com</h7>
                                <a href="https://www.halodoc.com/artikel/4-cara-mengatasi-masalah-stunting-pada-balita"
                                    target="_blank">
                                    <h5 class="card-subtitle mb-2 pt-3">4
                                        Cara
                                        Mengatasi Masalah Stunting pada Balita</h5>
                                </a>
                                <p class="card-text">Stunting merupakan kondisi kekurangan gizi kronis
                                    yang terjadi karena defisiensi gizi dalam waktu lama. Kondisi ini bisa menyebabkan
                                    terjadinya gangguan tumbuh kembang anak, yaitu tinggi badan anak yang menjadi lebih
                                    pendek atau bisa dibilang kerdil dibandingkan dengan anak seusianya..</p>
                                <h7 class="card-title text-muted">05 Oktober 2022</h7>
                            </div>
                        </div>
                        <div class="col-md-4 py-5" style="max-width: 200px;">
                            <img src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/10/05085825/X-Cara-Mengatasi-Masalah-Stunting-pada-Balita.jpg.webp"
                                class="img-fluid rounded" alt=" ">
                        </div>
                    </div>
                </div>
            </div>



            <div class="row justify-content-evenly py-2" id="card-container">
                <div class="card mb-3" style="max-width: 450px;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h7 class="card-title">www.lifebuoy.co.id</h7>
                                <a href="https://www.lifebuoy.co.id/semua-artikel/berita-kesehatan/mengenal-stunting-penyebab-hingga-cara-pencegahannya.html"
                                    target="_blank">
                                    <h5 class="card-subtitle mb-2 pt-3">
                                        Mengenal Stunting, Penyebab Hingga Cara Pencegahannya
                                    </h5>
                                </a>
                                <p class="card-text">Istilah stunting mungkin masih terdengar asing di telinga sebagian
                                    orang. Padahal, masalah kesehatan satu ini cukup umum terjadi di Indonesia. Bahkan,
                                    stunting sendiri pernah menjadi masalah yang mendapat perhatian khusus dari Kementerian
                                    Kesehatan lewat kampanye bertajuk ‘Melawan Stunting’..</p>
                                <h7 class="card-title text-muted">28 April 2016</h7>
                            </div>
                        </div>
                        <div class="col-md-4 py-5" style="max-width: 200px;">
                            <img src="https://www.lifebuoy.co.id/sk-eu/content/dam/brands/lifebuoy/indonesia/1647103-07.png.rendition.1338.1338.png"
                                class="img-fluid rounded" alt=" ">
                        </div>
                    </div>
                </div>

                <div class="card mb-3" style="max-width: 450px;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h7 class="card-title">https://sehatnegeriku.kemkes.go.id/</h7>
                                <a href="https://sehatnegeriku.kemkes.go.id/baca/umum/20230121/1542263/protein-hewani-efektif-cegah-anak-alami-stunting/#:~:text=Protein%20Hewani%20dinilai%20efektif%20dalam,dalam%20mendukung%20pertumbuhan%20dan%20perkembangan"
                                    target="_blank">
                                    <h5 class="card-subtitle mb-2 pt-3">Protein Hewani Efektif Cegah Anak Alami Stunting
                                    </h5>
                                </a>
                                <p class="card-text">Protein Hewani dinilai efektif dalam mencegah anak mengalami stunting.
                                    Pangan hewani mempunyai kandungan zat gizi yang lengkap, kaya protein hewani dan vitamin
                                    yang sangat penting dalam mendukung pertumbuhan dan perkembangan..</p>
                                <h7 class="card-title text-muted">Jakarta, 21 Januari 2023</h7>
                            </div>
                        </div>
                        <div class="col-md-4 py-5" style="max-width: 200px;">
                            <img src="https://sehatnegeriku.kemkes.go.id/wp-content/uploads/2023/01/FCD9BE5D-4E35-4621-85E1-B85FD11A2AF1-750x536.jpeg"
                                class="img-fluid rounded" alt=" ">
                        </div>
                    </div>
                </div>

                <div class="card mb-3" style="max-width: 450px;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h7 class="card-title">www.halodoc.com</h7>
                                <a href="https://www.halodoc.com/artikel/5-makanan-bergizi-untuk-mencegah-stunting-pada-balita"
                                    target="_blank">
                                    <h5 class="card-subtitle mb-2 pt-3">5 Makanan Bergizi untuk Mencegah Stunting pada
                                        Balita
                                    </h5>
                                </a>
                                <p class="card-text">“Mengonsumsi makanan bergizi, khususnya protein hewani, cukup efektif
                                    untuk mencegah stunting pada balita. Ada banyak pangan lokal yang bergizi dan kaya
                                    protein, serta baik untuk mendukung pertumbuhan balita.”.</p>
                                <h7 class="card-title text-muted">22 Februari 2023</h7>
                            </div>
                        </div>
                        <div class="col-md-4 py-5" style="max-width: 200px;">
                            <img src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/02/22060206/X-Makanan-Bergizi-untuk-Cegah-Stunting-pada-Balita.jpg.webp"
                                class="img-fluid rounded" alt=" ">
                        </div>
                    </div>
                </div>
            </div>


            <div class="row justify-content-evenly py-2" id="card-container">
                <div class="card mb-3" style="max-width: 450px;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h7 class="card-title">sehatnegeriku.kemkes.go.id</h7>
                                <a href="https://sehatnegeriku.kemkes.go.id/baca/rilis-media/20180407/1825480/cegah-stunting-dengan-perbaikan-pola-makan-pola-asuh-dan-sanitasi-2/"
                                    target="_blank">
                                    <h5 class="card-subtitle mb-2 pt-3">
                                        Cegah Stunting dengan Perbaikan Pola Makan, Pola Asuh dan Sanitasi</h5>
                                </a>
                                <p class="card-text">Sebagian besar masyarakat mungkin belum memahami istilah yang
                                    disebut stunting. Stunting adalah masalah kurang gizi kronis yang disebabkan oleh
                                    kurangnya asupan gizi dalam waktu yang cukup lama, sehingga mengakibatkan
                                    gangguan...
                                </p>
                                <h7 class="card-title text-muted">7 April 2018</h7>
                            </div>

                        </div>
                        <div class="col-md-4 py-5" style="max-width: 200px;">
                            <img src="https://sehatnegeriku.kemkes.go.id/wp-content/uploads/2018/04/IMG_20180407_112608.jpg"
                                class="img-fluid rounded" alt=" ">
                        </div>
                    </div>
                </div>


                <div class="card mb-3" style="max-width: 450px;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h7 class="card-title">www.djkn.kemenkeu.go.id/</h7>
                                <a href="https://www.djkn.kemenkeu.go.id/kpknl-ternate/baca-artikel/15305/Program-Penurunan-Stunting-Apa-Susahnya.html"
                                    target="_blank">
                                    <h5 class="card-subtitle mb-2 pt-3">
                                        Program Penurunan Stunting, Apa Susahnya?
                                    </h5>
                                </a>
                                <p class="card-text">77 Tahun Indonesia merdeka dari penjajahan baru saja kita
                                    peringati pada 17 Agustus 2022 yang lalu, tetapi bangsa ini masih mempunyai 24,4
                                    persen anak-anak yang mengalami stunting. Menurut Organisasi Kesehatan Dunia atau
                                    World Health Organization (WHO) stunting adalah...
                                </p>
                                <h7 class="card-title text-muted">24 Agustus 20122</h7>
                            </div>
                        </div>
                        <div class="col-md-4 py-5" style="max-width: 200px;">
                            <img src="https://www.djkn.kemenkeu.go.id/files/images/2022/08/Stunting.jpg"
                                class="img-fluid rounded" alt=" ">
                        </div>
                    </div>
                </div>


                <div class="card mb-3" style="max-width: 450px;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h7 class="card-title">kupang.antaranews.com</h7>
                                <a href="https://kupang.antaranews.com/berita/105483/artikel--rekam-jejak-penyebab-stunting-pada-anak"
                                    target="_blank">
                                    <h5 class="card-subtitle mb-2 pt-3">4
                                        Rekam jejak penyebab stunting pada anak</h5>
                                </a>
                                <p class="card-text">Pada Hari Gizi Nasional ke-63 ini, Indonesia masih sibuk berkutat
                                    pada masalah stunting. Cukup panjang perjalanan yang harus ditempuh guna membangun
                                    sumber daya manusia yang sehat, produktif dan berdaya saing, karena kompleksnya...
                                </p>
                                <h7 class="card-title text-muted">25 Januari 2023</h7>
                            </div>
                        </div>
                        <div class="col-md-4 py-5" style="max-width: 200px;">
                            <img src="https://img.antaranews.com/cache/800x533/2023/01/25/S_48668680_1.jpg.webp"
                                class="img-fluid rounded" alt=" ">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-evenly py-2" id="card-container">
                    <div class="card mb-3" style="max-width: 450px;">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h7 class="card-title">www.its.ac.id</h7>
                                    <a href="https://www.its.ac.id/news/2021/10/16/angka-stunting-balita-di-indonesia-masih-tinggi/"
                                        target="_blank">
                                        <h5 class="card-subtitle mb-2 pt-3">
                                            Angka Stunting Balita di Indonesia Masih Tinggi</h5>
                                    </a>
                                    <p class="card-text">Nutrisi yang terpenuhi dengan baik, terutama pada 1000 Hari
                                        Pertama Kehidupan (HPK), adalah salah satu kunci utama dalam mencegah stunting
                                        pada anak. Namun berdasarkan data di lapangan, prevelensi stunting di Indonesia
                                        masih sangat tinggi sampai saat ini...
                                    </p>
                                    <h7 class="card-title text-muted">16 Oktober 2021</h7>
                                </div>

                            </div>
                            <div class="col-md-4 py-5" style="max-width: 200px;">
                                <img src="https://www.its.ac.id/news/wp-content/uploads/sites/2/2021/10/stunting.jpg"
                                    class="img-fluid rounded" alt=" ">
                            </div>
                        </div>
                    </div>


                    <div class="card mb-3" style="max-width: 450px;">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h7 class="card-title">www.kominfo.go.id</h7>
                                    <a href="https://www.kominfo.go.id/content/detail/32898/indonesia-cegah-stunting-antisipasi-generasi-stunting-guna-mencapai-indonesia-emas-2045/0/artikel_gpr"
                                        target="_blank">
                                        <h5 class="card-subtitle mb-2 pt-3">
                                            Indonesia Cegah Stunting, Antisipasi Generasi Stunting Guna Mencapai
                                            Indonesia Emas 2045
                                        </h5>
                                    </a>
                                    <p class="card-text">Mempersiapkan generasi emas 2045 bukan hal mudah. Pasalnya,
                                        stunting masih menjadi masalah gizi utama bagi bayi dan anak dibawah usia dua
                                        tahun di Indonesia. Kondisi tersebut harus segera dientaskan karena akan
                                        menghambat momentum generasi emas Indonesia 2045...
                                    </p>
                                    <h7 class="card-title text-muted">17 Februari 2021</h7>
                                </div>
                            </div>
                            <div class="col-md-4 py-5" style="max-width: 200px;">
                                <img src="https://web.kominfo.go.id/sites/default/files/1_.jpeg" class="img-fluid rounded"
                                    alt=" ">
                            </div>
                        </div>
                    </div>


                    <div class="card mb-3" style="max-width: 450px;">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h7 class="card-title">ppid.gunungkidulkab.go.id</h7>
                                    <a href="https://ppid.gunungkidulkab.go.id/berita/423" target="_blank">
                                        <h5 class="card-subtitle mb-2 pt-3">Mengajak remaja berperan dalam pencegahan
                                            stunting</h5>
                                    </a>
                                    <p class="card-text">Stunting merupakan kondisi di mana pertumbuhan anak terganggu,
                                        ditandai dengan tubuh pendek yang disebabkan oleh kekurangan gizi kronis. Balita
                                        stunting pada umumnya rentan terhadap penyakit, mempunyai kecerdasan yang di
                                        bawah normal serta produktivitasnya rendah...</p>
                                    <h7 class="card-title text-muted">13 Februari 2021</h7>
                                </div>
                            </div>
                            <div class="col-md-4 py-5" style="max-width: 200px;">
                                <img src="https://ppid.gunungkidulkab.go.id/berita/423/file_image"
                                    class="img-fluid rounded" alt=" ">
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-evenly py-2" id="card-container">
                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">dinkes.jogjaprov.go.id</h7>
                                        <a href="https://dinkes.jogjaprov.go.id/berita/detail/terapkan-langkah-abcde-untuk-cegah-stunting-optimalkan-pertumbuhan-dan-perkembangan-anak"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                Terapkan Langkah ABCDE untuk Cegah Stunting: Optimalkan Pertumbuhan dan
                                                Perkembangan Anak</h5>
                                        </a>
                                        <p class="card-text">Stunting merupakan salah satu permasalahan kesehatan
                                            masyarakat yang menjadi prioritas nasional. Pemerintah Indonesia melalui
                                            Kementerian Kesehatan terus berupaya menurunkan angka stunting...</p>
                                        <h7 class="card-title text-muted">7 Maret 2023</h7>
                                    </div>

                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://dinkes.jogjaprov.go.id/view_image/view/2158/Screen%20Shot%202023-03-07%20at%209.18.56%20am.png"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">dinkes.semarangkota.go.id</h7>
                                        <a href="https://dinkes.semarangkota.go.id/content/post/325" target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                STUNTING DICEGAH, MASA DEPAN ANAK KIAN CERAH
                                            </h5>
                                        </a>
                                        <p class="card-text">Permasalahan stunting atau gagal tumbuh pada anak masih
                                            menjadi permasalahan mendasar dalam pembangunan manusia Indonesia. Berdasarkan
                                            data Studi Status Gizi Indonesia (SSGI) tahun 2021, prevalensi balita stunting
                                            di Indonesia saat ini masih berada pada angka 24,4%...
                                        </p>
                                        <h7 class="card-title text-muted">17 Juni 2023</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://dinkes.semarangkota.go.id/asset/upload/Leaflet%20website-01.png"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">paudpedia.kemdikbud.go.id</h7>
                                        <a href="https://paudpedia.kemdikbud.go.id/kabar-paud/berita/stunting-terjadi-akibat-ketersedian-alat-kesehatan-belum-memadai-cakupan-gizi-ibu-hamil-dan-balita-terbatas?do=MTQ1NS03NjRhYzZlMQ==&ix=MTEtYmJkNjQ3YzA="
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">4
                                                Stunting Terjadi Akibat Ketersedian Alat Kesehatan Belum Memadai, Cakupan
                                                Gizi Ibu Hamil Dan Balita Terbatas</h5>
                                        </a>
                                        <p class="card-text">Peningkatan stunting terjadi karena kapasitas SDM dan
                                            ketersediaan alat kesehatan ditingkat desa tidak optimal. Selain itu, menurut
                                            Bupati Bengkulu Selatan, Gusnan Mulyadi, rendahnya pengetahuan masyarakat...</p>
                                        <h7 class="card-title text-muted">23 Februari 2023</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://sehatnegeriku.kemkes.go.id/wp-content/uploads/2023/01/90FBA948-5BC8-4A08-BA73-D9248B73DDB3.jpeg"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-evenly py-2" id="card-container">
                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">indonesiabaik.id</h7>
                                        <a href="https://indonesiabaik.id/infografis/stunting-dicegah-kecerdasan-anak-meningkat"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                Stunting Dicegah, Kecerdasan Anak Meningkat</h5>
                                        </a>
                                        <p class="card-text">Apakah itu stunting? Ya, stunting adalah sebuah istilah untuk
                                            anak yang secara antropometri lebih pendek dari rerata tinggi badan normal
                                            anak-anak seusianya (WHO). Saat ini stunting menjadi topik perbincangan...</p>
                                        <h7 class="card-title text-muted">16 Maret 2018</h7>
                                    </div>

                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://indonesiabaik.id/public/uploads/post/1966/1104_Stunting-Dicegah-Kecerdasan-Anak-Meningkat_GP.jpg"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">babelprov.go.id</h7>
                                        <a href="https://babelprov.go.id/artikel_detil/penanggulangan-stunting-melalui-pendekatan-lintas-sektor"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                PENANGGULANGAN STUNTING MELALUI PENDEKATAN LINTAS SEKTOR
                                            </h5>
                                        </a>
                                        <p class="card-text">Postur tubuh pendek mungkin menurut sebagian orang masih
                                            dianggap biasa saja. Bahkan ada pula yang menganggapnya keturunan. Namun,
                                            masyarakat harus waspada terhadap kondisi tubuh yang pendek...
                                        </p>
                                        <h7 class="card-title text-muted">22 Oktober 2021</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/09/05032113/Stunting.jpg.webp"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">www.kemenkopmk.go.id</h7>
                                        <a href="https://www.kemenkopmk.go.id/kejar-target-tahun-prevalensi-stunting-harus-turun-3-persen"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">4
                                                Kejar Target! Per Tahun Prevalensi Stunting Harus Turun 3 Persen</h5>
                                        </a>
                                        <p class="card-text">Sumber Daya Manusia (SDM) yang unggul dan berkualitas
                                            merupakan syarat untuk membawa Indonesia Maju pada tahun 2045. Namun, penyiapan
                                            SDM unggul masih menghadapi tantangan bernama "stunting"... </p>
                                        <h7 class="card-title text-muted">20 Januari 2022</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://www.kemenkopmk.go.id/sites/default/files/articles/2022-01/IMG-20220120-WA0064.jpg"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-evenly py-2" id="card-container">
                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">jateng.suara.com</h7>
                                        <a href="https://jateng.suara.com/read/2023/04/18/102554/kasus-stunting-di-jateng-harus-ditangani-secara-serius-legislatif-jadikan-posyandu-sebagai-garda-terdepan"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                Kasus Stunting di Jateng Harus Ditangani Secara Serius, Legislatif: Jadikan
                                                Posyandu Sebagai Garda Terdepan</h5>
                                        </a>
                                        <p class="card-text">Kementerian Kesehatan mengumumkan hasil Survei Status Gizi
                                            Indonesia
                                            (SSGI) pada Rapat Kerja Nasional BKKBN, Rabu (25/1) dimana prevalensi stunting
                                            di
                                            Indonesia turun dari 24,4% di tahun 2021 menjadi 21,6% di 2022..</p>
                                        <h7 class="card-title text-muted">18 April 2023</h7>
                                    </div>

                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://media.suara.com/pictures/653x366/2023/02/09/26494-ilustrasi-stunting.webp"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">purwasuka.suara.com</h7>
                                        <a href="https://purwasuka.suara.com/read/2023/02/11/111735/program-baas-ampuh-tekan-angka-stunting-di-karawang-wabup-aep-bilang-begini"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                Program BAAS Ampuh Tekan Angka Stunting di Karawang, Wabup Aep Bilang Begini
                                            </h5>
                                        </a>
                                        <p class="card-text">Angka kasus stunting di Kabupaten Karawang berhasil turun
                                            sebesar enam persen pada tahun 2022 menjadi 14 persen. Sebelumnya, pada tahun
                                            2021 kasus stunting di angka 20,6 persen...
                                        </p>
                                        <h7 class="card-title text-muted">11 Februari 2023</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://media.suara.com/suara-partners/purwasuka/thumbs/653x367/2022/11/08/1-ilustrasi-stunting-freepikcom.jpg"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">surabaya.suara.com</h7>
                                        <a href="https://surabaya.suara.com/read/2022/11/28/134306/surabaya-berhasil-turunkan-11-ribu-kasus-stunting-selama-dua-tahun"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">Surabaya berhasil turunkan 11 ribu kasus
                                                stunting selama dua tahun</h5>
                                        </a>
                                        <p class="card-text">Pemerintah Kota (Pemkot) Surabaya, Jawa Timur, berhasil
                                            menurunkan sekitar 11 ribu kasus stunting melalui pelaksanaan berbagai program
                                            selama dua tahun terakhir...</p>
                                        <h7 class="card-title text-muted">28 November 2022</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://media.suara.com/suara-partners/surabaya/thumbs/653x367/2022/11/28/1-rini-ok1.jpg"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-evenly py-2" id="card-container">
                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">www.suara.com</h7>
                                        <a href="https://www.suara.com/health/2022/10/27/172738/kasus-stunting-masih-tinggi-kemenkes-khawatirkan-dampaknya-untuk-daya-saing-bangsa-di-masa-depan"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                Kasus Stunting Masih Tinggi, Kemenkes Khawatirkan Dampaknya untuk Daya Saing
                                                Bangsa di Masa Depan</h5>
                                        </a>
                                        <p class="card-text">Stunting masih menjadi masalah bagi kesehatan gizi masyarakat.
                                            Angka stunting yang masih cukup banyak ini memengaruhi kualitas individu serta
                                            daya saing bangsa.</p>
                                        <h7 class="card-title text-muted">27 Oktober 2022</h7>
                                    </div>

                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://media.suara.com/pictures/653x366/2021/10/07/53111-ilustrasi-stunting-tinggi-badan-anak-tumbuh-kembang-anak.jpg"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">jatim.suara.com</h7>
                                        <a href="https://jatim.suara.com/read/2022/10/18/110500/melawan-stunting-dengan-sayur-lodeh-dan-tempe"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                Melawan Stunting dengan Sayur Lodeh dan Tempe
                                            </h5>
                                        </a>
                                        <p class="card-text">Makanan tradisional Indonesia dianggap kurang praktis dan
                                            ribet. Lantaran itu, masyarakat modern sekarang lebih memilih makanan-makanan
                                            cepat saji...
                                        </p>
                                        <h7 class="card-title text-muted">18 Oktober 2022</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://media.suara.com/pictures/653x366/2022/02/01/85833-ilustrasi-tempe-pexels.webp"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">mediacenter.palangkaraya.go.id</h7>
                                        <a href="https://mediacenter.palangkaraya.go.id/pengetahuan-orangtua-penting-cegah-stunting/"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">Pengetahuan Orangtua Penting Cegah Stunting
                                            </h5>
                                        </a>
                                        <p class="card-text">Persoalan stunting atau gagal tumbuh yang membuat anak
                                            mengalami kekerdilan telah menjadi lingkaran permasalahan. Pemerintah melalui
                                            berbagai program terus melakukan implementasinya hingga level akar rumput demi
                                            dapat mencegah stunting...</p>
                                        <h7 class="card-title text-muted">12 Agustus 2022</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://mediacenter.palangkaraya.go.id/wp-content/uploads/sites/24/2022/08/IMG-20220812-WA0021-605x330.jpg"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-evenly py-2" id="card-container">
                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">purwodadi.magetan.go.id</h7>
                                        <a href="https://purwodadi.magetan.go.id/portal/berita?id=840" target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                PROGRAM PEMBERIAN MAKANAN TAMBAHAN UNTUK BALITA KURANG GIZI (STUNTING)</h5>
                                        </a>
                                        <p class="card-text">Stunting adalah masalah kurang gizi kronis akibat kurangnya
                                            asupan gizi dalam waktu yang cukup lama sehingga mengakibatkan gangguan
                                            pertumbuhan pada anak...
                                        </p>
                                        <h7 class="card-title text-muted">26 April 2020</h7>
                                    </div>

                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://purwodadi.magetan.go.id/media/img/berita/berita_8405e94be40c0f114.96486796.png"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">www.setneg.go.id</h7>
                                        <a href="https://www.setneg.go.id/baca/index/presiden_targetkan_angka_stunting_di_indonesia_turun_hingga_14_persen_pada_2024"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                Presiden Targetkan Angka Stunting di Indonesia Turun hingga 14 Persen pada
                                                2024
                                            </h5>
                                        </a>
                                        <p class="card-text">Presiden Joko Widodo menegaskan bahwa target penurunan angka
                                            gagal tumbuh atau stunting sebesar 14 persen harus dapat dicapai pada tahun 2024
                                            mendatang...
                                        </p>
                                        <h7 class="card-title text-muted">25 Januari 2023</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://cdn.setneg.go.id/_multimedia/photo/20230126/1739WhatsApp_Image_2023-01-25_at_14.47.01__1_.jpeg"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">purwokerto.suara.com</h7>
                                        <a href="https://purwokerto.suara.com/read/2022/08/05/193638/wah-kopmas-temukan-data-gizi-buruk-dan-stunting-tidak-sesuai-fakta-lapangan"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">Wah, KOPMAS Temukan Data Gizi Buruk dan
                                                Stunting tidak Sesuai Fakta Lapangan</h5>
                                        </a>
                                        <p class="card-text">Pemerintah menargetkan angka pravelensi stunting sebesar 14
                                            persen pada tahun 2024. Selain melalui kebijakan pemerintah, penurunan
                                            prevalensi stunting dan gizi buruk membutuhkan peran aktif masyarakat...</p>
                                        <h7 class="card-title text-muted">05 Agustus 2022</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="http://ners.unair.ac.id/site/images/Lihat/mengenal_stunting.png"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-evenly py-2" id="card-container">
                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">malang.suara.com</h7>
                                        <a href="https://malang.suara.com/read/2022/07/26/082500/hati-hati-bayi-prematur-berpotensi-sumbang-kasus-stunting-terbesar"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                Hati-hati, Bayi Prematur Berpotensi Sumbang Kasus Stunting Terbesar</h5>
                                        </a>
                                        <p class="card-text">Kasus stunting masih menjadi perhatian dunia kesehatan,
                                            termasuk di Indonesia. Stunting merupakan kondisi gagal tumbuh pada anak balita
                                            (bayi di bawah 5 tahun) akibat dari kekurangan gizi kronis...</p>
                                        <h7 class="card-title text-muted">26 Januari 2022</h7>
                                    </div>

                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://media.suara.com/pictures/653x366/2022/07/13/80430-ilustrasi-bayi-unsplashcomkelly-sikkema.webp"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">www.inilah.com</h7>
                                        <a href="https://www.inilah.com/stunting-dan-obesitas-jadi-masalah-kesehatan-yang-belum-usai"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                Stunting dan Obesitas jadi Masalah Kesehatan yang Belum Usai
                                            </h5>
                                        </a>
                                        <p class="card-text">Stunting dan obesitas, dua hal yang masih menjadi masalah
                                            kesehatan yang belum terselesaikan di Indonesia maupun dunia.Berdasarkan laporan
                                            nutrisi global 2021, Direktur Gizi Masyarakat...
                                        </p>
                                        <h7 class="card-title text-muted">18 Januari 2022</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://c.inilah.com/2022/01/0118_042848_3db5_inilah.com_-e1642498161137.jpg"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">surakarta.suara.com</h7>
                                        <a href="https://surakarta.suara.com/read/2022/07/10/124500/awas-masalah-kesehatan-ibu-hamil-bisa-menyebabkan-stunting-pada-anak"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">Awas! Masalah Kesehatan Ibu Hamil Bisa
                                                Menyebabkan Stunting pada Anak</h5>
                                        </a>
                                        <p class="card-text">Dokter Spesialis Obstetri dan Ginekologi FKUI-RSCM Prof. Dr.
                                            dr. Dwiana Ocviyanti, SpOG(K), MPH memaparkan ada beberapa masalah kesehatan ibu
                                            hamil yang perlu diwaspadai karena dapat menyebabkan stunting atau gagal tumbuh
                                            pada anak...</p>
                                        <h7 class="card-title text-muted">10 Juli 2022</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://media.suara.com/pictures/653x366/2022/05/23/61860-ilustrasi-ibu-hamil-pixabaycomfezailc.webp"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-evenly py-2" id="card-container">
                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">www.suara.com</h7>
                                        <a href="https://www.suara.com/bisnis/2022/06/14/130239/turunkan-angka-stunting-kemenkeu-gelontorkan-rp-448-triliun-di-2022"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                Turunkan Angka Stunting, Kemenkeu Gelontorkan Rp 44,8 Triliun Di 2022</h5>
                                        </a>
                                        <p class="card-text">Wakil Menteri Keuangan (Wamenkeu) Suahasil Nazara
                                            mengungkapkan, bahwa pemerintah telah mengalokasikan anggaran di tahun 2022
                                            untuk mendukung penurunan stunting sebesar Rp 44,8 triliun...</p>
                                        <h7 class="card-title text-muted">14 Juni 2022</h7>
                                    </div>

                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://media.suara.com/pictures/653x366/2020/01/30/52114-wakil-menteri-keuangan-suahasil-nazara.jpg"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">news.schoolmedia.id</h7>
                                        <a href="https://news.schoolmedia.id/artikel/Kejar-Target-14-Penurunan-Stunting-Dalam-Dua-Tahun-Harus-Turun-38-713"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                Kejar Target 14 % Penurunan Stunting, Dalam Dua Tahun Harus Turun 3,8%
                                            </h5>
                                        </a>
                                        <p class="card-text">Kementerian Kesehatan mengumumkan hasil Survei Status Gizi
                                            Indonesia (SSGI) dimana prevalensi stunting di Indonesia turun dari 24,4% di
                                            tahun 2021 menjadi 21,6% di 2022...
                                        </p>
                                        <h7 class="card-title text-muted">30 April 2023</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://news.schoolmedia.id/uploads/konten/e037ff5d4a6bf8ab1ce3ccda47751d0f7d17f408/1444972496.jpg"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">www.ibudanbalita.com</h7>
                                        <a href="https://www.ibudanbalita.com/artikel/apakah-itu-stunting"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">Serba-Serbi Stunting pada Anak yang Perlu
                                                Ibu Tahu</h5>
                                        </a>
                                        <p class="card-text">Angka stunting pada anak adalah salah satu indikator global
                                            tentang baik atau tidaknya perkembangan anak di dalam suatu negara. Kasus
                                            stunting yang terjadi di suatu negara juga dapat merefleksikan...</p>
                                        <h7 class="card-title text-muted">14 Juni 2023</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://www.ibudanbalita.com/uploads/posts/Z0DCxb9QKS.jpg"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-evenly py-2" id="card-container">
                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">jateng.suara.com</h7>
                                        <a href="https://jateng.suara.com/read/2022/06/05/060000/pencegahan-stunting-butuh-tambahan-makanan-bergizi-ini-penjelasan-ahli"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                Pencegahan Stunting Butuh Tambahan Makanan Bergizi, Ini Penjelasan Ahli</h5>
                                        </a>
                                        <p class="card-text">Stunting atau kekurangan gizi pada anak masih terjadi di
                                            Indonesia. Pencegahan dengan melakukan tambahan makanan bergizi pun terus
                                            dilakukan oleh pemerintah. Guru Besar Pangan dan Gizi Institut Pertanian Bogor
                                            (IPB) Prof. Ali Khomsan...</p>
                                        <h7 class="card-title text-muted">5 Juni 2022</h7>
                                    </div>

                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://media.suara.com/pictures/653x366/2021/10/25/59106-ilustrasi-anak-makan-sayur-dan-buah.webp"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">dinkes.surakarta.go.id</h7>
                                        <a href="https://dinkes.surakarta.go.id/stunting-di-era-pandemi-covid-19/"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                STUNTING DI ERA PANDEMI COVID-19
                                            </h5>
                                        </a>
                                        <p class="card-text">Stunting (pendek) adalah kondisi dimana balita memiliki
                                            panjang atau tinggi badan yang kurang jika dibandingkan dengan umur. Stunting
                                            merupakan salah satu target Sustainable Development Goals (SDGs) yang termasuk
                                            pada tujuan pembangunan berkelanjutan ke-2...
                                        </p>
                                        <h7 class="card-title text-muted">22 Juni 2022</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://kedokteran.umm.ac.id/files/image/WhatsApp%20Image%202021-04-27%20at%2013_17_17%20(1).jpeg"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">surakarta.suara.com</h7>
                                        <a href="https://surakarta.suara.com/read/2022/02/24/184832/anak-bertubuh-pendek-tak-selalu-menderita-stunting-ini-penjelasan-ahli"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">Anak Bertubuh Pendek Tak Selalu Menderita
                                                Stunting, Ini Penjelasan Ahli</h5>
                                        </a>
                                        <p class="card-text">Mengalami stunting atau gangguan gizi bakal menghambat
                                            pertumbuhan seoarang anak. Namun demikian, tidak semua anak bertubuh pendek
                                            mengalami stunting.Dokter spesialis anak konsultan endokrinologi anak Prof. dr.
                                            Madarina Julia,
                                            Sp.A(K), MPH., Ph.D. mengatakan bahwa...</p>
                                        <h7 class="card-title text-muted">24 Februari 2022</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://media.suara.com/pictures/653x366/2022/02/15/41991-ilustrasi-stunting-pada-anak-istimewa.webp"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-evenly py-2" id="card-container">
                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">jateng.suara.com</h7>
                                        <a href="https://jateng.suara.com/read/2022/01/26/080000/susu-sapi-bisa-mencegah-stunting-pada-anak-ini-penjelasan-dari-ahli-gizi"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                Susu Sapi Bisa Mencegah Stunting pada Anak, Ini Penjelasan dari Ahli Gizi
                                            </h5>
                                        </a>
                                        <p class="card-text">Pencegahan kasus stunting wajib dilakukan oleh masyarakat.
                                            Perbaikan gizi ibu hamil hingga anak-anak bisa menjadi langkah awal menekan
                                            kasus tersebut. Guru besar Bidang Gizi Kesehatan Masyarakat sekaligus wakil
                                            ketua Pusat Kajian
                                            Gizi dan...</p>
                                        <h7 class="card-title text-muted">26 Januari 2022</h7>
                                    </div>

                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://media.suara.com/pictures/653x366/2020/06/29/40185-anak-alergi-susu-sapi.jpg"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">www.tanotofoundation.org</h7>
                                        <a href="https://www.tanotofoundation.org/id/news/stunting-ancaman-bagi-masa-depan-anak-anak-indonesia/"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                Stunting, Ancaman bagi Masa Depan Anak-anak Indonesia
                                            </h5>
                                        </a>
                                        <p class="card-text">Menurut Survei Status Gizi Balita Indonesia 2019 yang
                                            diselenggarakan oleh Kementerian Kesehatan RI, satu dari empat anak Indonesia di
                                            bawah usia lima tahun menderita stunting. Jika dibandingkan, jumlah tersebut
                                            setara dengan total penduduk Jakarta...
                                        </p>
                                        <h7 class="card-title text-muted">29 Juni 2020</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://www.tanotofoundation.org/wp-content/uploads/2020/06/Apa-itu-Stunting.jpg"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">www.suara.com</h7>
                                        <a href="https://www.suara.com/health/2022/01/21/172312/agar-target-cegah-stunting-tercapai-nutrisionis-sarankan-bansos-jangan-berisi-beras-dan-minyak"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">Agar Target Cegah Stunting Tercapai,
                                                Nutrisionis Sarankan Bansos Jangan Berisi Beras dan Minyak</h5>
                                        </a>
                                        <p class="card-text">Ketua Asosiasi Nutrisionis Indonesia DPP Persagi Dr. Andrianto
                                            SH. M.Kes., mengatakan, protein hewani menjadi zat gizi terpenting untuk
                                            mencegah stunting. Ia menyarankan agar ibu hamil harus cukup konsumsi protein
                                            hewani, begitu pula anaknya setelah lahir...</p>
                                        <h7 class="card-title text-muted">21 Januari 2022</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://media.suara.com/pictures/653x366/2018/05/22/60594-anak-makan-ikan.jpg"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-evenly py-2" id="card-container">
                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">www.suara.com</h7>
                                        <a href="https://www.suara.com/pressrelease/2022/01/28/082009/pada-2024-pemerintah-dan-stakeholder-harus-capai-target-penurunan-stunting-hingga-14"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                Pada 2024, Pemerintah dan Stakeholder harus Capai Target Penurunan Stunting
                                                hingga 14%</h5>
                                        </a>
                                        <p class="card-text">Kasus stunting menjadi salah satu program prioritas penanganan
                                            yang difokuskan pemerintah. Data 2019 menunjukkan, jumlah kasus stunting di
                                            Indonesia mencapai 27,67 persen dan ditargetkan turun 14 persen pada 2024...</p>
                                        <h7 class="card-title text-muted">28 Januari 2022</h7>
                                    </div>

                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://media.suara.com/pictures/653x366/2022/01/28/77301-danone-indonesia.webp"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">berita.depok.go.id</h7>
                                        <a href="https://berita.depok.go.id/wujudkan-zero-stunting-ibh-ungkap-beragam-program-andalan-kota-depok"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                Wujudkan Zero Stunting, IBH Ungkap Beragam Program Andalan Kota Depok
                                            </h5>
                                        </a>
                                        <p class="card-text">Wakil Wali Kota Depok, Imam Budi Hartono (IBH) mengatakan,
                                            dari 3.693 balita stunting di Kota Depok yang tercatat di tahun 2021, 30 persen
                                            berasal dari masyarakat miskin dan 70 persen berasal dari kalangan mampu.
                                            Menurutnya, hal ini dapat terjadi karena banyak faktor...
                                        </p>
                                        <h7 class="card-title text-muted">24 Juni 2022</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://berita.depok.go.id/storage/posts/kNSiBsgZgdVMoW2uztAKBGMrTVa7t7VsALjs7Pqj.webp"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">www.klikdokter.com</h7>
                                        <a href="https://www.klikdokter.com/ibu-anak/kesehatan-balita/pemahaman-keliru-jadi-akar-penyebab-stunting"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">Pemahaman Keliru Jadi Akar Penyebab
                                                Stunting</h5>
                                        </a>
                                        <p class="card-text">Stunting merupakan salah satu masalah kesehatan yang
                                            membayangi anak-anak di Indonesia. Prevalensinya, berdasarkan statistik, masih
                                            cukup tinggi. Rata-rata satu dari tiga anak mengalami masalah tumbuh kembang
                                            ini. Sayangnya...</p>
                                        <h7 class="card-title text-muted">16 Juli 2021</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://img-cdn.medkomtek.com/g1SHo4uGtnMdgbCBK4gkDRgRpZM=/730x411/smart/filters:quality(75):strip_icc():format(webp)/article/grp7vXlC6ZS4Pb3GNBqmI/original/087775600_1626320851-Stunting.jpg"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-evenly py-2" id="card-container">
                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">www.suara.com</h7>
                                        <a href="https://www.suara.com/news/2022/01/12/234500/turunkan-angka-stunting-di-indonesia-pemerintah-rogoh-kocek-hingga-rp-50-triliun"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                Turunkan Angka Stunting di Indonesia, Pemerintah Rogoh Kocek Hingga Rp 50
                                                Triliun</h5>
                                        </a>
                                        <p class="card-text">Menurunkan angka stunting alias anak lahir kerdil dan pendek
                                            menjadi salah satu program kerja Presiden Joko Widodo (Jokowi). Bahkan, Jokowi
                                            dikatakan akan menggelontorkan anggaran sekitar Rp 50 triliun
                                            untuk program percepatan penurunan angka stunting di Indonesia...</p>
                                        <h7 class="card-title text-muted">12 Januari 2022</h7>
                                    </div>

                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://media.suara.com/pictures/653x366/2021/12/14/95020-vakinasi-covid-19-untuk-anak-di-jakarta.webp"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">www.bappenas.go.id</h7>
                                        <a href="https://www.bappenas.go.id/index.php/berita/cegah-stunting-di-1000-hari-pertama-kehidupan-investasi-bersama-untuk-masa-depan-anak-bangsa"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">
                                                Cegah Stunting di 1000 Hari Pertama Kehidupan, Investasi Bersama untuk Masa
                                                Depan Anak Bangsa
                                            </h5>
                                        </a>
                                        <p class="card-text">Untuk membangun pemahaman tentang strategi pemerintah dalam
                                            menangani stunting serta peran lintas agama dalam mendukung penanganan stunting
                                            di Indonesia, Kementerian PPN/Bappenas menyelenggarakan diskusi media
                                            bertajuk...
                                        </p>
                                        <h7 class="card-title text-muted">28 Mei 2018</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://www.bappenas.go.id/berita/cegah-stunting-di-1000-hari-pertama-kehidupan-investas.jpg"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h7 class="card-title">ikm.unnes.ac.id</h7>
                                        <a href="https://ikm.unnes.ac.id/kasus-stunting-masih-menjadi-tantangan-kerja-sama-semua-pihak-sangat-diperlukan/"
                                            target="_blank">
                                            <h5 class="card-subtitle mb-2 pt-3">Kasus Stunting Masih Menjadi Tantangan,
                                                Kerja Sama Semua Pihak Sangat Diperlukan</h5>
                                        </a>
                                        <p class="card-text">Stunting merupakan kondisi gagal tumbuh pada anak balita
                                            akibat kekurangan gizi kronis sehingga anak lebih pendek untuk usianya.
                                            Indonesia menjadi salah satu negara dengan masalah stunting. Prevalensi stunting
                                            di Indonesia berada pada posisi ke-115 dari 151 negara di dunia...</p>
                                        <h7 class="card-title text-muted">4 Juli 2021</h7>
                                    </div>
                                </div>
                                <div class="col-md-4 py-5" style="max-width: 200px;">
                                    <img src="https://ikm.unnes.ac.id/wp-content/uploads/2021/07/Screenshot-492-1021x580.png"
                                        class="img-fluid rounded" alt=" ">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <script>
                function shuffleCards() {
                    var cardContainer = document.getElementById('card-container');
                    var cards = Array.from(cardContainer.getElementsByClassName('card'));

                    // Fisher-Yates shuffle algorithm
                    for (var i = cards.length - 1; i > 0; i--) {
                        var j = Math.floor(Math.random() * (i + 1));
                        cardContainer.appendChild(cards[j]);
                    }
                }

                // Panggil fungsi shuffleCards() untuk mengacak posisi kartu saat halaman dimuat
                window.addEventListener('DOMContentLoaded', shuffleCards);
            </script>

    </body>

    <style>
        .navbar {
            background-color: #EFE2DA;
        }

        h1 {
            margin-top: 10px;
            font-family: 'Telex', sans-serif;
            letter-spacing: 5px;
            font-size: 60px;
            font-weight: 500;
        }

        .search-container {
            float: right;
        }

        .search-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .search-container button:hover {
            background: #ccc;
        }

        body {
            background-color: #FFF1C7;
        }

        .card {
            margin-top: 100px;
        }
    </style>
@endsection
