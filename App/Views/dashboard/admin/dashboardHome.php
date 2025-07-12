<main class="p-4 md:p-8">
    <div class="flex flex-col gap-8">
        <!-- Dashboard Header -->
        <div>
            <h1 class="text-3xl font-bold tracking-tight headline text-gray-900">Dasbor</h1>
            <p class="text-gray-500">Selamat datang kembali! Berikut adalah gambaran real-time bisnis Anda.</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
            <!-- Card 1: Total Pendapatan -->
            <div class="bg-white rounded-lg shadow p-4">
                <div class="flex items-center justify-between pb-2">
                    <h3 class="text-sm font-medium text-gray-900">Total Pendapatan (Bulan Ini)</h3>
                    <i data-lucide="dollar-sign" class="w-4 h-4 text-gray-500"></i>
                </div>
                <div class="text-2xl font-bold text-gray-900">Rp 5.000.000</div>
                <p class="text-xs text-gray-500">Dari pesanan yang selesai</p>
            </div>
            <!-- Card 2: Sesi Aktif -->
            <div class="bg-white rounded-lg shadow p-4">
                <div class="flex items-center justify-between pb-2">
                    <h3 class="text-sm font-medium text-gray-900">Sesi Aktif</h3>
                    <i data-lucide="gamepad-2" class="w-4 h-4 text-gray-500"></i>
                </div>
                <div class="text-2xl font-bold text-gray-900">3</div>
                <p class="text-xs text-gray-500">3 sedang bermain PS5</p>
            </div>
            <!-- Card 3: Pesanan Hari Ini -->
            <div class="bg-white rounded-lg shadow p-4">
                <div class="flex items-center justify-between pb-2">
                    <h3 class="text-sm font-medium text-gray-900">Pesanan Hari Ini</h3>
                    <i data-lucide="list-checks" class="w-4 h-4 text-gray-500"></i>
                </div>
                <div class="text-2xl font-bold text-gray-900">+5</div>
                <p class="text-xs text-gray-500">Total pesanan masuk hari ini</p>
            </div>
            <!-- Card 4: Pesanan Selesai -->
            <div class="bg-white rounded-lg shadow p-4">
                <div class="flex items-center justify-between pb-2">
                    <h3 class="text-sm font-medium text-gray-900">Pesanan Selesai (Bulan Ini)</h3>
                    <i data-lucide="package" class="w-4 h-4 text-gray-500"></i>
                </div>
                <div class="text-2xl font-bold text-gray-900">20</div>
                <p class="text-xs text-gray-500">Total pesanan selesai</p>
            </div>
        </div>

        <!-- Recent Activity Card -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-4 md:p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-bold headline text-gray-900">Aktivitas Terbaru</h2>
                        <p class="text-sm text-gray-500">Catatan pesanan dan sesi terbaru. Kelola status pesanan di sini.</p>
                    </div>
                    <i data-lucide="activity" class="w-6 h-6 text-gray-500"></i>
                </div>
            </div>
            <div class="p-4 md:p-6">
                <!-- Desktop Table -->
                <div class="hidden md:block">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">Pelanggan</th>
                                <th scope="col" class="px-6 py-3">Stasiun/Meja</th>
                                <th scope="col" class="px-6 py-3">Total</th>
                                <th scope="col" class="px-6 py-3 text-center">Status</th>
                                <th scope="col" class="px-6 py-3 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 font-medium text-gray-900">John Doe</td>
                                <td class="px-6 py-4">Meja 1</td>
                                <td class="px-6 py-4">Rp 150.000</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-500/20 text-amber-700 border border-amber-500/20">Diproses</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="relative" data-dropdown-toggle="dropdown-1">
                                        <button class="p-1 text-gray-500 rounded-full hover:bg-gray-100">
                                            <i data-lucide="more-horizontal" class="w-4 h-4"></i>
                                            <span class="sr-only">Toggle menu</span>
                                        </button>
                                        <div id="dropdown-1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                            <div class="px-4 py-2 text-sm font-medium text-gray-900">Ubah Status</div>
                                            <ul class="py-2 text-sm text-gray-700">
                                                <li>
                                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Tandai Selesai</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-red-600">Batalkan</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 font-medium text-gray-900">Jane Smith</td>
                                <td class="px-6 py-4">Meja 2</td>
                                <td class="px-6 py-4">Rp 200.000</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-500/20 text-green-700 border border-green-500/20">Selesai</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="relative" data-dropdown-toggle="dropdown-2">
                                        <button class="p-1 text-gray-500 rounded-full hover:bg-gray-100" disabled>
                                            <i data-lucide="more-horizontal" class="w-4 h-4"></i>
                                            <span class="sr-only">Toggle menu</span>
                                        </button>
                                        <div id="dropdown-2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                            <div class="px-4 py-2 text-sm font-medium text-gray-900">Ubah Status</div>
                                            <ul class=" pyruvate-2 text-sm text-gray-700">
                                                <li>
                                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100" disabled>Tandai Selesai</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-red-600" disabled>Batalkan</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Card List -->
                <div class="md:hidden grid gap-4">
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex justify-between items-start">
                            <div class="space-y-1">
                                <p class="font-semibold text-gray-900">John Doe</p>
                                <p class="text-sm text-gray-500">Meja 1 - Rp 150.000</p>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-500/20 text-amber-700 border border-amber-500/20">Diproses</span>
                            </div>
                            <div class="relative" data-dropdown-toggle="dropdown-mobile-1">
                                <button class="p-1 text-gray-500 rounded-full hover:bg-gray-100">
                                    <i data-lucide="more-horizontal" class="w-4 h-4"></i>
                                    <span class="sr-only">Toggle menu</span>
                                </button>
                                <div id="dropdown-mobile-1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                    <div class="px-4 py-2 text-sm font-medium text-gray-900">Ubah Status</div>
                                    <ul class="py-2 text-sm text-gray-700">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Tandai Selesai</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-red-600">Batalkan</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex justify-between items-start">
                            <div class="space-y-1">
                                <p class="font-semibold text-gray-900">Jane Smith</p>
                                <p class="text-sm text-gray-500">Meja 2 - Rp 200.000</p>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-500/20 text-green-700 border border-green-500/20">Selesai</span>
                            </div>
                            <div class="relative" data-dropdown-toggle="dropdown-mobile-2">
                                <button class="p-1 text-gray-500 rounded-full hover:bg-gray-100" disabled>
                                    <i data-lucide="more-horizontal" class="w-4 h-4"></i>
                                    <span class="sr-only">Toggle menu</span>
                                </button>
                                <div id="dropdown-mobile-2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                    <div class="px-4 py-2 text-sm font-medium text-gray-900">Ubah Status</div>
                                    <ul class="py-2 text-sm text-gray-700">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100" disabled>Tandai Selesai</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-red-600" disabled>Batalkan</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>