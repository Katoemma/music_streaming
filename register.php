<?php include 'controllers/users.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Audio Cloud App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100" style="background-image: url(https://wallpaperaccess.com/full/5023376.jpg);background-repeat: no-repeat; background-size: cover;">
    <div class="flex justify-center items-center min-h-screen">
        <div class="bg-white p-8 rounded-xl shadow-red shadow-2xl w-96 text-white" style="background: rgba(0, 0, 0, 0.7);">
            <h2 class="text-red-600 text-2xl font-bold mb-4 text-center">Sign Up</h2>
            <?php include 'validation/message.php' ?>
            <hr class="mb-4 border-2 border-red-700 rounded-full">
            <form method="post" action="register.php">
                <div class="mb-4">
                    <label for="email" class="block text-white text-sm font-bold mb-2">First Name</label>
                    <input type="text" id="email" name="fname" value="<?php echo $fname ?>" class="bg-gray-800 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Enter first name">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-white text-sm font-bold mb-2">Last Name</label>
                    <input type="text" id="email" name="lname" value="<?php echo $lname ?>" class="bg-gray-800 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Enter last name">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-white text-sm font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo  $email ?>" class="bg-gray-800 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your email">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-white text-sm font-bold mb-2">Password</label>
                    <input type="password" id="password" name="password" value="<?php echo $password ?>" class="bg-gray-800 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your password">
                </div>
                <div class="mb-6">
                    <label for="confirm-password" class="block text-white text-sm font-bold mb-2">Confirm Password</label>
                    <input type="password" id="confirm-password" name="c-pass" value="<?php echo $c_pass ?>" class="bg-gray-800 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Confirm your password">
                </div>
                <div class="flex flex-col items-center">
                    <button type="submit" name="register_btn" class="w-full bg-red-700 hover:bg-red-600 text-white font-semibold py-2 px-8 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Sign Up</button>
                </div>
            </form>
            <p class="text-white text-sm mt-4">Already have an account? <a href="login.php" class="text-red-700 hover:underline">Log in here</a></p>
        </div>
    </div>
</body>
</html>
