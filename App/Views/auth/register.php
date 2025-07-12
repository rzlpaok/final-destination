<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?= BASE_URL ?>favicon.png" type="image/x-icon">
    <title><?= $model['title'] ?></title>
    
    <meta name="description"
        content="Buat akun Anda di RentGo untuk memesan sesi PlayStation, makanan lezat, dan menikmati pengalaman kafe gaming terbaik.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Space Grotesk', sans-serif;
        }
    </style>
</head>

<body class="antialiased bg-[#F0F2F5]">
    <div class="flex min-h-[calc(100vh-4rem)] items-center justify-center p-4">
        <div class="mx-auto w-full max-w-sm bg-white shadow-md rounded-lg">
            <div class="text-center p-6">
                <a href="/" class="mb-4 inline-flex items-center justify-center space-x-2">
                    <i data-lucide="gamepad-2" class="h-8 w-8 text-[#29ABE2]"></i>
                </a>
                <h2 class="text-2xl font-bold text-[#29ABE2]">Buat akun</h2>
                <p class="mt-2 text-gray-600">Masukkan informasi Anda untuk memulai dengan RentGo</p>
            </div>
            <div class="p-6">
                <form action="register/process" method="POST" class="space-y-4" enctype="multipart/form-data">
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="photo" class="block text-sm font-medium text-gray-700">Foto</label>
                        <input type="file" name="photo" id="photo" placeholder="photo"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <button type="submit" name="registerUser"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Register
                    </button>
                </form>
                <div class="mt-4 text-center text-sm">
                    Sudah punya akun?
                    <a href="/login" class="underline text-[#29ABE2] hover:text-[#F47920]">Masuk</a>

                    <br>
                    <a target="_blank" href="https://wbd.ms/share/v2/aHR0cHM6Ly93aGl0ZWJvYXJkLm1pY3Jvc29mdC5jb20vYXBpL3YxLjAvd2hpdGVib2FyZHMvcmVkZWVtLzcyZTgyMGU0NTEwMzQxMDU4NzQ0Mjg4YmFjMzgyYWMwX0JCQTcxNzYyLTEyRTAtNDJFMS1CMzI0LTVCMTMxRjQyNEUzRF85MDkwYjZlMi0zOTBmLTQ3MzUtYmE1Yy0yOTdiN2U4ZmIyNzg=">PENJELASAN STRUKTUR FOLDER</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
        });
    </script>
</body>

</html>