@extends('components.header')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/telex" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/lexend-deca" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Our Service</title>

    <style>
        .font-telex {
            font-family: 'Telex', sans-serif;
        }

        .font-lexend {
            font-family: 'Lexend Deca', sans-serif;
        }
    </style>
</head>
@section('content')
<body class="bg-[#FFF1C7]">
    <div class="mx-[165px] my-12">
        <div class="flex flex-row gap-12">
            <img src="images/back.svg" alt="">
            <h1 class="text-[96px] tracking-widest font-lexend font-semibold">Rent Checkout</h1>
        </div>
        <div class="flex flex-row gap-64 mt-6 font-lexend">
            <div class="flex flex-col gap-6 ">
                <div class="flex flex-col gap-3">
                    <label class="ml-1" for="Name">Name</label>
                    <input
                        class="text-[#677489] pl-4 w-[536px] h-12  rounded-xl ring-1 ring-gray-200 focus:outline-none"
                        type="text" placeholder="your name" name="" id="">
                </div>
                <div class="flex flex-col gap-3">
                    <label class="ml-1" for="address">Address</label>
                    <input class="text-[#677489] pl-4 w-[536px] h-12 rounded-xl ring-1 ring-gray-200 focus:outline-none"
                        type="address" placeholder="your address" name="" id="">
                </div>
                <div class="flex flex-col gap-3">
                    <label class="ml-1" for="email">Email</label>
                    <input class="text-[#677489] pl-4 w-[536px] h-12 rounded-xl ring-1 ring-gray-200 focus:outline-none"
                        type="address" placeholder="Example@youremail.com" name="" id="">
                </div>
                <div class="flex flex-col gap-3 relative">
                    <label class="ml-1" for="email">Email</label>
                    <input
                        class="text-[#677489] pl-24 w-[536px] h-12 rounded-xl ring-1 ring-gray-200 focus:outline-none"
                        type="address" placeholder="81234567894" name="" id="">
                    <div class="flex flex-row gap-3 absolute text-[#677489]/[0.7] left-2 bottom-[12%]">
                        <img src="images/flag-ind.svg" alt="">
                        <p>(+62)</p>
                    </div>
                </div>
                <div class="flex flex-col relative gap-3">
                    <label class="ml-1" for="email">Payment Method</label>
                    <select
                        class="text-[#677489] indent-5 pl-4 w-[536px] h-12 rounded-xl ring-1 ring-gray-200 focus:outline-none"
                        type="address" name="" id="">
                        <option class="pl-4" value="Mandiri">Mandiri (1630004400533) a.n Infacare</option>
                        <option class="pl-4" value="BCA">Bca (7435395323) a.n Anjay</option>
                    </select>
                    <img src="images/bank.svg" class="absolute bottom-[13%] left-2" alt="">
                </div>
                <div class="mt-6">
                    <button class="bg-[#90C57E] font-semibold rounded-2xl w-[536px] h-12" type="submit">
                        Place Order
                    </button>
                </div>
            </div>
            <div class="flex flex-col">
                <h1 class="font-bold">Your Order</h1>
                <div class="w-[456px] ring-1 bg-white rounded-t-xl ring-gray-200 h-[134px]">
                    <div class="flex flex-row gap-10 h-full justify-center items-center">
                        <img class="w-20 h-20" src="images/img-1.png" alt="">
                        <div class="flex flex-col">
                            <h1>(1X) Baby Walker</h1>
                            <p><span class="text-[#677489]">Rent Duration:</span> 1 Month</p>
                        </div>
                        <p class="mb-6">Rp. 70.000</p>
                    </div>
                </div>
                <div class="w-[456px] ring-1 bg-white rounded-b-xl ring-gray-200 h-[134px]">
                    <div class="flex flex-row gap-8 h-full justify-center items-center">
                        <img class="w-20 h-20" src="images/img-2.png" alt="">
                        <div class="flex flex-col">
                            <h1><span>(1X)</span> Portable Bathtub</h1>
                            <p><span class="text-[#677489]">Rent Duration:</span> 3 Months</p>
                        </div>
                        <p class="mb-6">Rp. 240.000</p>
                    </div>
                </div>
                <div class="mt-28">
                    <hr class="outline-none w-[456px] h-0.5 bg-[#888F99]">
                    <div class="flex flex-col my-4 gap-4">
                        <div class="flex flex-row justify-between">
                            <h1 class="text-xl text-[#677489]">Subtotal</h1>
                            <p class="text-xl">Rp310.000</p>
                        </div>
                        <div class="flex flex-row justify-between">
                            <h1 class="text-xl text-[#677489]">Shipping Cost</h1>
                            <p class="text-xl">Rp15.000</p>
                        </div>
                    </div>
                    <hr class="outline-none w-[456px] h-0.5 bg-[#888F99]">
                </div>
                <div class="flex flex-row my-4 justify-between">
                    <h1 class="text-xl">Total</h1>
                    <p class="text-xl">Rp325.000</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
