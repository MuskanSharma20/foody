<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<header class="px-4">
        <nav class="w-full bg-slate-100 h-16 flex items-center justify-between px-4 md:px-6 shadow-xl lg:max-w-7xl mx-auto">
            <div class="text-2xl flex-grow">Logo</div>
          <div id="menu" class="menu elts md:static md:min-h-fit absolute min-h-[50vh] left-0 flex items-center justify-center w-full top-14 z-10 bg-slate-100 md:flex-grow-0 md:flex md:justify-center hidden md:flex transition-all duration-700 transform ">
                <ul class="md:flex-row flex flex-col gap-8 font-bold text-2xl md:text-lg md:flex md:gap-4">
                    <li class="mx-2 cursor-pointer"><a href="home.php">Home</a></li>
                    <li class="mx-2 cursor-pointer"><a href="menu.php">Menu</a></li>
                    <li class="mx-2 cursor-pointer"><a href="profilepage.php">Profile</a></li>
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


    <!-- Restaurant details -->
    <section class="px-4">
        <div class="max-w-7xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden mt-4 p-4 md:px-5 lg:px-2 ">
            <img class="w-full h-48 object-cover"
                src="https://assets.architecturaldigest.in/photos/64f84cc61d4896b633fba77a/master/w_1600%2Cc_limit/The%2520art%2520deco%2520inspired%2520de%25CC%2581cor%2520of%2520CIRQA%25201960%2520.jpg"
                alt="Restaurant Image">
            <div class="p-2">
                <h2 class="text-xl font-bold mb-2">Restaurant Name</h2>
                <p class="text-gray-600 mb-2">Cuisine Type</p>
                <div class="flex items-center mb-2">
                    <span class="text-yellow-500">★★★★☆</span>
                    <span class="ml-2 text-gray-600">(120)</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-800 font-bold">$20 for two</span>
                    <button class="text-white bg-orange-500 px-4 py-2 rounded-full hover:bg-orange-600">Order Now</button>
                </div>
            </div>
        </div>

    </section>


<!-- coupons -->

 
<section class="px-4 p-8">

    <div class="coupon-main-container mx-auto max-w-3xl relative">
        <div class="flex justify-between items-center space-x-2 p-4">
            <h2 class="text-center text-2xl font-bold">Deals For You</h2>
            <div class="flex space-x-2">
                <button id="coupon-prev-btn" class="bg-gray-800 text-white p-2 rounded-full disabled:bg-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                    </svg>
                </button>
                <button id="coupon-next-btn" class="bg-gray-800 text-white p-2 rounded-full disabled:bg-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                </button>
            </div>
        </div>
        
        <div class="overflow-x-auto flex flex-nowrap space-x-4 no-scrollbar" id="coupon-card-container">

  

        <div id="coupon-card-1" class="bg-orange-400 p-4 rounded-lg shadow-lg flex flex-col sm:flex-row items-center gap-4 max-w-md min-w-80">
            <div class="bg-white p-2 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="text-center sm:text-left">
                <h1 class="text-white font-bold">Items At ₹189</h1>
                <p class="text-white"> Ends in 2 hr</p>
            </div>
        </div>

        <div id="coupon-card-2" class="bg-orange-400 p-4 rounded-lg shadow-lg flex flex-col sm:flex-row items-center gap-4 max-w-md min-w-80">
            <div class="bg-white p-2 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="text-center sm:text-left">
                <h1 class="text-white font-bold">Items At ₹189</h1>
                <p class="text-white"> Ends in 2 hr</p>
            </div>
        </div>

        <div id="coupon-card-3" class="bg-orange-400 p-4 rounded-lg shadow-lg flex flex-col sm:flex-row items-center gap-4 max-w-md min-w-80">
            <div class="bg-white p-2 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="text-center sm:text-left">
                <h1 class="text-white font-bold">Items At ₹189</h1>
                <p class="text-white"> Ends in 2 hr</p>
            </div>
        </div>

        <div  id="coupon-card-4" class="bg-orange-400 p-4 rounded-lg shadow-lg flex flex-col sm:flex-row items-center gap-4 max-w-md min-w-80">
            <div class="bg-white p-2 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="text-center sm:text-left">
                <h1 class="text-white font-bold">Items At ₹189</h1>
                <p class="text-white"> Ends in 2 hr</p>
            </div>
        </div>
  
</div>
</div>
</section>


    <!-- recommended section -->
    <section class="py-6 px-4">
        <div class="max-w-7xl mx-auto lg:px-0">
    
            <!-- Pizza Section -->
            <h2 class="text-3xl font-bold mb-4 text-center">Pizza</h2>
    
            <!-- Card 1 - Onion Pizza -->
            <div class="card rounded-lg border p-4 mb-4 bg-white shadow-lg grid grid-cols-1 md:grid-cols-3 lg:grid-cols-12 gap-4">
                <div class="col-span-1 lg:col-span-2">
                    <img src="https://t2.gstatic.com/licensed-image?q=tbn:ANd9GcRRto3IlY56MlAIOAvXHvPEVxBDVzG1uz1zULEBYdJ-I4Aa-xOyPEVvv7fmIjLnxaOz" alt="burger image" class="w-full h-full object-cover rounded">
                </div>
                <div class="col-span-2 md:col-span-2 lg:col-span-10 flex flex-col justify-between">
                    <div>
                        <h5 class="text-2xl font-bold mb-2">Onion Pizza</h5>
                        <p class="text-gray-500 mb-4">Some description Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, nulla!</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <h6 class="text-2xl font-bold text-indigo-600">$220</h6>
                        <div class="flex items-center space-x-2">
                            <button class="decrement p-2 border rounded-full hover:bg-gray-200">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="stroke-gray-900">
                                    <path d="M4.5 9H13.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <input type="text" value="0" class="quantity w-10 text-center border rounded-full bg-gray-100">
                            <button class="increment p-2 border rounded-full hover:bg-gray-200">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="stroke-gray-900">
                                    <path d="M9 4.5V13.5M4.5 9H13.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="add-to-cart bg-orange-500 text-white py-2 px-4 rounded-full hover:bg-orange-600">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Card 2 - Capsicum Pizza -->
            <div class="card rounded-lg border p-4 mb-4 bg-white shadow-lg grid grid-cols-1 md:grid-cols-3 lg:grid-cols-12 gap-4">
                <div class="col-span-1 lg:col-span-2">
                    <img src="https://recipesblob.oetker.in/assets/d8a4b00c292a43adbb9f96798e028f01/1272x764/pizza-pollo-arrostojpg.jpg" alt="pizza image" class="w-full h-full object-cover rounded">
                </div>
                <div class="col-span-2 md:col-span-2 lg:col-span-10 flex flex-col justify-between">
                    <div>
                        <h5 class="text-2xl font-bold mb-2">Capsicum Pizza</h5>
                        <p class="text-gray-500 mb-4">Introducing our sleek round white portable speaker, the epitome of style and sound!</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <h6 class="text-2xl font-bold text-indigo-600">$220</h6>
                        <div class="flex items-center space-x-2">
                            <button class="decrement p-2 border rounded-full hover:bg-gray-200">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="stroke-gray-900">
                                    <path d="M4.5 9H13.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <input type="text" value="0" class="quantity w-10 text-center border rounded-full bg-gray-100">
                            <button class="increment p-2 border rounded-full hover:bg-gray-200">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="stroke-gray-900">
                                    <path d="M9 4.5V13.5M4.5 9H13.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="add-to-cart bg-orange-500 text-white py-2 px-4 rounded-full hover:bg-orange-600">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Soya Champ Section -->
            <h2 class="text-3xl font-bold m-4 p-4 text-center ">Soya Champ</h2>
    
            <!-- Card 3 - Soya Chaap -->
            <div class="card rounded-lg border p-4 mb-4 bg-white shadow-lg grid grid-cols-1 md:grid-cols-3 lg:grid-cols-12 gap-4">
                <div class="col-span-1 lg:col-span-2">
                    <img src="https://i.ndtvimg.com/i/2018-01/soya-chaap_620x350_51515566370.jpg" alt="soya chaap image" class="w-full h-full object-cover rounded">
                </div>
                <div class="col-span-2 md:col-span-2 lg:col-span-10 flex flex-col justify-between">
                    <div>
                        <h5 class="text-2xl font-bold mb-2">Soya Chaap</h5>
                        <p class="text-gray-500 mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, tempore?</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <h6 class="text-2xl font-bold text-indigo-600">$220</h6>
                        <div class="flex items-center space-x-2">
                            <button class="decrement p-2 border rounded-full hover:bg-gray-200">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="stroke-gray-900">
                                    <path d="M4.5 9H13.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <input type="text" value="0" class="quantity w-10 text-center border rounded-full bg-gray-100">
                            <button class="increment p-2 border rounded-full hover:bg-gray-200">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="stroke-gray-900">
                                    <path d="M9 4.5V13.5M4.5 9H13.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="add-to-cart bg-orange-500 text-white py-2 px-4 rounded-full hover:bg-orange-600">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Card 4 -->
            <div class="card rounded-lg border p-4 mb-4 bg-white shadow-lg grid grid-cols-1 md:grid-cols-3 lg:grid-cols-12 gap-4">
                <div class="col-span-1 lg:col-span-2">
                    <img src="https://blogscdn.thehut.net/wp-content/uploads/sites/478/2016/04/05105624/choco-malt-shake.jpg" alt="shake image" class="w-full h-full object-cover rounded">
                </div>
                <div class="col-span-2 md:col-span-2 lg:col-span-10 flex flex-col justify-between">
                    <div>
                        <h5 class="text-2xl font-bold mb-2">Afghani champ</h5>
                        <p class="text-gray-500 mb-4">Introducing our shakes</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <h6 class="text-2xl font-bold text-indigo-600">$220</h6>
                        <div class="flex items-center space-x-2">
                            <button class="decrement p-2 border rounded-full hover:bg-gray-200">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="stroke-gray-900">
                                    <path d="M4.5 9H13.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <input type="text" value="0" class="quantity w-10 text-center border rounded-full bg-gray-100">
                            <button class="increment p-2 border rounded-full hover:bg-gray-200">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="stroke-gray-900">
                                    <path d="M9 4.5V13.5M4.5 9H13.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="add-to-cart bg-orange-500 text-white py-2 px-4 rounded-full hover:bg-orange-600">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        </section>


<!-- slider cards -->
<section class="w-full py-6 sm:py-12 relative px-4">
    <div class="container mx-auto max-w-3xl relative">
      <div class="overflow-x-auto flex flex-nowrap space-x-4 no-scrollbar" id="card-container">
        <!-- Card 1 -->
        <div class="min-w-[300px] sm:max-w-[300px] bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="w-full h-16 sm:h-24 object-cover"> <!-- Adjusted height classes -->
          <div class="p-4">
            <h3 class="font-bold text-xl mb-2">Card Title 1</h3>
            <p class="text-gray-700">This is a description for card 1.</p>
          </div>
        </div>
  
        <div class="min-w-[300px] sm:max-w-[300px] bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="w-full h-16 sm:h-24 object-cover"> <!-- Adjusted height classes -->
          <div class="p-4">
            <h3 class="font-bold text-xl mb-2">Card Title 1</h3>
            <p class="text-gray-700">This is a description for card 1.</p>
          </div>
        </div>
  
        <div class="min-w-[300px] sm:max-w-[300px] bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="w-full h-16 sm:h-24 object-cover"> <!-- Adjusted height classes -->
          <div class="p-4">
            <h3 class="font-bold text-xl mb-2">Card Title 1</h3>
            <p class="text-gray-700">This is a description for card 1.</p>
          </div>
        </div>
  
        <div class="min-w-[300px] sm:max-w-[300px] bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="w-full h-16 sm:h-24 object-cover"> <!-- Adjusted height classes -->
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

    <script src="./order.js"></script>

</body>

</html>