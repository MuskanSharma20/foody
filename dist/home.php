<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
<header class="px-4">
    <nav class="w-full bg-slate-100 h-16 flex items-center justify-between px-4 md:px-6 shadow-xl lg:max-w-7xl mx-auto">
        <div class="text-2xl flex-grow">Logo</div>
      <div id="menu" class="menu elts md:static md:min-h-fit absolute min-h-[50vh] left-0 flex items-center justify-center w-full top-14 z-10 bg-slate-100 md:flex-grow-0 md:flex md:justify-center hidden md:flex transition-all duration-700 transform ">
            <ul class="md:flex-row flex flex-col gap-8 font-bold text-2xl md:text-lg md:flex md:gap-4">
                <li class="mx-2 cursor-pointer"><a href="home.php">Home</a></li>
                <li class="mx-2 cursor-pointer"><a href="menu.php">Menu</a></li>
                <li class="mx-2 cursor-pointer">Contact us</li>
                <li class="mx-2 cursor-pointer"><a href="order.php">Order</a></li>
            </ul>
        </div>
        <div class="flex gap-4 justify-center items-center md:flex-grow-0">
          <button class="bg-orange-500 text-white px-4 py-2 rounded md:ml-auto hover:bg-orange-600"><a href="signup.php">Signup</a></button>
            <a onclick="onToggleMenu()" class="md:hidden cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 open-icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 close-icon hidden">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </a>
        </div>
    </nav>
</header>


   <!-- carousel -->
   <section class="w-full px-4">
  <div class="relative mx-auto lg:max-w-7xl">
    <!-- Carousel Wrapper -->
    <div id="carousel" class="overflow-hidden relative lg:h-[91vh]">
      <!-- Carousel Items -->
      <div class="carousel-item flex justify-center items-center w-full h-full object-cover transition-transform duration-500 ease-in-out">
        <img src="https://images.unsplash.com/photo-1576521529275-f0f0d02a93b6?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Slide 1">
      </div>
      <div class="carousel-item hidden duration-200 ease-linear">
        <img src="https://images.unsplash.com/photo-1668236534990-73c4ed23043c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Slide 2">
      </div>
      <div class="carousel-item hidden duration-200 ease-linear">
        <img src="https://plus.unsplash.com/premium_photo-1695035006524-ed99577324aa?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Slide 3">
      </div>
    </div>

    <!-- Next & Prev Buttons -->
    <button id="prev" class="absolute top-1/2 left-0 transform -translate-y-1/2 p-2 text-white">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
      </svg>
    </button>
    <button id="next" class="absolute top-1/2 right-0 transform -translate-y-1/2 p-2 text-white">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
      </svg>
    </button>
  </div>
</section>



<!-- image slider -->
  
<section class="w-full py-6 sm:py-12 justify-center items-center px-4 my-8">
  <div class="container mx-auto max-w-3xl relative">
    <div class="overflow-x-auto flex flex-nowrap space-x-4 no-scrollbar" id="card-container">
      <!-- Card 1 -->
      <div class="min-w-[300px] sm:max-w-[300px] bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="https://images.unsplash.com/photo-1496174883999-edcc585a373f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Placeholder Image" class="w-full h-16 sm:h-24 object-cover"> <!-- Adjusted height classes -->
        <div class="p-4">
          <h3 class="font-bold text-xl mb-2">Card Title 1</h3>
          <p class="text-gray-700">This is a description for card 1.</p>
        </div>
      </div>

      <div class="min-w-[300px] sm:max-w-[300px] bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="https://images.unsplash.com/photo-1496174883999-edcc585a373f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Placeholder Image" class="w-full h-16 sm:h-24 object-cover"> <!-- Adjusted height classes -->
        <div class="p-4">
          <h3 class="font-bold text-xl mb-2">Card Title 1</h3>
          <p class="text-gray-700">This is a description for card 1.</p>
        </div>
      </div>

      <div class="min-w-[300px] sm:max-w-[300px] bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="https://images.unsplash.com/photo-1496174883999-edcc585a373f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Placeholder Image" class="w-full h-16 sm:h-24 object-cover"> <!-- Adjusted height classes -->
        <div class="p-4">
          <h3 class="font-bold text-xl mb-2">Card Title 1</h3>
          <p class="text-gray-700">This is a description for card 1.</p>
        </div>
      </div>

      <div class="min-w-[300px] sm:max-w-[300px] bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="https://images.unsplash.com/photo-1496174883999-edcc585a373f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Placeholder Image" class="w-full h-16 sm:h-24 object-cover"> <!-- Adjusted height classes -->
        <div class="p-4">
          <h3 class="font-bold text-xl mb-2">Card Title 1</h3>
          <p class="text-gray-700">This is a description for card 1.</p>
        </div>
      </div>

      <!-- Repeat similar adjustments for other cards -->
    </div>
    <!-- Next and Prev buttons -->
    <button id="prev-btn" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full disabled:bg-gray-400">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
      </svg>
    </button>
    <button id="next-btn" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full disabled:bg-gray-400">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
      </svg>
    </button>
  </div>
</section>


<!-- restraunt section -->
<section class="px-4">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-4">
      <!-- Card 1 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden p-4 md:px-5 lg:px-2">
          <img class="w-full h-48 object-cover" src="https://assets.architecturaldigest.in/photos/64f84cc61d4896b633fba77a/master/w_1600%2Cc_limit/The%2520art%2520deco%2520inspired%2520de%25CC%2581cor%2520of%2520CIRQA%25201960%2520.jpg" alt="Restaurant Image">
          <div class="p-2">
              <h2 class="text-xl font-bold mb-2">Restaurant Name</h2>
              <p class="text-gray-600 mb-2">Cuisine Type</p>
              <div class="flex items-center mb-2">
                  <span class="text-yellow-500">★★★★☆</span>
                  <span class="ml-2 text-gray-600">(120)</span>
              </div>
              <div class="flex justify-between items-center">
                  <span class="text-gray-800 font-bold">$20 for two</span>
                  <button class="text-white bg-orange-500 px-4 py-2 rounded-full hover:bg-orange-600"><a href="menu.html">Order</a></button>
                </div>
          </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden p-4 md:px-5 lg:px-2">
        <img class="w-full h-48 object-cover" src="https://assets.architecturaldigest.in/photos/64f84cc61d4896b633fba77a/master/w_1600%2Cc_limit/The%2520art%2520deco%2520inspired%2520de%25CC%2581cor%2520of%2520CIRQA%25201960%2520.jpg" alt="Restaurant Image">
        <div class="p-2">
            <h2 class="text-xl font-bold mb-2">Restaurant Name</h2>
            <p class="text-gray-600 mb-2">Cuisine Type</p>
            <div class="flex items-center mb-2">
                <span class="text-yellow-500">★★★★☆</span>
                <span class="ml-2 text-gray-600">(120)</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-gray-800 font-bold">$20 for two</span>
                <button class="text-white bg-orange-500 px-4 py-2 rounded-full hover:bg-orange-600"><a href="menu.html">Order</a></button>
            </div>
        </div>
    </div>

      <!-- Card 3 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden p-4 md:px-5 lg:px-2">
        <img class="w-full h-48 object-cover" src="https://assets.architecturaldigest.in/photos/64f84cc61d4896b633fba77a/master/w_1600%2Cc_limit/The%2520art%2520deco%2520inspired%2520de%25CC%2581cor%2520of%2520CIRQA%25201960%2520.jpg" alt="Restaurant Image">
        <div class="p-2">
            <h2 class="text-xl font-bold mb-2">Restaurant Name</h2>
            <p class="text-gray-600 mb-2">Cuisine Type</p>
            <div class="flex items-center mb-2">
                <span class="text-yellow-500">★★★★☆</span>
                <span class="ml-2 text-gray-600">(120)</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-gray-800 font-bold">$20 for two</span>
                <button class="text-white bg-orange-500 px-4 py-2 rounded-full hover:bg-orange-600"><a href="menu.html">Order</a></button>
            </div>
        </div>
    </div>

  </div>
</section>






   <!-- food items -->

   <section class="my-2 max-w-screen-xl mx-auto px-4 lg:my-8">
   <h1 class="text-3xl font-bold text-gray-800 text-center justify-center p-4 mb-4">Recommended</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
        <div class="bg-white border border-gray-100 transition transform duration-700 hover:shadow-xl hover:scale-105 p-4 rounded-lg relative">
            <img class="w-full h-64 object-cover mx-auto transform transition duration-300 hover:scale-105" src="https://www.cnet.com/a/img/resize/36e8e8fe542ad9af413eb03f3fbd1d0e2322f0b2/hub/2023/02/03/afedd3ee-671d-4189-bf39-4f312248fb27/gettyimages-1042132904.jpg?auto=webp&fit=crop&height=1200&width=1200" alt="" />
            <div class="flex flex-col items-center my-3 space-y-2">
                <h1 class="text-gray-900 poppins text-lg">Hot Dog</h1>
                <p class="text-gray-500 poppins text-sm text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, excepturi pariatur. Neque veniam omnis dolor tempora debitis dolores tenetur, maiores nemo doloremque eligendi facilis</p>
                <h2 class="text-gray-900 poppins text-2xl font-bold">5$</h2>
                <button class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-2 focus:outline-none poppins rounded-full mt-24 transform transition duration-300 hover:scale-105" onclick="">Order Now</button>
            </div>
        </div>

        <div class="bg-white border border-gray-100 transition transform duration-700 hover:shadow-xl hover:scale-105 p-4 rounded-lg relative">
            <img class="w-full h-64 object-cover mx-auto transform transition duration-300 hover:scale-105" src="https://www.cnet.com/a/img/resize/36e8e8fe542ad9af413eb03f3fbd1d0e2322f0b2/hub/2023/02/03/afedd3ee-671d-4189-bf39-4f312248fb27/gettyimages-1042132904.jpg?auto=webp&fit=crop&height=1200&width=1200" alt="" />
            <div class="flex flex-col items-center my-3 space-y-2">
                <h1 class="text-gray-900 poppins text-lg">Hot Dog</h1>
                <p class="text-gray-500 poppins text-sm text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, excepturi pariatur. Neque veniam omnis dolor tempora debitis dolores tenetur, maiores nemo doloremque eligendi facilis</p>
                <h2 class="text-gray-900 poppins text-2xl font-bold">5$</h2>
                <button class="bg-orange-500  hover:bg-orange-600 text-white px-8 py-2 focus:outline-none poppins rounded-full mt-24 transform transition duration-300 hover:scale-105" onclick="">Order Now</button>
            </div>
        </div>

        <div class="bg-white border border-gray-100 transition transform duration-700 hover:shadow-xl hover:scale-105 p-4 rounded-lg relative">
            <img class="w-full h-64 object-cover mx-auto transform transition duration-300 hover:scale-105" src="https://www.cnet.com/a/img/resize/36e8e8fe542ad9af413eb03f3fbd1d0e2322f0b2/hub/2023/02/03/afedd3ee-671d-4189-bf39-4f312248fb27/gettyimages-1042132904.jpg?auto=webp&fit=crop&height=1200&width=1200" alt="" />
            <div class="flex flex-col items-center my-3 space-y-2">
                <h1 class="text-gray-900 poppins text-lg">Hot Dog</h1>
                <p class="text-gray-500 poppins text-sm text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, excepturi pariatur. Neque veniam omnis dolor tempora debitis dolores tenetur, maiores nemo doloremque eligendi facilis</p>
                <h2 class="text-gray-900 poppins text-2xl font-bold">5$</h2>
                <button class="bg-orange-500  hover:bg-orange-600 text-white px-8 py-2 focus:outline-none poppins rounded-full mt-24 transform transition duration-300 hover:scale-105" onclick="">Order Now</button>
            </div>
        </div>
        
     
    </div>
</section>

<!-- footerr -->
<footer class="bg-orange-500 text-white p-8">
  <div class="container mx-auto ">
      <div class="flex flex-wrap justify-between">

          <div class="w-full md:w-1/4 mb-6 md:mb-0">
              <h2 class="text-lg font-semibold mb-4">Company</h2>
              <ul>
                  <li><a href="#" class="hover:underline">random content</a></li>
                  <li><a href="#" class="hover:underline">random content</a></li>
              </ul>
          </div>

          <!-- Follow Us -->
          <div class="w-full md:w-1/4 mb-6 md:mb-0">
              <h2 class="text-lg font-semibold mb-4">FOLLOW US</h2>
              <ul>
                  <li><a href="#" class="hover:underline">Instagram</a></li>
                  <li><a href="#" class="hover:underline">Facebook</a></li>
              </ul>
          </div>

          <!-- Follow Us (Duplicate Section) -->
          <div class="w-full md:w-1/4 mb-6 md:mb-0">
              <h2 class="text-lg font-semibold mb-4">FOLLOW US</h2>
              <ul>
                  <li><a href="#" class="hover:underline">Instagram</a></li>
                  <li><a href="#" class="hover:underline">Facebook</a></li>
              </ul>
          </div>

          <!-- Legal -->
          <div class="w-full md:w-1/4">
              <h2 class="text-lg font-semibold mb-4">LEGAL</h2>
              <ul>
                  <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                  <li><a href="#" class="hover:underline">Terms & Conditions</a></li>
              </ul>
          </div>
      </div>

      <!-- Copyright Notice -->
      <div class="md:text-center  mt-8">
          <p class="text-sm text-white">&copy; 2024 Company Name. All rights reserved.</p>
      </div>
  </div>
</footer>



<script src="home.js"></script>
    
</body>
</html>