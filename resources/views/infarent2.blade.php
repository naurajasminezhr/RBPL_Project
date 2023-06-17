@extends('components.header')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page2.css">
    <title>Document</title>
</head>

<body>
    <div class="header" style="display: flex; flex-direction: row;align-items: center; margin-left: 30px;">
        <p style="font-size: 96px; font-weight: 700; margin-left: 50px">Infarent</p>

        <div class="rent">
            <p style="align-items: center; font-size: 24px;margin-left: 30px; margin-top: 10px">Rent History</p>
        </div>
        <div class="keranjang" style="margin-left: 400px">
            <form action="/search" method="GET">
                <img src="images/search.png" type="submit">
                <input type="text" name="query" placeholder="Search" img src="" type="submit"/>
            </form>
            <img src="images/keranjang.png" alt="" style="width: 20px; height: 20px;margin-left: 10px;">
        </div>


    </div>


    <div class="card">
        <div class="card-baris-1">
            <div class="bentuk-card">
                <img src="images/infarent1.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Baby Walker</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Kalimantan Barat</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>70.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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
                <img src="images/infarent2.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Infuser</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Sidoarjo</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>40.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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
                <img src="images/infarent3.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Stroller</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Malang</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>100.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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
                <img src="images/infarent4.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Stroller</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Surabaya</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>90.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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
                <img src="images/infarent5.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Baby Bathtub</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Kediri</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>70.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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
                <img src="images/infarent6.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Cribs</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Malang</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>110.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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
                <img src="images/infarent7.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Baby Toys</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Surabaya</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>70.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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
                <img src="images/infarent8.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Swimming Pool Pack</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Sidoarjo</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>65.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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

        <div class="card-baris-3">
            <div class="bentuk-card">
                <img src="images/infarent1.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Baby Walker</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Kalimantan Barat</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>70.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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
                <img src="images/infarent2.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Infuser</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Sidoarjo</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>40.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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
                <img src="images/infarent3.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Stroller</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Malang</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>100.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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
                <img src="images/infarent4.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Stroller</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Surabaya</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>90.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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

        <div class="card-baris-4">
            <div class="bentuk-card">
                <img src="images/infarent1.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Baby Walker</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Kalimantan Barat</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>70.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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
                <img src="images/infarent2.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Infuser</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Sidoarjo</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>40.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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
                <img src="images/infarent3.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Stroller</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Malang</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>100.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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
                <img src="images/infarent4.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Stroller</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Surabaya</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>90.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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

        <div class="card-baris-5">
            <div class="bentuk-card">
                <img src="images/infarent1.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Baby Walker</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Kalimantan Barat</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>70.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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
                <img src="images/infarent2.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Infuser</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Sidoarjo</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>40.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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
                <img src="images/infarent3.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Stroller</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Malang</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>100.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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
                <img src="images/infarent4.png" alt="">
                <p style="font-weight: bolder;font-size: 22px;font-family: 'Poppins';"> Stroller</p>
                <div class="tambah-lokasi">
                    <div class="lokasi-waktu">
                        <div class="detail-card">
                            <img src="images/icon_lokasi.png" alt="">
                            <p>Surabaya</p>
                        </div>
                        <div class="detail-card" style="margin-top: -20px;">
                            <img src="images/iconduit.png" alt="">
                            <p>90.000/month</p>
                        </div>
                    </div>
                    <img src="images/keranjang-infarent.png" alt=""
                        style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">

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



</body>

</html>
<style>
body {
    background-color: #FFF1C7;
    justify-content: center;
}



.rent {
    background-color:white;
;
    width: 192px;
    height: 49px;
    border-radius: 16px;
    align-items: center;
    display: flex;
    margin-left: 25px;
    margin-top: 20px;


}



.keranjang {
    display: flex;
    flex-direction: row;
    align-items: center;

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
    width: 176px;
    height: 45px;
    align-items: center;
    margin-left: 30px;

}

.detail-card p {
    font-size: 17px;
}

.lokasi-waktu p {
    font-weight: 800;
    color: #5A5A5A;
    font-size: 17px;


}


.detail-card img {
    width: 18px;
    height: 18px;
    margin-right: 5px;
}

.lokasi-waktu {
    display: flex;
    flex-direction: column;
    padding-bottom: 20px;
    column-gap: 10px;
    margin-top: 10px;
    margin-left: -20px;

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
</style>

@endsection
