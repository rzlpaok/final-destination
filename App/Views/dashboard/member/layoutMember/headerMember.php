<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentGo Web</title>
    <meta name="description" content="Tujuan utama untuk rental PlayStation, makanan lezat, dan waktu yang menyenangkan. Pesan tempat Anda, pesan online, dan dapatkan rekomendasi yang dipersonalisasi!">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
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

        .bg-grid-pattern {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' viewBox='0 0 40 40'%3E%3Cpath d='M0.5 40V0.5H40' fill='none' stroke='rgba(0,0,0,0.1)'/%3E%3C/svg%3E");
        }
    </style>
</head>

<body class="antialiased bg-[#F0F2F5]">
    <nav class="bg-[#F0F2F5] border-b border-gray-200">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="/member" class="flex items-center space-x-2 text-2xl font-bold text-[#29ABE2] font-['Space_Grotesk']">
                    <i data-lucide="gamepad-2" class="h-6 w-6"></i>
                    <span>RentGo</span>
                </a>
                <button data-collapse-toggle="navbar-menu" type="button" class="md:hidden text-[#29ABE2] focus:outline-none" aria-controls="navbar-menu" aria-expanded="false">
                    <i data-lucide="menu" class="h-6 w-6"></i>
                </button>
                <div class="hidden md:flex space-x-6" id="navbar-menu">
                    <a href="/member" class="text-[#29ABE2] hover:text-[#F47920] font-medium">Beranda</a>
                    <a href="/member/pesan-sesi" class="text-[#29ABE2] hover:text-[#F47920] font-medium">Pesan Sesi</a>
                    <a href="/member/menu" class="text-[#29ABE2] hover:text-[#F47920] font-medium">Menu</a>
                    <a href="/member/rekomendasi" class="text-[#29ABE2] hover:text-[#F47920] font-medium">rekomendasi</a>
                    <a href="/logout" class="text-[#29ABE2] hover:text-[#F47920] font-medium">Logout</a>
                </div>
            </div>
            <div class="md:hidden hidden mt-4" id="navbar-menu-mobile">
                <div class="flex flex-col space-y-4">
                    <a href="/member" class="text-[#29ABE2] hover:text-[#F47920] font-medium">Beranda</a>
                    <a href="/member/pesan-sesi" class="text-[#29ABE2] hover:text-[#F47920] font-medium">Pesan Sesi</a>
                    <a href="/member/menu" class="text-[#29ABE2] hover:text-[#F47920] font-medium">Menu</a>
                    <a href="/member/rekomendasi-" class="text-[#29ABE2] hover:text-[#F47920] font-medium">rekomendasi</a>
                    <a href="/logout" class="text-[#29ABE2] hover:text-[#F47920] font-medium">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="flex flex-col min-h-screen">