<main class="p-4 md:p-8">
    <!-- Header Section -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold tracking-tight headline text-gray-900">Manajemen Menu</h1>
            <p class="text-gray-500">Tambah, edit, atau hapus item dari menu Anda.</p>
        </div>
        <!-- Add Menu Item Button -->
        <button data-modal-target="menu-modal" data-modal-toggle="menu-modal" class="inline-flex items-center px-4 py-2 bg-[#29ABE2] text-white rounded-md hover:bg-[#1a8ac5] focus:outline-none focus:ring-2 focus:ring-[#29ABE2]">
            <i data-lucide="plus-circle" class="w-5 h-5 mr-2"></i>
            <span class="hidden sm:inline">Tambah Item Baru</span>
            <span class="sm:hidden">Baru</span>
        </button>
    </div>

    <!-- Desktop Table -->
    <div class="hidden md:block border rounded-lg bg-white">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 w-[80px]">Gambar</th>
                    <th scope="col" class="px-6 py-3">Nama</th>
                    <th scope="col" class="px-6 py-3">Kategori</th>
                    <th scope="col" class="px-6 py-3 text-right">Harga</th>
                    <th scope="col" class="px-6 py-3 text-right w-[100px]">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b">
                    <td class="px-6 py-4">
                        <img src="https://via.placeholder.com/50" alt="Nasi Goreng" class="rounded-md object-cover" width="50" height="50" />
                    </td>
                    <td class="px-6 py-4 font-medium text-gray-900">Nasi Goreng</td>
                    <td class="px-6 py-4">Makanan</td>
                    <td class="px-6 py-4 text-right">Rp 25.000</td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2">
                            <button data-modal-target="menu-modal" data-modal-toggle="menu-modal" class="p-2 text-gray-500 hover:bg-gray-100 rounded-full">
                                <i data-lucide="edit" class="w-4 h-4"></i>
                                <span class="sr-only">Edit</span>
                            </button>
                            <button data-modal-target="delete-modal-1" data-modal-toggle="delete-modal-1" class="p-2 text-red-600 hover:bg-gray-100 rounded-full">
                                <i data-lucide="trash-2" class="w-4 h-4"></i>
                                <span class="sr-only">Hapus</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="bg-white border-b">
                    <td class="px-6 py-4">
                        <img src="https://via.placeholder.com/50" alt="Es Teh" class="rounded-md object-cover" width="50" height="50" />
                    </td>
                    <td class="px-6 py-4 font-medium text-gray-900">Es Teh</td>
                    <td class="px-6 py-4">Minuman</td>
                    <td class="px-6 py-4 text-right">Rp 10.000</td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2">
                            <button data-modal-target="menu-modal" data-modal-toggle="menu-modalthor" class="p-2 text-gray-500 hover:bg-gray-100 rounded-full">
                                <i data-lucide="edit" class="w-4 h-4"></i>
                                <span class="sr-only">Edit</span>
                            </button>
                            <button data-modal-target="delete-modal-2" data-modal-toggle="delete-modal-2" class="p-2 text-red-600 hover:bg-gray-100 rounded-full">
                                <i data-lucide="trash-2" class="w-4 h-4"></i>
                                <span class="sr-only">Hapus</span>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Mobile Card List -->
    <div class="md:hidden grid gap-4">
        <div class="bg-white rounded-lg shadow p-4">
            <div class="flex gap-4">
                <img src="https://via.placeholder.com/80" alt="Nasi Goreng" class="rounded-md object-cover aspect-square" width="80" height="80" />
                <div class="flex-1 space-y-1">
                    <p class="font-semibold text-gray-900">Nasi Goreng</p>
                    <p class="text-sm text-gray-500">Makanan</p>
                    <p class="font-bold text-[#29ABE2]">Rp 25.000</p>
                </div>
                <div class="flex flex-col gap-2">
                    <button data-modal-target="menu-modal" data-modal-toggle="menu-modal" class="p-2 text-gray-500 hover:bg-gray-100 rounded-full">
                        <i data-lucide="edit" class="w-4 h-4"></i>
                        <span class="sr-only">Edit</span>
                    </button>
                    <button data-modal-target="delete-modal-1" data-modal-toggle="delete-modal-1" class="p-2 text-red-600 hover:bg-gray-100 rounded-full">
                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                        <span class="sr-only">Hapus</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <div class="flex gap-4">
                <img src="https://via.placeholder.com/80" alt="Es Teh" class="rounded-md object-cover aspect-square" width="80" height="80" />
                <div class="flex-1 space-y-1">
                    <p class="font-semibold text-gray-900">Es Teh</p>
                    <p class="text-sm text-gray-500">Minuman</p>
                    <p class="font-bold text-[#29ABE2]">Rp 10.000</p>
                </div>
                <div class="flex flex-col gap-2">
                    <button data-modal-target="menu-modal" data-modal-toggle="menu-modal" class="p-2 text-gray-500 hover:bg-gray-100 rounded-full">
                        <i data-lucide="edit" class="w-4 h-4"></i>
                        <span class="sr-only">Edit</span>
                    </button>
                    <button data-modal-target="delete-modal-2" data-modal-toggle="delete-modal-2" class="p-2 text-red-600 hover:bg-gray-100 rounded-full">
                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                        <span class="sr-only">Hapus</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Menu Form Modal -->
    <div id="menu-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top chamados-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900 headline">Tambah Item Menu Baru</h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="menu-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="1 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Tutup modal</span>
                    </button>
                </div>
                <div class="p-4 md:p-5">
                    <form class="space-y-4">
                        <div>
                            <label for="menu-name" class="block mb-2 text-sm font-medium text-gray-900">Nama Item</label>
                            <input type="text" id="menu-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#29ABE2] focus:border-[#29ABE2] block w-full p-2.5" placeholder="Masukkan nama item" required />
                        </div>
                        <div>
                            <label for="menu-category" class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
                            <input type="text" id="menu-category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#29ABE2] focus:border-[#29ABE2] block w-full p-2.5" placeholder="Masukkan kategori" required />
                        </div>
                        <div>
                            <label for="menu-price" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                            <input type="number" id="menu-price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#29ABE2] focus:border-[#29ABE2] block w-full p-2.5" placeholder="Masukkan harga" required />
                        </div>
                        <div>
                            <label for="menu-image" class="block mb-2 text-sm font-medium text-gray-900">Gambar</label>
                            <input type="file" id="menu-image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#29ABE2] focus:border-[#29ABE2] block w-full p-2.5" accept="image/*" />
                        </div>
                        <button type="submit" class="w-full text-white bg-[#29ABE2] hover:bg-[#1a8ac5] focus:ring-4 focus:outline-none focus:ring-[#29ABE2] font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal 1 -->
    <div id="delete-modal-1" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="p-4 md:p-5">
                    <h3 class="text-lg font-semibold text-gray-900 headline">Anda yakin?</h3>
                    <p class="mt-2 text-sm text-gray-500">Tindakan ini tidak dapat dibatalkan. Ini akan menghapus item menu secara permanen.</p>
                    <div class="mt-4 flex justify-end gap-2">
                        <button data-modal-hide="delete-modal-1" type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200">Batal</button>
                        <button data-modal-hide="delete-modal-1" type="button" class="px-4 py-2 text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal 2 -->
    <div id="delete-modal-2" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="p-4 md:p-5">
                    <h3 class="text-lg font-semibold text-gray-900 headline">Anda yakin?</h3>
                    <p class="mt-2 text-sm text-gray-500">Tindakan ini tidak dapat dibatalkan. Ini akan menghapus item menu secara permanen.</p>
                    <div class="mt-4 flex justify-end gap-2">
                        <button data-modal-hide="delete-modal-2" type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200">Batal</button>
                        <button data-modal-hide="delete-modal-2" type="button" class="px-4 py-2 text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>