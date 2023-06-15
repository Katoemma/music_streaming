<?php include 'includes/header.php' ?>

    <!-- Hero Section -->
    <section class="bg-gray-900 text-white py-16">
        <div class="p-4 container mx-auto flex flex-col items-center">
            <h1 class="text-5xl font-bold mb-4 text-center">Discover and Stream Audio</h1>
            <p class="text-xl mb-8">Explore a vast collection of audio files.</p>
            <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-8 py-3 rounded">Get Started</a>
        </div>
    </section>

    <!-- Featured Audio Section -->
    <section class="py-16 px-4 text-white" style="background-image: url(https://www.danbairdandhomemadesin.net/wp-content/uploads/2020/12/music-hero.jpg);">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold mb-8">Trending Audio</h2>
            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30" slides-per-view="4" autoplay-delay="2500" autoplay-disable-on-interaction="false">

            <?php $audio= [1,2,3,4];?>
            <?php for ($i=0; $i < count($audio); $i++):?>
                <!-- Featured Audio Card -->
                <swiper-slide class="bg-blue-700 shadow rounded-lg p-6">
                    <div class="flex justify-center mb-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFY49jz3WrpXMvfNBwHhb2foxcRysWIfsouw&usqp=CAU" alt="Audio Thumbnail" class="w-full h-48 rounded-lg">
                    </div>
                    <h3 class="text-black text-xl font-bold mb-2">Ndara</h3>
                    <p class="text-gray-100 mb-2">Demagneto</p>
                    <p class="text-gray-100 mb-4">Rnb</p>
                    <a href="#" class="bg-red-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded">Play</a>
                </swiper-slide>
                <!-- Featured Audio Card -->
            <?php endfor; ?>
            </swiper-container>
        </div>
    </section>

    <!-- Category Section -->
    <section class="bg-gray-200 py-16 px-4 text-white h-max" style="background-image: url(https://t4.ftcdn.net/jpg/05/73/66/73/360_F_573667383_c12BMaF9s2fckC1Xl1xvYH7ZoL1zuuFB.jpg); background-repeat: no-repeat; background-size: cover;">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold mb-8">Browse by Category</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <?php $category=[1,2,3,4];?>
                <!-- Category Card -->
                <?php for ($i=0; $i < count($category); $i++):?>
                <div class="flex flex-col shadow rounded-lg p-6 bg-gray-100">
                    <h3 class="text-gray-700 text-xl font-semibold mb-2">Category Name</h3>
                    <p class="text-gray-600">Description of the category.</p>
                    <a href="#" class="bg-red-500 hover:bg-red-200 text-white font-semibold px-4 py-2 rounded mt-4 w-1/2">Explore</a>
                </div>
                <?php endfor ?>
            </div>
        </div>
    </section>

    <!-- social, recently added and recommended section-->
    <section class="flex flex-col md:flex-row p-4 md:justify-center bg-gradient-to-bl from-pink-500 via-violet-600 to-indigo-900">
        <!-- socials -->
        <div class="flex flex-col p-4 w-96">
            <h1 class="text-2xl text-white font-serif font-bold text-center mb-2">Get Music Updates</h1>
            <!-- card -->
            <div class="flex flex-col gap-4 bg-white px-4 py-12 rounded-lg shadow-2xl">
                <p class="text-gray-400 text-md">
                    Studios are producing new music everyDay.
                </p>
                <p class="text-gray-800 text-md font-bold">
                    Don't miss out, We are social:
                </p>
                <!-- socials -->
                <div class="flex justify-center gap-4">
                    <i class="fa fa-facebook-square text-2xl text-blue-400"></i>
                    <i class="fa fa-instagram text-2xl text-red-400"></i>
                    <i class="fa fa-twitter-square text-2xl text-blue-400"></i>
                    <i class="fa fa-whatsapp text-2xl text-green-500"></i>
                    <i class="fa fa-google-plus-official text-2xl text-red-700"></i>
                </div>
            </div>
        </div>
        <!-- recently added -->
        <div class="flex flex-col p-4 w-96 ">
            <h1 class="text-2xl text-white font-serif font-bold text-center mb-2">Recently added Songs</h1>
            <!-- card -->
            <div class="flex flex-col gap-4 bg-white px-4 py-12 rounded-lg shadow-2xl">
                <?php $card = [1,2,3,4];?>
                <!-- audio song -->
                <?php for ($i=0; $i < count($card); $i++):?>
                <div class="flex">
                    <h1 class="p-2 bg-yellow-300 text-center text-white rounded-l-lg">1</h1>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMAXKmnYalIWQsbi8IhsFv2mQLSnZQUwWKCaOvqUkBuNPvFfBJiCAmN--1WTjgMABfVOg&usqp=CAU" class="w-24 h-18 rounded-r-lg" alt="">
                    <div class="flex flex-col px-2">
                        <h3 class="text-black font-semibold">Ndara</h3>
                        <h3 class="text-black font-semibold"><span class="text-red-600">By </span>Demagnento</h3>
                        <div class="flex gap-4 py-1">
                            <div class="flex bg-yellow-300 p-1 rounded-lg">
                                <h4 class="text-white">1000 views</h4>
                            </div>
                            <div class="flex bg-green-300 p-1 rounded-lg">
                                <h4 class="text-white">1000 <i class="fa fa-download"></i></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="border-2 rounded-full">
                <?php endfor ?>
               
            </div>
        </div>

        <!-- recoomende music -->
        <div class="flex flex-col p-4 w-96 ">
            <h1 class="text-2xl text-white font-serif font-bold text-center mb-2">Recommended Music</h1>
            <!-- card -->
            <div class="flex flex-col gap-4 bg-white px-4 py-12 rounded-lg shadow-2xl">
                <!-- audio song -->
                <?php for ($i=0; $i < count($card); $i++):?>
                <div class="flex">
                    <h1 class="p-2 bg-purple-300 text-center text-white rounded-l-lg">1</h1>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxw2ujHRxPSlt282Vqap2ZB73NDxrlXCbsY1ad_zAoLQ12VnVQs7jkixx0qWgANwfMdW4&usqp=CAU" class="w-24 h-18 rounded-r-lg" alt="">
                    <div class="flex flex-col px-2">
                        <h3 class="text-black font-semibold">Demagnento | Ndara</h3>
                        <h3 class="text-lg">Album: RnB</h3>
                        <div class="flex gap-4 py-1">
                            <div class="flex p-1 rounded-lg">
                                <h4 class="text-gray-600">Rating:</h4>
                            </div>
                            
                            <div class="flex items-center">
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </div>

                        </div>
                    </div>
                </div>
                <hr class="border-2 rounded-full">
                <?php endfor;?>
            </div>
        </div>

    </section>
    <?php include 'includes/footer.php' ?>


