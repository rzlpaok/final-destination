<main class="p-4 md:p-8">
    <!-- Header Section -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold tracking-tight headline text-gray-900">Manajemen Konsol</h1>
            <p class="text-gray-500">Tambah, edit, atau hapus konsol game.</p>
        </div>
        <!-- Add Console Button -->
        <button data-modal-target="console-modal" data-modal-toggle="console-modal"
            class="inline-flex items-center px-4 py-2 bg-[#29ABE2] text-white rounded-md hover:bg-[#1a8ac5] focus:outline-none focus:ring-2 focus:ring-[#29ABE2]">
            <i data-lucide="plus-circle" class="w-5 h-5 mr-2"></i>
            Tambah Konsol
        </button>
    </div>

    <!-- Desktop Table -->
    <div class="hidden md:block border rounded-lg bg-white">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Nama Konsol</th>
                    <th scope="col" class="px-6 py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($model['items'] as $item): ?>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4 font-medium text-gray-900"><?= $i++ ?></td>
                        <td class="px-6 py-4 font-medium text-gray-900"><?= $item['nameConsole'] ?></td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <button data-modal-target="update-modal-<?= $item['id'] ?>"
                                    data-modal-toggle="update-modal-<?= $item['id'] ?>"
                                    class="p-2 text-gray-500 hover:bg-gray-100 rounded-full">
                                    <i data-lucide="edit" class="w-4 h-4"></i>
                                    <span class="sr-only">Edit</span>
                                </button>
                                <button data-modal-target="delete-modal-1-<?= $item['id'] ?>"
                                    data-modal-toggle="delete-modal-1-<?= $item['id'] ?>"
                                    class="p-2 text-red-600 hover:bg-gray-100 rounded-full">
                                    <i data-lucide="trash-2" class="w-4 h-4"></i>
                                    <span class="sr-only">Hapus</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Mobile Card List -->
    <div class="md:hidden grid gap-4">
        <?php foreach ($model['items'] as $item): ?>
            <div class="bg-white rounded-lg shadow p-4">
                <div class="flex justify-between items-center">
                    <p class="font-semibold flex items-center text-gray-900">
                        <i data-lucide="tv" class="w-4 h-4 mr-2"></i>
                        <?= $item['nameConsole'] ?>
                    </p>
                    <div class="flex gap-2">
                        <button data-modal-target="update-modal-<?= $item['id'] ?>"
                            data-modal-toggle="update-modal-<?= $item['id'] ?>"
                            class="p-2 text-gray-500 hover:bg-gray-100 rounded-full">
                            <i data-lucide="edit" class="w-4 h-4"></i>
                            <span class="sr-only">Edit</span>
                        </button>
                        <button data-modal-target="delete-modal-1-<?= $item['id'] ?>"
                            data-modal-toggle="delete-modal-1-<?= $item['id'] ?>"
                            class="p-2 text-red-600 hover:bg-gray-100 rounded-full">
                            <i data-lucide="trash-2" class="w-4 h-4"></i>
                            <span class="sr-only">Hapus</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Console Form Modal (Add) -->
    <div id="console-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1实际情况
        <div class=" relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900 headline">Tambah Konsol Baru</h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="console-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Tutup modal</span>
                </button>
            </div>
            <div class="p-4 md:p-5">
                <form action="/admin/console/add" method="POST" class="space-y-4">
                    <div>
                        <label for="console-name" class="block mb-2 text-sm font-medium text-gray-900">Nama
                            Konsol</label>
                        <input name="nameConsole" type="text" id="console-name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#29ABE2] focus:border-[#29ABE2] block w-full p-2.5"
                            placeholder="Masukkan nama konsol" required />
                    </div>
                    <button name="addConsole" type="submit"
                        class="w-full text-white bg-[#29ABE2] hover:bg-[#1a8ac5] focus:ring-4 focus:outline-none focus:ring-[#29ABE2] font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!-- Update Console Modal -->
    <?php foreach ($model['items'] as $item): ?>
        <div id="update-modal-<?= $item['id'] ?>" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900 headline">Edit Konsol</h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="update-modal-<?= $item['id'] ?>">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Tutup modal</span>
                        </button>
                    </div>
                    <div class="p-4 md:p-5">
                        <form action="/admin/console/update" method="POST" class="space-y-4">
                            <input type="hidden" name="id" value="<?= $item['id'] ?>">
                            <div>
                                <!-- input ID hidden tidak terlihat -->
                                <input type="hidden" name="id" value="<?= $item['id'] ?>" disabled>
                                <label for="console-name-<?= $item['id'] ?>"
                                    class="block mb-2 text-sm font-medium text-gray-900">Nama Konsol</label>
                                <input name="nameConsole" type="text" id="console-name-<?= $item['id'] ?>"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#29ABE2] focus:border-[#29ABE2] block w-full p-2.5"
                                    value="<?= htmlspecialchars($item['nameConsole']) ?>" required />
                            </div>
                            <button name="updateConsole" type="submit"
                                class="w-full text-white bg-[#29ABE2] hover:bg-[#1a8ac5] focus:ring-4 focus:outline-none focus:ring-[#29ABE2] font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan
                                Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Delete Confirmation Modal -->
    <?php foreach ($model['items'] as $item): ?>
        <div id="delete-modal-1-<?= $item['id'] ?>" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <div class="p-4 md:p-5">
                        <h3 class="text-lg font-semibold text-gray-900 headline">Anda yakin?</h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Tindakan ini akan menghapus konsol secara permanen. Anda tidak dapat melakukan ini jika konsol
                            sedang digunakan oleh stasiun.
                        </p>
                        <div class="mt-4 flex justify-end gap-2">
                            <button data-modal-hide="delete-modal-1-<?= $item['id'] ?>" type="button"
                                class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200">
                                Batal
                            </button>
                            <form method="POST" action="/admin/console/delete" class="inline">
                                <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                <button name="deleteConsole" type="submit" data-modal-hide="delete-modal-1-<?= $item['id'] ?>"
                                    class="px-4 py-2 text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</main>