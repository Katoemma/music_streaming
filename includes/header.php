<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio Cloud App</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <!-- Add the following lines inside the <head> tag of your HTML file -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

</head>
<body class="bg-gray-100">
<!-- Navigation Bar -->
<nav class="bg-red-500 p-4">
    <div class="container mx-auto flex items-center justify-between">
        <div class="text-white text-lg font-semibold">Audio Cloud App</div>
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-white hover:text-gray-300 focus:outline-none">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <form class="hidden md:flex items-center">   
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
            </div>
        </form>
        <div class="hidden md:flex md:items-center">
            <a href="#" class="text-white mx-2 hover:text-gray-300">Home</a>
            <a href="#" class="text-white mx-2 hover:text-gray-300">Categories</a>
            <a href="#" class="text-white mx-2 hover:text-gray-300">Login</a>
            <a href="#" class="text-white mx-2 hover:text-gray-300">Register</a>

            <div class="group pl-4">
                <button class="text-2xl"><i class="fa fa-user text-white"></i></button>
                <div class="hidden absolute right-10 group-hover:block px-2 py-2 bg-gray-100 rounded-lg">
                    <a href="#" class="list-none px-12 mb-2 flex items-center gap-4"><i class="fa fa-music text-blue-600"></i> Playlists</a>
                    <hr>
                    <a href="#" class="list-none px-12 mb-2 flex items-center gap-4"><i class="fa fa-user-circle text-green-600"></i> Account</a>
                    <hr>
                    <a href="#" class="list-none px-12 mb-2 flex items-center gap-4"><i class="fa fa-cog text-purple-600"></i>Settings</a>
                    <hr>
                    <a href="#" class="list-none px-12 mb-2 flex text-red-600 font-semibold items-center gap-4"><i class="fa fa-sign-out"></i>Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div id="mobile-menu" class="hidden md:hidden">
        <form class="flex items-center">   
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
            </div>
        </form>
        <a href="#" class="block text-white mx-2 my-4 hover:text-gray-300">Home</a>
        <a href="#" class="block text-white mx-2 my-4 hover:text-gray-300">Browse</a>
        <a href="#" class="block text-white mx-2 my-4 hover:text-gray-300">Login</a>
        <a href="#" class="block text-white mx-2 my-4 hover:text-gray-300">Register</a>
    </div>
</nav>