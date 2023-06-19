<?php include 'includes/header.php'?>
<div class="h-screen p-6 relative md:pt-32 pb-32 pt-12" style="background:url(https://www.danbairdandhomemadesin.net/wp-content/uploads/2020/12/music-hero.jpg)">
    <div class="p-4 bg-white rounded-lg" >
        <h2 class="text-2xl font-bold mb-4">Playlist Management</h2>

        <!-- Search Bar -->
        <div class="mb-4">
            <input
            type="text"
            class="w-96 px-4 py-2 border border-gray-300 rounded-lg"
            placeholder="Search playlists..."
            />
        </div>

        <!-- Playlist List -->
        <div class="flex flex-col">
            <!-- Playlist Item -->
            <?php for ($i=0; $i < 5; $i++):?>
                <div class="flex items-center justify-between py-2 border-b border-gray-300">
                    <div>
                        <h3 class="text-lg font-medium">Playlist Title</h3>
                        <p class="text-sm text-gray-600">Created by Creator Name</p>
                    </div>
                    <div>
                        <!-- View Playlist Button -->
                        <button class="px-4 py-2 rounded bg-blue-500 text-white mr-2">View</button>
                        <!-- Edit Playlist Button -->
                        <button class="px-4 py-2 rounded bg-green-500 text-white mr-2">Edit</button>
                        <!-- Delete Playlist Button -->
                        <button class="px-4 py-2 rounded bg-red-500 text-white">Delete</button>
                    </div>
                </div>
            <?php endfor ?>
            <!-- End of Playlist Item -->

            <!-- Repeat the above playlist item structure for each playlist -->

        </div>

        <!-- Bulk Actions -->
        <div class="mt-4">
            <div class="flex items-center">
            <input type="checkbox" class="form-checkbox" />
            <span class="ml-2">Select All</span>
            </div>
            <div class="flex mt-2">
            <!-- Delete Selected Playlists Button -->
            <button class="px-4 py-2 rounded bg-red-500 text-white">Delete Selected</button>
            <!-- Update Selected Playlists Button -->
            <button class="px-4 py-2 rounded bg-green-500 text-white ml-2">Update Selected</button>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php' ?>