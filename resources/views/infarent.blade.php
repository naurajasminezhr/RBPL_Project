<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>File Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- font awesome cdn link  -->
<!--   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
<!-- <link rel="stylesheet" href="{{ asset('css/filepage.css') }}">

</head>

<body style="background-color: #F2F2F2">
    @extends('components.header')
    @section('content')
    <div style="width: 857px;height: 800px; background-color: white" class="mx-auto rounded-5">
            <div class="studoc-4 screen">

                <div class="main" style="padding-left: 99px;padding-top: 41px">
                    <h1 class="title" style="font-weight: bold;font-size: 32px;color: #283D70">Matematika 1</h1>
                    <p class="owner opacity-50" style="color: #142F64">Published by Alodia Angelica Hutahaean November 2022</p>
                    <div class="name " style="font-weight: bold;font-size: 20px;color: #283D70">Matriks dan Determinan</div>
                    <div class="border border-2 border-black rounded-4"
                        style="width: 88px;height: 20px;margin-top: 12px;margin-bottom: 17px;">
                        <p class="text-center font-medium " style="font-size: 10px">Semester 1</p>
                    </div>

                    <img class="materi" src="images/materi.jpeg" alt="materi 1" style="width: 579px;height: 421px;" />
                    <div class="group-download" style="">
                        <a class="btn rounded-5 d-flex align-items-center justify-content-center"
                            style="width: 250px;height: 50px;background-color:#68CE93; color: #ffff;margin-top: 49px">Download
                            Now</a>
                    </div>
                </div>

            </div>
        </div>-->
    <form method="POST" action="{{ route('save-profile') }}" class="form">

        @csrf


        <div class="column">
            <div class="input-label">
                <label>First Name</label>
            </div>
            <div class="input-label">
                <label style="margin-left: 378px;">Last Name</label>
            </div>
        </div>

        <div class="column">
            <div class="input-column" style="font-family: Lexend">
                <input type="text" placeholder="Enter first name" required name="first_name" id="firstName" />
            </div>

            <div class="input-column" style="font-family: Lexend">
                <input type="text" placeholder="Enter last name" required name="last_name" id="lastName" />
            </div>
        </div>


        <div class="input-label">
            <label>Email Address</label>
        </div>

        <div class="input-box single" style="font-family: Lexend">
            <input type="text" id="emailInput" placeholder="Enter email address"
                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" required name="email_address"
                id="emailAddress" />
            <span id="emailStatus"></span>
        </div>

<script>
    const emailInput = document.getElementById('emailInput');
    const emailStatus = document.getElementById('emailStatus');
    const saveProfileButton = document.getElementById('saveProfileButton');

    emailInput.addEventListener('input', function(event) {
        if (emailInput.validity.valid) {
            emailStatus.innerHTML = '&#10004;'; // Checkmark symbol
            emailStatus.style.color = 'green';
            saveProfileButton.disabled = false;
        } else {
            emailStatus.innerHTML = '&#9888; Enter a valid email address!'; // Exclamation mark symbol
            emailStatus.style.color = 'red';
            saveProfileButton.disabled = true;
        }
    });

    saveProfileButton.addEventListener('click', function(event) {
        if (!emailInput.validity.valid) {
            event.preventDefault();
        }
    });

</script>




        <div class="input-label">
            <label>Address</label>
        </div>
        <div class="input-box address" style="font-family: Lexend">
            <input type="text" placeholder="Enter street address" required name="address" id="address" />
        </div>

        <div class="input-label">
            <label>Contact Number</label>
        </div>
        <div class="input-box" style="font-family: Lexend">
            <input type="number" placeholder="Enter phone number" required name="contact_number" id="contactNumber" />
        </div>


        <div class="column">
            <div class="input-label">
                <label>Province</label>
            </div>
            <div class="input-label" style="font-family: Lexend">
                <label style="margin-left: 390px;">City</label>
            </div>
        </div>

        <div class="input-label">

            <div class="column">
                <div class="select-box" style="font-family: Lexend">
                    <select id="provinceSelect" name="province" id="province">
                        <option hidden>Select Province</option>
                        <option>Aceh</option>
                        <option>Bali</option>
                        <option>Banten</option>
                        <option>Bengkulu</option>
                        <option>Central Java</option>
                        <option>Central Kalimantan</option>
                        <option>Central Sulawesi</option>
                        <option>East Java</option>
                        <option>East Kalimantan</option>
                        <option>East Nusa Tenggara</option>
                        <option>Gorontalo</option>
                        <option>Jakarta</option>
                        <option>Jambi</option>
                        <option>Lampung</option>
                        <option>Maluku</option>
                        <option>North Kalimantan</option>
                        <option>North Maluku</option>
                        <option>North Sulawesi</option>
                        <option>North Sumatra</option>
                        <option>Papua</option>
                        <option>South Kalimantan</option>
                        <option>South Sulawesi</option>
                        <option>South Sumatra</option>
                        <option>Southeast Sulawesi</option>
                        <option>West Java</option>
                        <option>West Kalimantan</option>
                        <option>West Nusa Tenggara</option>
                        <option>West Papua</option>
                        <option>West Sulawesi</option>
                        <option>West Sumatra</option>
                        <option>Yogyakarta</option>
                    </select>
                </div>


                <div class="select-box" style="font-family: Lexend">
                    <select id="citySelect" name="city">
                        <option hidden>Select City</option>

                    </select>
                </div>

                <script>
                    // Get the select elements
                    const provinceSelect = document.getElementById('provinceSelect');
                    const citySelect = document.getElementById('citySelect');

                    // Define the city options for each province
                    const citiesByProvince = {
                        Aceh: ['Banda Aceh', 'Langsa', 'Lhokseumawe', 'Sabang'],
                        Bali: ['Denpasar', 'Singaraja', 'Tabanan'],
                        'Bangka belitung': ['Pangkalpinang', 'Tanjung Pandan', 'Manggar'],
                        Banten: ['Serang', 'Tangerang', 'Cilegon'],
                        Bengkulu: ['Bengkulu', 'Curup', 'Mukomuko'],
                        'Central Java': ['Semarang', 'Surakarta', 'Yogyakarta'],
                        'Central Kalimantan': ['Palangkaraya', 'Sampit', 'Pangkalan Bun'],
                        'Central Sulawesi': ['Palu', 'Makassar', 'Toli-Toli'],
                        'East Java': ['Surabaya', 'Malang', 'Madiun'],
                        'East Kalimantan': ['Balikpapan', 'Samarinda', 'Tenggarong'],
                        'East Nusa Tenggara': ['Kupang', 'Ende', 'Labuan Bajo'],
                        Gorontalo: ['Gorontalo', 'Kwandang', 'Tilamuta'],
                        Jakarta: ['Jakarta Selatan', 'Jakarta Barat', 'Jakarta Pusat'],
                        Jambi: ['Jambi', 'Sungai Penuh', 'Muara Bulian'],
                        Lampung: ['Bandar Lampung', 'Metro', 'Krui'],
                        Maluku: ['Ambon', 'Ternate', 'Tual'],
                        'North Kalimantan': ['Tanjung Selor', 'Tarakan', 'Nunukan'],
                        'North Maluku': ['Ternate', 'Sofifi', 'Jailolo'],
                        'North Sulawesi': ['Manado', 'Bitung', 'Tomohon'],
                        'North Sumatra': ['Medan', 'Pematangsiantar', 'Tebing Tinggi'],
                        Papua: ['Jayapura', 'Merauke', 'Biak'],
                        'West Java': ['Bandung', 'Bogor', 'Cirebon'],
                        'West Kalimantan': ['Pontianak', 'Singkawang', 'Ketapang'],
                        'West Nusa Tenggara': ['Mataram', 'Bima', 'Sumbawa Besar'],
                        'West Papua': ['Manokwari', 'Sorong', 'Fakfak'],
                        'West Sulawesi': ['Mamuju', 'Majene', 'Polewali Mandar'],
                        'West Sumatra': ['Padang', 'Bukittinggi', 'Pariaman'],
                        Yogyakarta: ['Yogyakarta', 'Bantul', 'Sleman'],
                    };

                    // Event listener for province select change
                    provinceSelect.addEventListener('change', function() {
                        // Clear the current city options
                        citySelect.innerHTML = '<option hidden>Select City</option>';

                        // Get the selected province value
                        const selectedProvince = this.value;

                        // Get the cities for the selected province
                        const cities = citiesByProvince[selectedProvince] || [];

                        // Populate the city select options
                        cities.forEach(function(city) {
                            const option = document.createElement('option');
                            option.textContent = city;
                            citySelect.appendChild(option);
                        });
                    });
                </script>

            </div>
        </div>



        <div class="input-label">
            <label>Birthday</label>
            <div class="column">
                <div class="input-3column" style="font-family: Lexend">
                    <select name="birthday_month" id="birthdayMonth">
                        <option hidden>Month</option>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                    </select>
                </div>

                <div class="input-3column" style="font-family: Lexend">
                    <select name="birthday_day" id="birthdayDay">
                        <option hidden>Day</option>
                        <?php for ($day = 1; $day <= 31; $day++): ?>
                        <option><?php echo $day; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>


                <div class="input-3column" style="font-family: Lexend">
                    <select name="birthday_year" id="year">
                        <option hidden>Year</option>
                        <?php for ($year = 1900; $year <= 2023; $year++): ?>
                        <option><?php echo $year; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
        </div>


        <div class="input-label">
            <label>Password</label>
        </div>
        <div class="input-box" style="font-family: Lexend">
            <input type="password" id="passwordInput" placeholder="Enter your password" name="password" required />
        </div>
        <span id="passwordStatus"></span>

        <div class="column">

            <div class="input-box-cancel" class="cancel-button" style="font-family: Lexend">
                <button type="cancel" class="cancel-button" style="font-size:1.3rem">Cancel</button>
            </div>


            <div class="input-box-save" style="font-family: Lexend;">
                <button type="submit" class="save-button" style="font-size:1.3rem" id="saveProfileButton">Save</button>
            </div>

        </div>


    </form>
@endsection
</body>

</html>
