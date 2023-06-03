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
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>



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
    <div class="row justify-content-evenly py-2">
        <div class="card mb-3" style="max-width: 450px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h7 class="card-title">Dr. Fadhli</h7>
                        <h5 class="card-subtitle mb-2 pt-3">Anak Bertumbuh Pendek Belum Tentu Stunting, Ini
                            Penjelasannya</h5>
                        <p class="card-text">Stunting adalah kegagalan pertumbuhan pada anak akibat kekurangan gizi atau
                            infeksi
                            berulang.</p>
                        <h7 class="card-title text-muted">10 Feb 10 min</h7>
                    </div>
                </div>
                <div class="col-md-4 py-5" style="max-width: 200px;">
                    <img src="images\stunt.png" class="img-fluid rounded-start" alt=" ">
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 450px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h7 class="card-title">Dr. Rizal</h7>
                        <h5 class="card-subtitle mb-2 pt-3">4 Nutrisi Penting untuk Mencegah Terjadinya Stunting</h5>
                        <p class="card-text">Banyak cara yang bisa ibu lakukan untuk menjaga kesehatan anak sesuai
                            dengan usianya.</p>
                        <h7 class="card-title text-muted">20 Mei 5 min</h7>
                    </div>
                </div>
                <div class="col-md-4 py-5" style="max-width: 200px;">
                    <img src="images\nutrisi.png" class="img-fluid rounded-start" alt=" ">
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 450px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h7 class="card-title">Dr. Fadhli</h7>
                        <h5 class="card-subtitle mb-2 pt-3">Anak Bertumbuh Pendek Belum Tentu Stunting, Ini
                            Penjelasannya</h5>
                        <p class="card-text">Stunting adalah kegagalan pertumbuhan pada anak akibat kekurangan gizi atau
                            infeksi
                            berulang.</p>
                        <h7 class="card-title text-muted">10 Feb 10 min</h7>
                    </div>
                </div>
                <div class="col-md-4 py-5" style="max-width: 200px;">
                    <img src="images\stunt.png" class="img-fluid rounded-start" alt=" ">
                </div>
            </div>
        </div>

        <div class="card mb-3" style="max-width: 450px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h7 class="card-title">Dr. Rizal</h7>
                        <h5 class="card-subtitle mb-2 pt-3">4 Nutrisi Penting untuk Mencegah Terjadinya Stunting</h5>
                        <p class="card-text">Banyak cara yang bisa ibu lakukan untuk menjaga kesehatan anak sesuai
                            dengan usianya.</p>
                        <h7 class="card-title text-muted">20 Mei 5 min</h7>
                    </div>
                </div>
                <div class="col-md-4 py-5" style="max-width: 200px;">
                    <img src="images\nutrisi.png" class="img-fluid rounded-start" alt=" ">
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 450px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h7 class="card-title">Dr. Fadhli</h7>
                        <h5 class="card-subtitle mb-2 pt-3">Anak Bertumbuh Pendek Belum Tentu Stunting, Ini
                            Penjelasannya</h5>
                        <p class="card-text">Stunting adalah kegagalan pertumbuhan pada anak akibat kekurangan gizi atau
                            infeksi
                            berulang.</p>
                        <h7 class="card-title text-muted">10 Feb 10 min</h7>
                    </div>
                </div>
                <div class="col-md-4 py-5" style="max-width: 200px;">
                    <img src="images\stunt.png" class="img-fluid rounded-start" alt=" ">
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 450px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h7 class="card-title">Dr. Rizal</h7>
                        <h5 class="card-subtitle mb-2 pt-3">4 Nutrisi Penting untuk Mencegah Terjadinya Stunting</h5>
                        <p class="card-text">Banyak cara yang bisa ibu lakukan untuk menjaga kesehatan anak sesuai
                            dengan usianya.</p>
                        <h7 class="card-title text-muted">20 Mei 5 min</h7>
                    </div>
                </div>
                <div class="col-md-4 py-5" style="max-width: 200px;">
                    <img src="images\nutrisi.png" class="img-fluid rounded-start" alt=" ">
                </div>
            </div>
        </div>
    </div>
</body>

<style>
.navbar{
    background-color: #EFE2DA;
}
h1{
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
body{
    background-color: #FFF1C7;
}
.card{
    margin-top: 100px;
}
    </style>
@endsection
