<?php 
require "./db/config.php";
require "./utilities/func/auth.php";

if (isset($_SESSION['username'])) {
    header("Location: main/?page=dashboard");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    login($_POST['username'], $_POST['password']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>
    <div class="w-full min-h-screen grid place-items-center bg-[#f7f9f7]">
        <div class="bg-white rounded-2xl flex flex-col justify-center px-4 py-12 lg:flex-none lg:px-6 xl:px-10">
            <div class="w-full max-w-[280px] mx-auto">
                <div class="text-center">
                    <img src="https://placehold.co/400" alt="" class="w-14 h-14 mx-auto">
                    <h2 class="mt-6 text-2xl font-bold text-neutral-600">Masuk</h2>
                    <p class="text-sm text-black/50 mt-2">Admin Panel Sistem Pemesanan Toko Bangunan Adi</p>
                </div>

                <div class="mt-8">
                    <div class="mt-6">
                        <form action="#" method="POST" class="space-y-6">
                            <div>
                                <label for="username" class="block text-sm text-neutral-600">Username</label>
                                <div class="mt-1">
                                    <input id="username" name="username" type="text" required="" placeholder="Masukan username" class="block w-full text-sm px-5 py-2.5 text-base placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg text-neutral-600 bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                </div>
                            </div>

                            <div>
                                <label for="password" class="block text-sm text-neutral-600">Password</label>
                                <div class="mt-1">
                                    <input id="password" name="password" type="password" required="" placeholder="Masukan password" class="block w-full text-sm px-5 py-2.5 text-base placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg text-neutral-600 bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                </div>
                            </div>


                            <div>
                                <button type="submit" class="flex items-center justify-center text-sm w-full px-10 py-2.5 text-base font-bold tracking-tight text-center text-white transition duration-500 ease-in-out transform bg-black/90 rounded-xl hover:bg-black/80 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>