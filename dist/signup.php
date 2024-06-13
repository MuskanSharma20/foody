<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <!-- Link to Tailwind CSS -->
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="flex flex-col md:flex-row min-h-screen">

        <!-- Left side  -->
        <div class="hidden md:flex items-center justify-center w-full md:w-1/2 ">
            <img src="https://images.unsplash.com/photo-1550547660-d9450f859349?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="h-64 md:h-screen w-full object-cover">
        </div>
    
        <!-- Right side (Signup Form) -->
        <div class="flex items-center justify-center w-full md:w-1/2 min-h-screen">
       <div class="w-full max-w-md  rounded-lg shadow-2xl border-2 p-6 m-4 " >

                <h2 class="text-2xl font-bold text-center">Sign Up</h2>
                <form action="#" method="POST" >
                    <div class="space-y-4">
                        <div class="py-4">
                            <label for="name" class="block text-sm font-bold text-gray-700">Name</label>
                            <input id="name" name="name" type="text" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="py-4">
                            <label for="email" class="block text-sm font-bold text-gray-700">Email address</label>
                            <input id="email" name="email" type="email" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="py-4">
                            <label for="password" class="block text-sm font-bold text-gray-700">Password</label>
                            <input id="password" name="password" type="password" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="py-4">
                            <label for="password-confirm" class="block text-sm font-bold text-gray-700">Confirm Password</label>
                            <input id="password-confirm" name="password-confirm" type="password" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>
                    <div class="py-4">
                        <button type="submit" class="w-full py-2 font-bold text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sign Up</button>
                    </div>
                    <p class="text-sm text-center text-gray-600">Already have an account? <a href="signin.php" class="font-medium text-indigo-600 hover:text-indigo-500">Sign in</a></p>
                </form>
            </div>
        </div>
    </div>
    
    
</body>
</html>
