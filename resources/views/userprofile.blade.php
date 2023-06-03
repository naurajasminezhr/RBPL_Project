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
        <script src="path/to/custom-file-input.js"></script>
        <section class="container">
            <p style="text-align:left; color: #000000; font-size: 30px; font-weight:1000; letter-spacing: 9.5%; margin-left:50px">Edit Profile
            </p>

            <form action="{{ route('profilepicture.upload') }}" method="POST" enctype="multipart/form-data" class="form">
                @csrf

               <!-- <div class="input-label">
                    <label>Profile Photo</label>
                </div>
                <input type="file" name="profile_picture" accept="image/*" required class="file-input">

            -->
            <div class="input-label">
                <label for="profile_picture">Profile Photo</label>
            </div>
            <div class="file-input-wrapper">
                <input type="file" id="profile_picture" name="profile_picture" accept="image/*" required class="file-input">
                <button type="button" class="custom-file-button">Choose File</button>
            </div>

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
                        <input type="text" placeholder="Enter first name" required />
                    </div>

                    <div class="input-column" style="font-family: Lexend">
                        <input type="text" placeholder="Enter last name" required />
                    </div>
                </div>


                <div class="input-label">
                    <label>Email Address</label>
                </div>

                <div class="input-box single" style="font-family: Lexend">
                    <input type="text" placeholder="Enter email address" required />
                </div>
<!--
                <div class="input-label">
                    <label>Phone Number</label>
                </div>
                <div class="column">
                    <div class="input-column ">

                        <input type="number" placeholder="Enter phone number" required />
                    </div>

                    <div class="input-column">

                        <input type="date" placeholder="Enter birth date" required />
                    </div>
                </div>
            -->

            <div class="input-label">
                <label>Address</label>
            </div>
            <div class="input-box address" style="font-family: Lexend">
                <input type="text" placeholder="Enter street address" required />
            </div>

            <div class="input-label">
                <label>Contact Number</label>
            </div>
            <div class="input-box" style="font-family: Lexend">
                <input type="number" placeholder="Enter phone number" required />
            </div>


            <div class="column">
                <div class="input-label">
                    <label>Province</label>
                </div>
                <div class="input-label" style="font-family: Lexend">
                    <label style="margin-left: 390px;">City</label>
                </div>
            </div>

                <div class="input-label" >

                    <div class="column">
                        <div class="select-box" style="font-family: Lexend">
                            <select>
                                <option hidden>East Java</option>
                                <option>America</option>
                                <option>Japan</option>
                                <option>India</option>
                                <option>Nepal</option>
                            </select>
                        </div>

                        <div class="select-box" style="font-family: Lexend">
                            <select>
                                <option hidden>Surabaya</option>
                                <option>America</option>
                                <option>Japan</option>
                                <option>India</option>
                                <option>Nepal</option>
                            </select>
                        </div>
                    </div>
                </div>



                <div class="input-label">
                    <label>Birthday</label>
                    <div class="column">
                        <div class="input-3column" style="font-family: Lexend">
                            <select>
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
                            <select>
                                <option hidden>Day</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>

                        <div class="input-3column" style="font-family: Lexend">
                            <select>
                                <option hidden>Year</option>
                                <option>2001</option>
                                <option>2002</option>
                                <option>2003</option>
                                <option>2004</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="input-label">
                    <label>Password</label>
                </div>
                <div class="input-box " style="font-family: Lexend">
                    <input type="text" placeholder="Enter your passwords" required />
                </div>

                <div class="column">
                    <div class="input-box-cancel" class="cancel-button" style="font-family: Lexend">
                        <button type="cancel" class="cancel-button" style="font-size:1.3rem">Cancel</button>
                    </div>
                    <div class="input-box-save" style="font-family: Lexend;">
                        <button type="submit" class="save-button" style="font-size:1.3rem">Save</button>
                    </div>
                </div>
            </form>
        </section>
    </body>

    </html>

    <style>
        /* Import Google font - Poppins */
        @import url("https://fonts.googleapis.com/css2?family=Telex:wght@200;300;400;500;600;700&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Lexend:wght@200;300;400;500;600;700&display=swap");
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

/*
        .file-input {
    height: 55px;
    width: 20%;
    color: #fff;
    font-size: 1rem;
    font-weight: 400;
    margin-top: 30px;
    border: none;
    cursor: pointer;
    transition: all 0.2s ease;
    background: #FF9F84;
    border: 1px solid #ddd;
    border-radius: 6px;
    margin-left: 30px;
}
*/
.file-input-wrapper {
    position: relative;
    display: inline-block;
}

.file-input-wrapper .file-input {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    cursor: pointer;
}

.file-input-wrapper .custom-file-button {
    height: 55px;
    width: 100%;
    color: #fff;
    font-size: 1rem;
    font-weight: 400;
    margin-top: 30px;
    border: none;
    cursor: pointer;
    transition: all 0.2s ease;
    background: #FF9F84;
    border: 1px solid #ddd;
    border-radius: 6px;
    margin-left: 30px;
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
            margin-top: 0px;
            margin-left: 25px;
            margin-right: 0px;

        }

        .form .input-box-cancel {
            width: 12%;
            margin-top: 5px;
            margin-left: 25px;
            margin-right: 30px;

        }

        .form .input-box-save {
            width: 12%;
            margin-top: 5px;

        }


        .label {
            color: #333;
            font-weight: bold;
        }

        .input-label label {
            color: #333;
            font-weight: bold;
            margin-left: 50px;
            margin-top: 15px;
            margin-bottom: 2px;
            font-family: "Lexend", sans-serif;

        }

        .input-box label {
            color: #333;
            font-weight: bold;
            margin-left: 25px;
        }

        .form :where(.input-box input, .input-box-cancel input, .input-box-save input) {
            position: relative;
            height: 50px;
            width: 77%;
            outline: none;
            font-size: 1rem;
            color: #707070;
            margin-top: 8px;
            border: 1.5px solid #858585;
            border-radius: 6px;
            padding: 0px 15px;
            margin-left: 25px;
            margin-right: 25px;

        }


        .input-box input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        .input-box-cancel input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        .input-box-save input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        .form .column {
            display: flex;
            column-gap: 5px;

        }



        .address :where(input, .select-box) {
            margin-top: 0px;
            margin-bottom: 15px;

        }

        .address :where(input, .input-column) {
            margin-top: 0px;
            margin-bottom: 15px;

        }

        .address :where(input, .input-3column) {
            margin-top: 0px;
            margin-bottom: 15px;

        }


        .form .select-box select {
            position: relative;
            height: 50px;
            width: 400px;
            outline: none;
            font-size: 1rem;
            color: #707070;
            margin-top: 0px;

            border: 1px solid #858585;
            border-radius: 6px;
            padding: 0 10px;
            margin-left: 50px;
            margin-right: 0px;


        }

        .form .input-column input {
            position: relative;
            height: 50px;
            width: 400px;
            outline: none;
            font-size: 1rem;
            color: #707070;
            margin-top: 0px;

            border: 1px solid #858585;
            border-radius: 6px;
            padding: 0 10px;
            margin-left: 50px;
            margin-right: 0px;


        }

        .form .input-3column select {
            position: relative;
            height: 50px;
            width: 200px;
            outline: none;
            font-size: 1rem;
            color: #707070;
            margin-top: 0px;

            border: 1px solid #858585;
            border-radius: 6px;
            padding: 0 10px;
            margin-left: 50px;
            margin-right: 0px;


        }


        .select-box select {
            height: 100%;

            outline: none;
            border: none;
            color: #707070;
            font-size: 1rem;
        }

        .input-column input {
            height: 100%;

            outline: none;
            border: none;
            color: #707070;
            font-size: 1rem;
        }

        .input-3column select {
            height: 100%;

            outline: none;
            border: none;
            color: #707070;
            font-size: 1rem;
        }

        .form .save-button {
            height: 55px;
            width: 100%;
            color: #fff;
            font-size: 1rem;
            font-weight: 400;
            margin-top: 30px;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            background: #FF9F84;
            border: 1px solid #ddd;
            border-radius: 6px;
            margin-left: 30px;
        }

        .form .cancel-button {
            height: 55px;
            width: 100%;
            color: #FF9F84;
            font-size: 1rem;
            font-weight: 400;
            margin-top: 30px;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            background: #ffffff;
            border: 2px solid #FF9F84;
            border-radius: 6px;
            margin-left: 25px;

        }



        .form button:hover {
            background: #f8c3b4;
        }

        .form .save-button button:hover {
            background: #000000;
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
