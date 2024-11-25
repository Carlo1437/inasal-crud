<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inasal-nang-inamo</title>
    <link rel="shortcut icon" href="img/inasal.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class= " nav-bg  w-full flex items-center p-2 h-22 justify-between sticky top-0 z-[999]" style="background-color: #fdffe8;">
        <img src="img/images.png" alt="" height="100" width="120" class="ml-10" >
        <div class="nav mr-10 flex items-center gap-20 ">
        <a href="#" class="link text-green-800 font-bold">Home</a>
        <a href="#" class="link text-green-800 font-bold">Menu</a>
        <a href="#" class="link text-green-800 font-bold ">Delivery</a>
        <a href="#" class="link text-green-800 font-bold">Promos</a>
        <a href="#" class="link text-green-800 font-bold">About Us</a>
       <a href="{{ route('auth.registration') }}"> <button class="sign bg-green-800 font-bold  p-1 w-32 rounded-full  items-center text-white ">Sign Up</button> </a>
    </div>
    </div>

    <div class="h-[80vh] flex items-center p-2 justify-between px-20 relative" style="background-color: #093E00;">

        <div class="w-full absolute top-0 left-0 h-full flex justify-center p-24">
            <div class="w-[98%] bg-white bg-opacity-15 blur-3xl p-4"></div>
        </div>

        <div class="flex flex-col z-[800]">
            <p class="text-white text-2xl ml-20">Philippines'</p>
            <p class="font-extrabold font-serif text-5xl ml-20" style="color: #fdffe8; font-family: 'Ultra'; font-style: normal; font-display: swap;">BEST TASTING<br>CHICKEN INASAL</p>
            <p class="text-white font-serif italic ml-20 text-xl">Inihaw na swak sa panlasang pinoy!</p>
          <a href="index.html"> <button class="bg-transparent text-white border border-white px-4 py-2 w-[40%] text-xl mt-5 rounded-2xl ml-20">ORDER NOW</button></a>
        </div>
        <img src="img/Paa-large-400x255-1.png" alt="" height="950" width="700" class="mr-10 mt-20 drop-shadow-lg shadow-black">
    </div>

    <div class="flex justify-center w-full h-[75vh] mt-10">
        <div class="flex flex-col items-center ">
            <h1 class="text-2xl font-extrabold text-green-700 font-serif">Media</h1>
            <p class="text-xl font-bold font-sans">Mang Inasal: The Taste of Authentic Filipino Grilling</p>
            <video src="Expertly-Grilled, Tagos-Ang-Sarap Chicken Inasal, NANDITO NA!.mp4" autoplay controls muted width="1000" height="700" class="rounded-md"></video>
        </div>
    </div>

    <div class="Products">
        <div class="Products flex justify-center mt-10">
            <div class="cards-container grid grid-cols-3 gap-[30px]">
                <div class="card">
                    <div class="card-img" >
                        <img src="img/inasalka.webp" alt="">
                    </div>
                    <div class="card-info">
                        <p class="text-title">Product 1</p>
                        <p class="text-body">Chicken Inasal Regular (Solo) </p>
                    <div class="card-footer">
                        <span class="text-title">$5.00</span>
                        <div class="card-button">
                            <button class="buy-button">ORDER NOW</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="img/inasal 2.webp" alt="">
                    </div>
                    <div class="card-info">
                        <p class="text-title">Product 2</p>
                        <p class="text-body">Chicken Inasal Solo Fiesta</p>
                    </div>
                    <div class="card-footer">
                        <span class="text-title">$10.99</span>
                        <div class="card-button">
                            <button class="buy-button">ORDER NOW</button>
                            <!-- Button Content -->
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="img/inasal 3.webp" alt="">
                    </div>
                    <div class="card-info">
                        <p class="text-title">Product 3</p>
                        <p class="text-body">2 pc Pork BBQ with Spiced Vinegar</p>
                    </div>
                    <div class="card-footer">
                        <span class="text-title">$6.00</span>
                        <div class="card-button">
                            <button class="buy-button">ORDER NOW</button>
                            <!-- Button Content -->
                        </div>
                    </div>
                </div>

                <!-- New set of 3 cards -->
                <div class="card">
                    <div class="card-img">
                        <img src="img/inasal 4.webp" alt="">
                    </div>
                    <div class="card-info">
                        <p class="text-title">Product 4</p>
                        <p class="text-body">Chiken Inasal with Palabok</p>
                    </div>
                    <div class="card-footer">
                        <span class="text-title">$9.55</span>
                        <div class="card-button">
                            <button class="buy-button">ORDER NOW</button>
                            <!-- Button Content -->
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="img/inasal 5.webp" alt="">
                    </div>
                    <div class="card-info">
                        <p class="text-title">Product 5</p>
                        <p class="text-body">Palabok with 1 pc Pork BBQ (Solo)</p>
                    </div>
                    <div class="card-footer">
                        <span class="text-title">$7.99</span>
                        <div class="card-button">
                            <button class="buy-button">ORDER NOW</button>
                            <!-- Button Content -->
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="img/inasal 6.webp " alt="">
                    </div>
                    <div class="card-info">
                        <p class="text-title">Product 6</p>
                        <p class="text-body">All Chicken Inasal Family Fiesta</p>
                    </div>
                    <div class="card-footer">
                        <span class="text-title">$17.99</span>
                        <div class="card-button">
                            <button class="buy-button">ORDER NOW</button>
                            <!-- Button Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="nav bg-slate-100 w-full  items-center p-2 h-30 justify-between mt-20 "><br><br><br>
        <p style="color: #093E00;  font-family: 'Ultra';
        font-style: normal;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/ultra/v23/zOLy4prXmrtY-uT9wrI.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;" class="mt-10 font-bold text-4xl ml-5">Contac Us:</p>
        <div class="flex justify-around w-full pb-5 items-center">
            <a href="#" class="text-green-800 text-2xl">Mang Inasal App</a>
            <a href="#" class="text-green-800 text-2xl">MangInasalDelivery.com.ph</a>
            <div class="p-8">
                <img src="img/grabfood-logo-1024x190.png" alt="" height="3" width="180" class="hover:cursor-pointer">
            </div>
            <img src="img/FoodPanda-Logo.png" alt="" height="150" width="180" class="hover:cursor-pointer">
        </div>


    </div>
</body>
</html>
