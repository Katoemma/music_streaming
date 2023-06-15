<?php include 'includes/header.php'?>
<!-- Single Category Page Content -->
<div class="relative w-full h-screen" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFIOctdufLuoQuSn5yV4qI5a-ZDky0jDWACg&usqp=CAU);background-repeat: no-repeat; background-size: cover;">
        <div class="relative z-10 mx-auto px-4 py-4 h-full" style="background: rgba(0,0, 0, 0.5);">
            <h1 class="text-white text-3xl font-bold mb-8">Ugandan Music</h1>
            <div class="flex flex-col md:flex-row gap-4">
                <!-- Audio Item 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden w-64 p-4">
                    <h3 class="text-lg font-semibold">Nana</h3>
                    <p class="text-gray-500">Joshua Baraka</p>
                    <audio controls class="w-full mt-4 rounded-lg">
                        <source src="audio1.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>

                <!-- Audio Item 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden w-64 p-4">
                    <h3 class="text-lg font-semibold">Audio Title 2</h3>
                    <p class="text-gray-500">Artist Name</p>
                    <audio controls class="w-full mt-4 rounded-lg bg-red-900">
                        <source src="audio2.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <!-- Add more audio items here -->
            </div>
        </div>
    </div>

 <?php include 'includes/footer.php'?>