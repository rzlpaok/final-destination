<main class="p-4 md:p-8">
        <!-- Header Section -->
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold tracking-tight headline text-gray-900">Manajemen Reservasi</h1>
                <p class="text-gray-500">Lihat dan buat reservasi PlayStation baru.</p>
            </div>
            <!-- Add Reservation Button -->
            <button data-modal-target="reservation-modal" data-modal-toggle="reservation-modal" class="inline-flex items-center px-4 py-2 bg-[#29ABE2] text-white rounded-md hover:bg-[#1a8ac5] focus:outline-none focus:ring-2 focus:ring-[#29ABE2]">
                <i data-lucide="plus-circle" class="w-5 h-5 mr-2"></i>
                <span class="hidden sm:inline">Tambah Reservasi</span>
                <span class="sm:hidden">Baru</span>
            </button>
        </div>

        <!-- Desktop Table -->
        <div class="hidden md:block border rounded-lg bg-white">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">Pelanggan</th>
                        <th scope="col" class="px-6 py-3">Stasiun</th>
                        <th scope="col" class="px-6 py-3">Tanggal</th>
                        <th scope="col" class="px-6 py-3">Waktu</th>
                        <th scope="col" class="px-6 py-3 text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4 font-medium text-gray-900">John Doe</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <i data-lucide="gamepad-2" class="w-4 h-4 text-gray-500"></i>
                                <div>
                                    <p>Stasiun 1</p>
                                    <p class="text-xs text-gray-500">PlayStation 5</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">Senin, 10 Juli 2025</td>
                        <td class="px-6 py-4">14:00 (2 jam)</td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200">Dikonfirmasi</span>
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4 font-medium text-gray-900">Jane Smith</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <i data-lucide="gamepad-2" class="w-4 h-4 text-gray-500"></i>
                                <div>
                                    <p>Stasiun 2</p>
                                    <p class="text-xs text-gray-500">Xbox Series X</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">Selasa, 11 Juli 2025</td>
                        <td class="px-6 py-4">16:00 (1 jam)</td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 border border-green-200">Selesai</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Mobile Card List -->
        <div class="md:hidden grid gap-4">
            <div class="bg-white rounded-lg shadow p-4">
                <div class="flex justify-between items-start">
                    <p class="font-semibold text-gray-900">John Doe</p>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200">Dikonfirmasi</span>
                </div>
                <div class="text-sm text-gray-500 space-y-1 mt-2">
                    <p><span class="font-medium text-gray-900">Stasiun 1</span> (PlayStation 5)</p>
                    <p>Senin, 10 Juli 2025</p>
                    <p>14:00 - Durasi: 2 jam</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow p-4">
                <div class="flex justify-between items-start">
                    <p class="font-semibold text-gray-900">Jane Smith</p>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 border border-green-200">Selesai</span>
                </div>
                <div class="text-sm text-gray-500 space-y-1 mt-2">
                    <p><span class="font-medium text-gray-900">Stasiun 2</span> (Xbox Series X)</p>
                    <p>Selasa, 11 Juli 2025</p>
                    <p>16:00 - Durasi: 1 jam</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Reservation Form Modal -->
    <div id="reservation-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900 headline">Buat Reservasi Baru</h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="reservation-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Tutup modal</span>
                    </button>
                </div>
                <div class="p-4 md:p-5">
                    <form class="space-y-4">
                        <div>
                            <label for="customer-name" class="block mb-2 text-sm font-medium text-gray-900">Nama Pelanggan</label>
                            <input type="text" id="customer-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#29ABE2] focus:border-[#29ABE2] block w-full p-2.5" placeholder="Masukkan nama pelanggan" required />
                        </div>
                        <div>
                            <label for="station" class="block mb-2 text-sm font-medium text-gray-900">Stasiun</label>
                            <select id="station" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#29ABE2] focus:border-[#29ABE2] block w-full p-2.5">
                                <option value="">Pilih stasiun</option>
                                <option value="1">Stasiun 1 (PlayStation 5)</option>
                                <option value="2">Stasiun 2 (Xbox Series X)</option>
                            </select>
                        </div>
                        <div>
                            <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Tanggal</label>
                            <input type="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#29ABE2] focus:border-[#29ABE2] block w-full p-2.5" required />
                        </div>
                        <div>
                            <label for="time-slot" class="block mb-2 text-sm font-medium text-gray-900">Waktu</label>
                            <input type="time" id="time-slot" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#29ABE2] focus:border-[#29ABE2] block w-full p-2.5" required />
                        </div>
                        <div>
                            <label for="duration" class="block mb-2 text-sm font-medium text-gray-900">Durasi (jam)</label>
                            <input type="number" id="duration" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#29ABE2] focus:border-[#29ABE2] block w-full p-2.5" placeholder="Masukkan durasi" required />
                        </div>
                        <button type="submit" class="w-full text-white bg-[#29ABE2] hover:bg-[#1a8ac5] focus:ring-4 focus:outline-none focus:ring-[#29ABE2] font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>