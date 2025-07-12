<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $model['title']?></title>
    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Flowbite CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.css" rel="stylesheet" />
    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@0.441.0/dist/umd/lucide.min.js"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&family=Inter:wght@400;500;700&display=swap">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F0F2F5;
        }
        .headline {
            font-family: 'Space Grotesk', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen">
    <!-- Sidebar and Main Content -->
    <div class="flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen bg-white border-r border-gray-200 transition-transform -translate-x-full md:translate-x-0">
            <div class="h-full px-3 py-4 overflow-y-auto">
                <!-- Sidebar Content (Simulated) -->
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="/admin/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-primary hover:text-white group">
                            <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                            <span class="ml-3">Dasbor</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/console" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-primary hover:text-white group">
                            <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                            <span class="ml-3">console</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/pesanan" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-primary hover:text-white group">
                            <i data-lucide="package" class="w-5 h-5"></i>
                            <span class="ml-3">Pesanan</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/pelanggan" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-primary hover:text-white group">
                            <i data-lucide="users" class="w-5 h-5"></i>
                            <span class="ml-3">Pelanggan</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 md:ml-64">
            <!-- Header -->
            <header class="sticky top-0 z-10 flex items-center justify-between h-16 px-4 bg-white border-b border-gray-200 md:px-6">
                <button data-drawer-target="sidebar" data-drawer-toggle="sidebar" aria-controls="sidebar" type="button" class="inline-flex items-center p-2 text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                    <span class="sr-only">Buka sidebar</span>
                </button>
                <div class="ml-auto">
                    <!-- User Navigation (Simulated) -->
                    <div class="relative" data-dropdown-toggle="user-dropdown">
                        <button class="flex items-center space-x-2 text-gray-900 hover:text-primary">
                            <img src="<?= $model['photo'] ?>" alt="" class="w-8 h-8 rounded-full">
                            <span><?= $model['username'] ?></span>
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </button>
                        <div id="user-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <div class="px-4 py-3 text-sm text-gray-900">
                                <div><?= $model['username'] ?></div>
                                <div class="font-medium truncate"><?= $model['email'] ?></div>
                            </div>
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="user-dropdown">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Profil</a>
                                </li>
                                <li>
                                    <a href="/" class="block px-4 py-2 hover:bg-gray-100">Keluar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Dashboard Content -->
            
       

    