@extends('components.header')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="">
        <title>Document</title>
    </head>

    <body>



        <div class="header" style="display: flex; flex-direction: row;align-items: center; margin-left: 10px;">
            <p style="font-size: 96px; font-weight: 700;">Infanurse</p>

            <div class="rent">
                <p style="align-items: center; font-size: 24px;margin-left: 30px;">Rent History</p>
            </div>
        </div>


        <div class="card" style="background-color: #F0CDC4">
            <div class="card-baris-1">
                <div class="bentuk-card">
                    <img src="images/infanurse1.jpg" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Ajeng Riyustina</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Sidoarjo</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>3 Years</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
                        <img src="images/icon tambah.png" alt="" style="width: 23px;height: 23px;"
                            onclick="showPopup()">
                        <div id="popup" class="popup">
                            <div class="popup-content" style="width: 661px; height:940px" >
                                <span class="close" onclick="closePopup()">&times;</span>
                                <div class="profile">
                                    <div class="detail-profil" style="align-items: center">
                                        <img src="images/kotakprofil.png" alt=""
                                            style="width: 600px;margin-bottom: -200px;">
                                        <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                        <img src="images/infanurse1.jpg" alt="">
                                        <p
                                            style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                            Ajeng Riyustina</p>
                                        <div class="iconbintang">
                                            <img src="images/icon_bintang_berisi.png" alt="">
                                            <img src="images/icon_bintang_berisi.png" alt="">
                                            <img src="images/icon_bintang_berisi.png" alt="">
                                            <img src="images/icon_bintang_berisi.png" alt="">
                                            <img src="images/icon_bintang_kosong.png" alt="">

                                        </div>
                                        <div class="lokasi-sid">
                                            <div class="lokasi">
                                                <img src="images/icon_lokasi.png" alt=""
                                                    style="width: 20px; height: 21px;">
                                                <p style="font-size: 20px;">Sidoarjo</p>
                                            </div>
                                            <div class="lokasi">
                                                <img src="images/bintang_kosong_icon.png" alt=""
                                                    style="width: 20px; height: 21px;">
                                                <p style="font-size: 20px;">New Born</p>
                                            </div>

                                        </div>

                                        <div class="information">
                                            <div class="information-1">
                                                <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                                <p>Weight : 45 kg</p>
                                                <p>Height : 155 cm</p>
                                                <p>Status : Single</p>
                                                <p>Birth : Malang, July 15th 1995</p>
                                            </div>

                                            <div class="information-1">
                                                <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                                <p>1. Employed Full Time at Kutablang Clinic for 6 months</p>
                                                <p>2. Employed Full Time at Bhayangkari Hospital for 4 months</p>
                                                <p>3. Employed Full Time at Waru Hospital for 2 months</p>

                                            </div>

                                            <div class="button" class="close" onclick="closePopup()">
                                                <p
                                                    style="font-size: 25px;
                                                font-weight: bolder; background-color: #FF9F84; color: white;">
                                                    OK</p>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="iconbintang">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_kosong.png" alt="">

                    </div>



                </div>
                <div class="bentuk-card">
                    <img src="images/infanurse2.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Ajeng Riyustina</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Sidoarjo</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>3 Years</p>
                            </div>
                        </div>
                        <img src="images/icon tambah.png" alt="" style="width: 23px;height: 23px;">

                    </div>
                    <div class="iconbintang">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_kosong.png" alt="">

                    </div>



                </div>
                <div class="bentuk-card">
                    <img src="images/infanurse3.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Ajeng Riyustina</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Sidoarjo</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>3 Years</p>
                            </div>
                        </div>
                        <img src="images/icon tambah.png" alt="" style="width: 23px;height: 23px;">

                    </div>
                    <div class="iconbintang">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_kosong.png" alt="">

                    </div>



                </div>
                <div class="bentuk-card">
                    <img src="images/infanurse4.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Ajeng Riyustina</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Sidoarjo</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>3 Years</p>
                            </div>
                        </div>
                        <img src="images/icon tambah.png" alt="" style="width: 23px;height: 23px;">

                    </div>
                    <div class="iconbintang">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_kosong.png" alt="">

                    </div>



                </div>

            </div>

            <div class="card-baris-2">
                <div class="bentuk-card">
                    <img src="images/infanurse5.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Ajeng Riyustina</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Sidoarjo</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>3 Years</p>
                            </div>
                        </div>
                        <img src="images/icon tambah.png" alt="" style="width: 23px;height: 23px;">

                    </div>
                    <div class="iconbintang">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_kosong.png" alt="">

                    </div>



                </div>
                <div class="bentuk-card">
                    <img src="images/infanurse6.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Ajeng Riyustina</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Sidoarjo</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>3 Years</p>
                            </div>
                        </div>
                        <img src="images/icon tambah.png" alt="" style="width: 23px;height: 23px;">

                    </div>
                    <div class="iconbintang">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_kosong.png" alt="">

                    </div>



                </div>
                <div class="bentuk-card">
                    <img src="images/infanurse7.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Ajeng Riyustina</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Sidoarjo</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>3 Years</p>
                            </div>
                        </div>
                        <img src="images/icon tambah.png" alt="" style="width: 23px;height: 23px;">

                    </div>
                    <div class="iconbintang">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_kosong.png" alt="">

                    </div>


                </div>
                <div class="bentuk-card">
                    <img src="images/infanurse8.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Ajeng Riyustina</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Sidoarjo</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>3 Years</p>
                            </div>
                        </div>
                        <img src="images/icon tambah.png" alt="" style="width: 23px;height: 23px;">

                    </div>
                    <div class="iconbintang">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_kosong.png" alt="">

                    </div>



                </div>

            </div>
        </div>

        <script>
            function showPopup() {
                var popup = document.getElementById("popup");
                popup.style.display = "block";
            }

            function closePopup() {
                var popup = document.getElementById("popup");
                popup.style.display = "none";
            }
        </script>

    </body>

    </html>

    <style>
        html {
            background-color: #F0CDC4;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        body {
            background-color: #F0CDC4;
            justify-content: center;
        }



        .rent {
            background-color: white;
            width: 192px;
            height: 49px;
            border-radius: 16px;
            align-items: center;
            display: flex;
            margin-left: 25px;
            margin-top: 20px;


        }

        .card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .card-baris-1 {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            margin-left: 45px;
            margin-bottom: 57px;
        }

        .card-baris-2 {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            margin-left: 45px;
        }

        .bentuk-card {
            display: flex;
            flex-direction: column;
            padding: 10px;
            align-items: center;
            background-color: white;
            border-style: solid;
            border-color: white;
            height: 374px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px #505050;
            margin-right: 47px;


        }

        .bentuk-card img {
            width: 200px;
            height: 200px;
        }

        .detail-card {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-right: 10px;

        }

        .lokasi-waktu p {
            font-weight: 800;
            color: #5A5A5A;
            font-size: 17px;


        }


        .detail-card img {
            width: 30px;
            height: 30px;
            margin-right: 5px;
        }

        .lokasi-waktu {
            display: flex;
            flex-direction: column;
            padding-bottom: 20px;
            column-gap: 10px;
            margin-top: 10px;
            margin-right: 100px;

        }

        .tambah-lokasi {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-top: -30px;
        }

        .iconbintang {
            display: flex;
            flex-direction: row;
            margin-top: -20px;
        }

        .iconbintang img {
            width: 22px;
            height: 22px;
            margin-right: 5px;
        }

        .popup {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .popup-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,

        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        * {
            justify-content: center;
        }

        .detail-profil img {
            width: 227px;
            height: 227px;

        }

        .detail-profil {
            justify-content: center;
            align-items: center;
            display: flex;
            width: 661px;
            flex-direction: column;
            margin-top: -100px;


        }

        .information {
            display: flex;
            flex-direction: column;
        }

        .information-1 {

            display: flex;
            margin-top: 20px;
            flex-direction: column;
        }

        .information-1 p {
            display: flex;
            flex-direction: column;
            font-size: 17px;
            margin-top: -10px;
        }

        .button {

            width: 165px;
            height: 47px;
            border-radius: 5px;
            margin-left: 120px;


        }

        .button p {
            align-items: center;
            padding: 10px;
            border-radius: 5px;
            display: flex;

        }

        .profile {
            display: flex;
            flex-direction: column;
            width: 600px;
            border-radius: 10px;
            height: 906px;
            background-color: white;
            justify-content: center;
            align-items: center;
        }

        .iconbintang {
            display: flex;
            flex-direction: row;
            margin-top: -20px;
        }

        .iconbintang img {
            width: 22px;
            height: 22px;
            margin-right: 5px;
        }

        .lokasi-sid {
            display: flex;
            flex-direction: row;
        }

        .lokasi {
            display: flex;
            flex-direction: row;
            align-items: center;

        }

        .lokasi img {
            margin-left: 10px;
        }
    </style>
@endsection
