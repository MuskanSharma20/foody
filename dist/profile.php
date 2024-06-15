<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page </title>
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

    <section class="bg-orange-400 min-h-screen flex items-center justify-center px-4 md:px-6 lg:max-w-7xl mx-auto">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
            <div class="flex justify-center">
                <img src="https://marketplace.canva.com/EAFqNrAJpQs/1/0/1600w/canva-neutral-pink-modern-circle-shape-linkedin-profile-picture-WAhofEY5L1U.jpg" alt="Profile Picture" class="rounded-full h-24 w-24 object-cover">
            </div>
            <div class="text-center mt-4">
                <h1 class="text-xl font-bold">Name</h1>
                <p class="text-gray-500">Location</p>
            </div>
            <div class="mt-6">
                <form>
                    <table class="w-full">
                        <tbody>
                            <tr>
                                <td class="font-medium text-gray-500 px-4 py-2">FIRST NAME</td>
                                <td class="px-4 py-2">
                                    <input type="text" class="border border-gray-300 px-2 py-1 w-full rounded-md focus:outline-none focus:ring focus:border-blue-300" value="Random Name">
                                </td>
                            </tr>
                            <tr>
                                <td class="font-medium text-gray-500 px-4 py-2">LAST NAME</td>
                                <td class="px-4 py-2">
                                    <input type="text" class="border border-gray-300 px-2 py-1 w-full rounded-md focus:outline-none focus:ring focus:border-blue-300" value="Random Name">
                                </td>
                            </tr>
                            <tr>
                                <td class="font-medium text-gray-500 px-4 py-2">EMAIL</td>
                                <td class="px-4 py-2">
                                    <input type="email" class="border border-gray-300 px-2 py-1 w-full rounded-md focus:outline-none focus:ring focus:border-blue-300" value="johndoe@example.com">
                                </td>
                            </tr>
                            <tr>
                                <td class="font-medium text-gray-500 px-4 py-2">ADDRESS</td>
                                <td class="px-4 py-2">
                                    <input type="text" class="border border-gray-300 px-2 py-1 w-full rounded-md focus:outline-none focus:ring focus:border-blue-300" value="Amritsar">
                                </td>
                            </tr>
                            <tr>
                                <td class="font-medium text-gray-500 px-4 py-2">CONTACT NUMBER</td>
                                <td class="px-4 py-2">
                                    <input type="tel" class="border border-gray-300 px-2 py-1 w-full rounded-md focus:outline-none focus:ring focus:border-blue-300" value="9999998888">
                                </td>
                            </tr>
                            <tr>
                                <td class="font-medium text-gray-500 px-4 py-2">DOB</td>
                                <td class="px-4 py-2">
                                    <input type="date" class="border border-gray-300 px-2 py-1 w-full rounded-md focus:outline-none focus:ring focus:border-blue-300">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mt-4 text-center">
                        <button type="submit" class="bg-orange-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none">Save Changes</button>
                    </div>
                </form>
            </div>
          
        </div>
    </section>
 
    <script src="profile.js">
        </script>
</body>
</html>