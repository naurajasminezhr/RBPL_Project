@extends('components.header')

@section('content')
    <title>Profile Page</title>

    <!DOCTYPE html>
    <!---Coding By CodingLab | www.codinglabweb.com--->
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <!---Custom CSS File--->
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <section class="container">
            <p style="text-align:left; color: #000000; font-size: 30px; font-weight: bold; letter-spacing: 9.5%;">User
                Profile
            </p>


            <form action="{{ route('profilepicture.upload') }}" method="POST" enctype="multipart/form-data" class="form">
                @csrf
                <div class="label">
                    <label>Profile Photo</label>
                </div>
                <div class="input-box">
                    <label>Full Name</label>
                    <input type="text" placeholder="Enter full name" required />
                </div>

                <div class="input-file">
                    <label>Profile Photo</label>
                    <input type="file" name="profile_picture" accept="image/*" required>
                </div>

                <div class="input-box">
                    <label>Email Address</label>
                    <input type="text" placeholder="Enter email address" required />
                </div>

                <div class="column">
                    <div class="input-box">
                        <label>Phone Number</label>
                        <input type="number" placeholder="Enter phone number" required />
                    </div>
                    <div class="input-box">
                        <label>Birth Date</label>
                        <input type="date" placeholder="Enter birth date" required />
                    </div>
                </div>
                <div class="gender-box">
                    <h3>Gender</h3>
                    <div class="gender-option">
                        <div class="gender">
                            <input type="radio" id="check-male" name="gender" checked />
                            <label for="check-male">male</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-female" name="gender" />
                            <label for="check-female">Female</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-other" name="gender" />
                            <label for="check-other">prefer not to say</label>
                        </div>
                    </div>
                </div>
                <div class="input-box address">
                    <label>Address</label>
                    <input type="text" placeholder="Enter street address" required />
                    <input type="text" placeholder="Enter street address line 2" required />
                    <div class="column">
                        <div class="select-box">
                            <select>
                                <option hidden>Country</option>
                                <option>America</option>
                                <option>Japan</option>
                                <option>India</option>
                                <option>Nepal</option>
                            </select>
                        </div>
                        <input type="text" placeholder="Enter your city" required />
                    </div>
                    <div class="column">
                        <input type="text" placeholder="Enter your region" required />
                        <input type="number" placeholder="Enter postal code" required />
                    </div>
                </div>
                <div class="input-box">
                    <button type="submit">Save Profile</button>
                </div>
            </form>
        </section>
    </body>

    </html>

    <style>
        /* Import Google font - Poppins */
        @import url("https://fonts.googleapis.com/css2?family=Telex:wght@200;300;400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Telex", sans-serif;
        }

        body {
            min-height: 100vh;
            align-items: center;
            justify-content: center;
            padding: 0px;
            background: #EFE2DA;
        }

        .container {}

        .container header {
            font-size: 1.5rem;
            color: #333;
            font-weight: 500;
            text-align: center;
        }

        .container .form {
            margin-top: 30px;
        }

        .form .input-box {
            width: 100%;
            margin-top: 20px;
        }

        .label {
            color: #333;
            font-weight: bold;
        }

        .input-box label {
            color: #333;
            font-weight: bold;
        }

        .form :where(.input-box input, .select-box) {
            position: relative;
            height: 50px;
            width: 100%;
            outline: none;
            font-size: 1rem;
            color: #707070;
            margin-top: 8px;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 0 15px;
        }

        .input-box input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        .form .column {
            display: flex;
            column-gap: 15px;
        }

        .form .gender-box {
            margin-top: 20px;
        }

        .gender-box h3 {
            color: #333;
            font-size: 1rem;
            font-weight: 400;
            margin-bottom: 8px;
        }

        .form :where(.gender-option, .gender) {
            display: flex;
            align-items: center;
            column-gap: 50px;
            flex-wrap: wrap;
        }

        .form .gender {
            column-gap: 5px;
        }

        .gender input {
            accent-color: rgb(130, 106, 251);
        }

        .form :where(.gender input, .gender label) {
            cursor: pointer;
        }

        .gender label {
            color: #707070;
        }

        .address :where(input, .select-box) {
            margin-top: 15px;
        }

        .select-box select {
            height: 100%;
            width: 100%;
            outline: none;
            border: none;
            color: #707070;
            font-size: 1rem;
        }

        .form button {
            height: 55px;
            width: 100%;
            color: #fff;
            font-size: 1rem;
            font-weight: 400;
            margin-top: 30px;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            background: rgb(130, 106, 251);
        }

        .form button:hover {
            background: rgb(88, 56, 250);
        }

        /*Responsive*/
        @media screen and (max-width: 500px) {
            .form .column {
                flex-wrap: wrap;
            }

            .form :where(.gender-option, .gender) {
                row-gap: 15px;
            }
        }
    </style>
@endsection
