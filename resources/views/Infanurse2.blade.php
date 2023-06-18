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
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse1.jpg" alt="">
                                    <p style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
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
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse2.jpg" alt="">
                                    <p style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        Asep Kasep</p>
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
                                            <p style="font-size: 20px;">Cimahi</p>
                                        </div>
                                        <div class="lokasi">
                                            <img src="images/bintang_kosong_icon.png" alt=""
                                                style="width: 20px; height: 21px;">
                                            <p style="font-size: 20px;">Infant</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 66 kg</p>
                                            <p>Height : 182 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Yogyakarta, June 10th 1996</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at Ellen Medika Clinic for 8 months</p>
                                            <p>2. Employed Full Time at Dustira Hospital for 2 years</p>
                                            <p>3. Employed Full Time at Melinda Hospital for 8 months</p>

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

                    <img src="images/infanurse2.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Asep Kasep</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Cimahi</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>2 Years</p>
                            </div>
                        </div>


                        {{-- ini pop up --}}
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
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse2.jpg" alt="">
                                    <p style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        Amalia Farida</p>
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
                                            <p style="font-size: 20px;">Keputih</p>
                                        </div>
                                        <div class="lokasi">
                                            <img src="images/bintang_kosong_icon.png" alt=""
                                                style="width: 20px; height: 21px;">
                                            <p style="font-size: 20px;">Toddler</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 50 kg</p>
                                            <p>Height : 165 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Bandung, February 20th 2000</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at Ditira Medika Clinic for 5 months</p>
                                            <p>2. Employed Full Time at Mitra Keluarga Hospital for 6 months</p>
                                            <p>3. Employed Full Time at Nala Husada Hospital for 4 months</p>

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

                    <img src="images/infanurse3.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Amalia Farida</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Keputih</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>4 Years</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
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
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse2.jpg" alt="">
                                    <p style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        Dodit W.</p>
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
                                            <p style="font-size: 20px;">Rungkut</p>
                                        </div>
                                        <div class="lokasi">
                                            <img src="images/bintang_kosong_icon.png" alt=""
                                                style="width: 20px; height: 21px;">
                                            <p style="font-size: 20px;">Child</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 78 kg</p>
                                            <p>Height : 184 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Blitar, November 6th 1981</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at Pusura Rungkut Clinic for 3 years</p>
                                            <p>2. Employed Full Time at Siloam Hospital for 5 years</p>
                                            <p>3. Employed Full Time at Royal Hospital Surabaya for 8 months</p>

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

                    <img src="images/infanurse4.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Dodit W.</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Rungkut</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>5 Months</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
                        <img src="images/icon tambah.png" alt="" style="width: 23px;height: 23px;">

                    </div>
                    <div class="iconbintang">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">

                    </div>



                </div>

            </div>
            <div class="card-baris-2">
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse2.jpg" alt="">
                                    <p style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        Subin Sutisna</p>
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
                                            <p style="font-size: 20px;">Gebang</p>
                                        </div>
                                        <div class="lokasi">
                                            <img src="images/bintang_kosong_icon.png" alt=""
                                                style="width: 20px; height: 21px;">
                                            <p style="font-size: 20px;">Newborn</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 78 kg</p>
                                            <p>Height : 184 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Balikpapan, December 5th 2000</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at Gebang Medika Clinic for 5 months</p>
                                            <p>2. Employed Full Time at Husada Utama Hospital for 4 months</p>
                                            <p>3. Employed Full Time at Hermina Hospital Surabaya for 9 months</p>

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

                    <img src="images/infanurse5.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Subin Sutisna</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Gebang</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>3 Years</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
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
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse2.jpg" alt="">
                                    <p
                                        style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        Udin Junaedi</p>
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
                                            <p style="font-size: 20px;">Keputih</p>
                                        </div>
                                        <div class="lokasi">
                                            <img src="images/bintang_kosong_icon.png" alt=""
                                                style="width: 20px; height: 21px;">
                                            <p style="font-size: 20px;">Infant</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 75 kg</p>
                                            <p>Height : 181 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Surabaya, March 26th 1990</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at Medical Center ITS for 8 month</p>
                                            <p>2. Employed Full Time at Haji Hospital Surabaya for 7 month</p>
                                            <p>3. Employed Full Time at Bhayangkara Hospital Surabaya for 6 month</p>

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

                    <img src="images/infanurse6.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Udin Junaedi</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Keputih</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>7 Years</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
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
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse2.jpg" alt="">
                                    <p
                                        style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        Gigi Hadid</p>
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
                                            <p style="font-size: 20px;">Gubeng</p>
                                        </div>
                                        <div class="lokasi">
                                            <img src="images/bintang_kosong_icon.png" alt=""
                                                style="width: 20px; height: 21px;">
                                            <p style="font-size: 20px;">Toddler</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 58 kg</p>
                                            <p>Height : 178 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Jakarta, April 23th 1995</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at Eterna Medica Clinic for 5 months</p>
                                            <p>2. Employed Full Time at Dr. Soetomo Hospital for 9 months</p>
                                            <p>3. Employed Full Time at Melinda 2 Hospital for 2 years</p>

                                        </div>

                                        <div class="button" class="close" onclick="closePopup()">
                                            <p>
                                                style="font-size: 25px;
                                                        font-weight: bolder; background-color: #FF9F84; color: white;">
                                                OK</p>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <img src="images/infanurse7.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Gigi Hadid</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Gubeng</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>11 Months</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
                        <img src="images/icon tambah.png" alt="" style="width: 23px;height: 23px;">

                    </div>
                    <div class="iconbintang">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">

                    </div>


                </div>
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse2.jpg" alt="">
                                    <p
                                        style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        Zendaya</p>
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
                                            <p style="font-size: 20px;">Child</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 59 kg</p>
                                            <p>Height : 178 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Bogor, September 1st 1996</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at Medis Gelora Clinic for 8 months</p>
                                            <p>2. Employed Full Time at Sidoarjo Public Hospital for 7 months</p>
                                            <p>3. Employed Full Time at Citra Medika Hospital for 9 months </p>

                                        </div>

                                        <div class="button" class="close" onclick="closePopup()">
                                            <p>
                                                style="font-size: 25px;
                                                        font-weight: bolder; background-color: #FF9F84; color: white;">
                                                OK</p>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <img src="images/infanurse8.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Zendaya</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Sidoarjo</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>5 Years</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
                        <img src="images/icon tambah.png" alt="" style="width: 23px;height: 23px;">

                    </div>
                    <div class="iconbintang">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">

                    </div>



                </div>

            </div>
            <div class="card-baris-3">
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img class="" src="{{ asset('/images\nurulayu.png ') }}">
                                    <p style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        Nu Ayu</p>
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
                                            <p style="font-size: 20px;">Banten</p>
                                        </div>
                                        <div class="lokasi">
                                            <img src="images/bintang_kosong_icon.png" alt=""
                                                style="width: 20px; height: 21px;">
                                            <p style="font-size: 20px;">Infant</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 51 kg</p>
                                            <p>Height : 173 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Tasikmalaya, August 12th 1992</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at Verena Medika Clinic for 7 months</p>
                                            <p>2. Employed Full Time at Bhayangkari Hospital Banten for 9 months</p>
                                            <p>3. Employed Full Time at Obini Medika Hospital for 10 months</p>

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

                    <img src="images/nurulayu.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Nurul Ayu</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Banten</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>7 Years</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
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
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse2.jpg" alt="">
                                    <p
                                        style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        Farhan Alaydrus</p>
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
                                            <p style="font-size: 20px;">Pekanbaru</p>
                                        </div>
                                        <div class="lokasi">
                                            <img src="images/bintang_kosong_icon.png" alt=""
                                                style="width: 20px; height: 21px;">
                                            <p style="font-size: 20px;">Toddler</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 73 kg</p>
                                            <p>Height : 175 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Surabaya, April 27th 1991</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at Madani Hospital for 5 months</p>
                                            <p>2. Employed Full Time at Petala Bumi for 4 months</p>
                                            <p>3. Employed Full Time at On Clinic Pekanbaru for 7 years</p>

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

                    <img src="images/infanurse6.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Farhan Alaydrus</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Pekanbaru</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>Child</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
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
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse2.jpg" alt="">
                                    <p
                                        style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        Dinda Puspita</p>
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
                                            <p style="font-size: 20px;">Balikpapan</p>
                                        </div>
                                        <div class="lokasi">
                                            <img src="images/bintang_kosong_icon.png" alt=""
                                                style="width: 20px; height: 21px;">
                                            <p style="font-size: 20px;">Child</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 57 kg</p>
                                            <p>Height : 165 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Jambi, Maret 28th 1997</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at  Ellen Medika Clinic for 8 months</p>
                                            <p>2. Employed Full Time at Siloam Hospital for 10 months</p>
                                            <p>3. Employed Full Time at Hermina Hospital for 4 years</p>

                                        </div>

                                        <div class="button" class="close" onclick="closePopup()">
                                            <p>
                                                style="font-size: 25px;
                                                        font-weight: bolder; background-color: #FF9F84; color: white;">
                                                OK</p>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <img src="images/infanurse7.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Dinda Puspita</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Balikpapan</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>4 Years</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
                        <img src="images/icon tambah.png" alt="" style="width: 23px;height: 23px;">

                    </div>
                    <div class="iconbintang">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">

                    </div>


                </div>
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse2.jpg" alt="">
                                    <p
                                        style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        Andini Cahya</p>
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
                                            <p style="font-size: 20px;">Medan</p>
                                        </div>
                                        <div class="lokasi">
                                            <img src="images/bintang_kosong_icon.png" alt=""
                                                style="width: 20px; height: 21px;">
                                            <p style="font-size: 20px;">Newborn</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 49 kg</p>
                                            <p>Height : 166 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Melbourne, August 17st 2000</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at Columbia Asia Hospital for 3 years</p>
                                            <p>2. Employed Full Time at Harison Clinic for 9 months</p>
                                            <p>3. Employed Full Time at National Medan Hospital for 4 months </p>

                                        </div>

                                        <div class="button" class="close" onclick="closePopup()">
                                            <p>
                                                style="font-size: 25px;
                                                        font-weight: bolder; background-color: #FF9F84; color: white;">
                                                OK</p>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <img src="images/infanurse8.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Andini Cahya</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Medan</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>3 Years</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
                        <img src="images/icon tambah.png" alt="" style="width: 23px;height: 23px;">

                    </div>
                    <div class="iconbintang">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">

                    </div>



                </div>

            </div>
            <div class="card-baris-4">
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse2.jpg" alt="">
                                    <p style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        I Komang Adiwiyata</p>
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
                                            <p style="font-size: 20px;">Bali</p>
                                        </div>
                                        <div class="lokasi">
                                            <img src="images/bintang_kosong_icon.png" alt=""
                                                style="width: 20px; height: 21px;">
                                            <p style="font-size: 20px;">Infant</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 89 kg</p>
                                            <p>Height : 201 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Bali, April 4th 1997</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at Bali Health Clinic for 7 months</p>
                                            <p>2. Employed Full Time at Balimed Hospital for 5 months</p>
                                            <p>3. Employed Full Time at Prima Medika Hospital for 8 months</p>

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

                    <img src="images/infanurse5.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> I Komang Adiwiyata</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Bali</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>3 Years</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
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
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse2.jpg" alt="">
                                    <p
                                        style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        Sukijan</p>
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
                                            <p style="font-size: 20px;">Kupang</p>
                                        </div>
                                        <div class="lokasi">
                                            <img src="images/bintang_kosong_icon.png" alt=""
                                                style="width: 20px; height: 21px;">
                                            <p style="font-size: 20px;">Toddler</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 78 kg</p>
                                            <p>Height : 189 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Bekasi, January 17th 1994</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at Akuna Care Clinic for 6 month</p>
                                            <p>2. Employed Full Time at Sediana Hopital for 4 month</p>
                                            <p>3. Employed Full Time at Shandy Hopital for 11 month</p>

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

                    <img src="images/infanurse6.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Sukijan</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Kupang</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>4 Years</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
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
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse2.jpg" alt="">
                                    <p
                                        style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        Siti Aminah</p>
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
                                            <p style="font-size: 20px;">Bekasi</p>
                                        </div>
                                        <div class="lokasi">
                                            <img src="images/bintang_kosong_icon.png" alt=""
                                                style="width: 20px; height: 21px;">
                                            <p style="font-size: 20px;">Child</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 47 kg</p>
                                            <p>Height : 155 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Cimahi, December 26th 1993</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at St. Elisabeth Clinic for 3 months</p>
                                            <p>2. Employed Full Time at Ananda Hospital for 7 months</p>
                                            <p>3. Employed Full Time at Permata Clinic for 5 months</p>

                                        </div>

                                        <div class="button" class="close" onclick="closePopup()">
                                            <p>
                                                style="font-size: 25px;
                                                        font-weight: bolder; background-color: #FF9F84; color: white;">
                                                OK</p>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <img src="images/infanurse7.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Siti Aminah</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Bekasi</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>5 Years</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
                        <img src="images/icon tambah.png" alt="" style="width: 23px;height: 23px;">

                    </div>
                    <div class="iconbintang">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">

                    </div>


                </div>
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse2.jpg" alt="">
                                    <p
                                        style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        Mustika Ratu</p>
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
                                            <p style="font-size: 20px;">Tangerang</p>
                                        </div>
                                        <div class="lokasi">
                                            <img src="images/bintang_kosong_icon.png" alt=""
                                                style="width: 20px; height: 21px;">
                                            <p style="font-size: 20px;">Newborn</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 59 kg</p>
                                            <p>Height : 178 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Tangerang Selatan, September 1st 1996</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at Primaya Hospital for 4 months</p>
                                            <p>2. Employed Full Time at Hermina Public Hospital for 9 months</p>
                                            <p>3. Employed Full Time at Asih Karawaci Hospital for 7 months </p>

                                        </div>

                                        <div class="button" class="close" onclick="closePopup()">
                                            <p>
                                                style="font-size: 25px;
                                                        font-weight: bolder; background-color: #FF9F84; color: white;">
                                                OK</p>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <img src="images/infanurse8.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Mustika Ratu</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Tangerang</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>3 Years</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
                        <img src="images/icon tambah.png" alt="" style="width: 23px;height: 23px;">

                    </div>
                    <div class="iconbintang">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">

                    </div>



                </div>

            </div>
            <div class="card-baris-5">
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse2.jpg" alt="">
                                    <p style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        Rudi Tabuti</p>
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
                                            <p style="font-size: 20px;">Depok</p>
                                        </div>
                                        <div class="lokasi">
                                            <img src="images/bintang_kosong_icon.png" alt=""
                                                style="width: 20px; height: 21px;">
                                            <p style="font-size: 20px;">Infant</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 88 kg</p>
                                            <p>Height : 194 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Ambon, April 26th 1988</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at Santika Clinic for 7 months</p>
                                            <p>2. Employed Full Time at High Hopes Hospital for 9 years</p>
                                            <p>3. Employed Full Time at Gandaria Hilir Hospital for 4 months</p>

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

                    <img src="images/infanurse5.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Rudi Tabuti</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Depok</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>8 Years</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
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
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse2.jpg" alt="">
                                    <p
                                        style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        Sandi Presetyo</p>
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
                                            <p style="font-size: 20px;">Bandung</p>
                                        </div>
                                        <div class="lokasi">
                                            <img src="images/bintang_kosong_icon.png" alt=""
                                                style="width: 20px; height: 21px;">
                                            <p style="font-size: 20px;">Toddler</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 78 kg</p>
                                            <p>Height : 190 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Jakarta, Juni 9th 1994</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at Hasan Sadikit Hospital for 3 months</p>
                                            <p>2. Employed Full Time at Boromeus Hospital for 4 months</p>
                                            <p>3. Employed Full Time at Hasan Sadikin Hospital for 2 years</p>

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

                    <img src="images/infanurse6.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Sandi Presetyo</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Bandung</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>4 Years</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
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
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse2.jpg" alt="">
                                    <p
                                        style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        Dina Juwita</p>
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
                                            <p style="font-size: 20px;">Gresik</p>
                                        </div>
                                        <div class="lokasi">
                                            <img src="images/bintang_kosong_icon.png" alt=""
                                                style="width: 20px; height: 21px;">
                                            <p style="font-size: 20px;">Child</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 55 kg</p>
                                            <p>Height : 160 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Bali, December 13th 2001</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at Petrokimia Gresik Hospital for 8 months</p>
                                            <p>2. Employed Full Time at Semen Gresik Clinic for 4 months</p>
                                            <p>3. Employed Full Time at Hermina Hospital for 2 years</p>

                                        </div>

                                        <div class="button" class="close" onclick="closePopup()">
                                            <p>
                                                style="font-size: 25px;
                                                        font-weight: bolder; background-color: #FF9F84; color: white;">
                                                OK</p>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <img src="images/infanurse7.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Dina Juwita</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Gresik</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>2 Years</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
                        <img src="images/icon tambah.png" alt="" style="width: 23px;height: 23px;">

                    </div>
                    <div class="iconbintang">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">

                    </div>


                </div>
                <div class="bentuk-card" onclick="showPopup()">
                    <div id="popup" class="popup">
                        <div class="popup-content" style="width: 661px; height:940px">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <div class="profile">
                                <div class="detail-profil" style="align-items: center">
                                    <img src="images/kotakprofil.png" alt=""
                                        style="width: 600px;margin-bottom: -200px;">
                                    <p style="font-size: 37px; font-weight: bolder;">Profile</p>
                                    <img src="images/infanurse2.jpg" alt="">
                                    <p
                                        style="font-size: 24px; font-weight: bolder;align-items: center;margin-left: 30px;">
                                        Ali Badriah</p>
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
                                            <p style="font-size: 20px;">Jatinangor</p>
                                        </div>
                                        <div class="lokasi">
                                            <img src="images/bintang_kosong_icon.png" alt=""
                                                style="width: 20px; height: 21px;">
                                            <p style="font-size: 20px;">Newborn</p>
                                        </div>

                                    </div>

                                    <div class="information">
                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Further information</p>
                                            <p>Weight : 69 kg</p>
                                            <p>Height : 181 cm</p>
                                            <p>Status : Single</p>
                                            <p>Birth : Sumedang, January 15th 1993</p>
                                        </div>

                                        <div class="information-2">
                                            <p style="font-size: 22px; font-weight: 600;">Work Experience</p>
                                            <p>1. Employed Full Time at Harapan Keluarga Hospital for 5 months</p>
                                            <p>2. Employed Full Time at Padjajaran University Hospital for 5 years</p>
                                            <p>3. Employed Full Time at Cahaya Medika Hospital for 11 months </p>

                                        </div>

                                        <div class="button" class="close" onclick="closePopup()">
                                            <p>
                                                style="font-size: 25px;
                                                        font-weight: bolder; background-color: #FF9F84; color: white;">
                                                OK</p>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <img src="images/infanurse8.png" alt="">
                    <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Ali Badriah</p>
                    <div class="tambah-lokasi">
                        <div class="lokasi-waktu">
                            <div class="detail-card">
                                <img src="images/icon_lokasi.png" alt="">
                                <p>Jatinangor</p>
                            </div>
                            <div class="detail-card" style="margin-top: -20px;">
                                <img src="images/icon_jam.png" alt="">
                                <p>6 Years</p>
                            </div>
                        </div>

                        {{-- ini pop up --}}
                        <img src="images/icon tambah.png" alt="" style="width: 23px;height: 23px;">

                    </div>
                    <div class="iconbintang">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">
                        <img src="images/icon_bintang_berisi.png" alt="">

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

        .card-baris-3 {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            margin-left: 45px;
            margin-top: 57px;
        }

        .card-baris-4 {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            margin-left: 45px;
            margin-top: 57px;
        }

        .card-baris-5 {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            margin-left: 45px;
            margin-top: 57px;
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
