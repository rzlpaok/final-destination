<main class="py-12 md:py-16 bg-gray-50">
    <style>
        input[type="radio"]:checked+i+span,
        input[type="radio"]:checked+i {
            background-color: #29ABE2;
            color: white;
        }

        input[type="radio"]:checked {
            border-color: white;
            background-color: #29ABE2;
        }

        label:has(input[type="radio"]:checked) {
            background-color: #29ABE2;
            color: white;
        }
    </style>
    <div class="container mx-auto py-12 md:py-16">
        <div class="mb-8 text-center">
            <h1 class="text-4xl font-bold tracking-tighter sm:text-5xl headline text-[#29ABE2]">Pesan Sesi Anda</h1>
            <p class="mx-auto mt-4 max-w-[600px] text-gray-600">Pilih stasiun, game, dan slot waktu Anda untuk memulai
                petualangan.</p>
        </div>

        <!-- Card -->
        <div class="mx-auto max-w-4xl bg-white shadow-md rounded-lg">
            <div class="p-6">
                <h2 class="text-2xl font-bold headline text-[#29ABE2]">Reservasi Baru</h2>
                <p class="mt-2 text-gray-600">Isi detail di bawah ini untuk memesan tempat Anda.</p>
            </div>
            <div class="p-6 grid gap-8 md:grid-cols-2">
                <!-- Left Column -->
                <form action="/member/pesan-sesi" method="POST">
                    <div class="space-y-6">
                        <div>
                            <label class="text-lg font-semibold headline flex items-center text-[#29ABE2]">
                                <i data-lucide="user" class="mr-2 h-5 w-5"></i> 1. Nama Anda
                            </label>
                            <input id="customerName"
                                class="mt-4 w-full p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:outline-none"
                                placeholder="Masukkan nama Anda" />
                        </div>
                        <div>
                            <label class="text-lg font-semibold headline flex items-center text-[#29ABE2]">
                                <i data-lucide="gamepad-2" class="mr-2 h-5 w-5"></i> 2. Pilih Stasiun Anda
                            </label>
                            <select id="station" name="console"
                                class="mt-4 w-full p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:outline-none">
                                <option value="">Pilih stasiun</option>
                                <option value="1">Stasiun 1 (PlayStation 5)</option>
                                <option value="2">Stasiun 2 (Xbox Series X)</option>
                            </select>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-6 mt-6">
                        <div>
                            <label for="duration" class="text-lg flex font-semibold headline text-[#29ABE2]">
                                <i data-lucide="timer"></i>&nbsp;
                                3. Pilih Durasi
                            </label>
                            <select id="duration" name="durasi"
                                class="mt-4 w-full p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:outline-none">
                                <option value="1">1 Jam</option>
                                <option value="2">2 Jam</option>
                                <option value="3">3 Jam</option>
                                <option value="5">5 Jam (Paket)</option>
                            </select>
                        </div>
                        <div>
                            <label class="text-lg flex font-semibold headline text-[#29ABE2]">
                                <i data-lucide="calendar-heart"></i>&nbsp;
                                4. Pilih Tanggal & Waktu</label>
                            <div class="mt-4 p-4 bg-white border border-gray-200 rounded-lg">
                                <input type="date" id="date" name="waktu"
                                    class="w-full p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:outline-none"
                                    value="2025-07-09" />
                            </div>
                        </div>
                        <div class="mt-4 grid grid-cols-3 gap-2">
                            <!-- Custom Radio Button Styling with Flowbite and Tailwind -->
                            <label
                                class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white cursor-pointer">
                                <input name="mulai" type="radio" id="time-10" name="time" value="10:00"
                                    class="mr-2 appearance-none w-4 h-4 border-2 border-[#29ABE2] rounded-full focus:outline-none focus:ring-0" />
                                <i data-lucide="clock" class="mr-2 h-4 w-4"></i>
                                <span>10:00</span>
                            </label>
                            <label
                                class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white cursor-pointer">
                                <input name="mulai" type="radio" id="time-11" name="time" value="11:00"
                                    class="mr-2 appearance-none w-4 h-4 border-2 border-[#29ABE2] rounded-full focus:outline-none focus:ring-0" />
                                <i data-lucide="clock" class="mr-2 h-4 w-4"></i>
                                <span>11:00</span>
                            </label>
                            <label
                                class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white cursor-pointer">
                                <input name="mulai" type="radio" id="time-12" name="time" value="12:00"
                                    class="mr-2 appearance-none w-4 h-4 border-2 border-[#29ABE2] rounded-full focus:outline-none focus:ring-0" />
                                <i data-lucide="clock" class="mr-2 h-4 w-4"></i>
                                <span>12:00</span>
                            </label>
                            <label
                                class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white cursor-pointer">
                                <input name="mulai" type="radio" id="time-13" name="time" value="13:00"
                                    class="mr-2 appearance-none w-4 h-4 border System: 2 border-[#29ABE2] rounded-full focus:outline-none focus:ring-0" />
                                <i data-lucide="clock" class="mr-2 h-4 w-4"></i>
                                <span>13:00</span>
                            </label>
                            <label
                                class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white cursor-pointer">
                                <input name="mulai" type="radio" id="time-14" name="time" value="14:00"
                                    class="mr-2 appearance-none w-4 h-4 border-2 border-[#29ABE2] rounded-full focus:outline-none focus:ring-0" />
                                <i data-lucide="clock" class="mr-2 h-4 w-4"></i>
                                <span>14:00</span>
                            </label>
                            <label
                                class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white cursor-pointer">
                                <input name="mulai" type="radio" id="time-15" name="time" value="15:00"
                                    class="mr-2 appearance-none w-4 h-4 border-2 border-[#29ABE2] rounded-full focus:outline-none focus:ring-0" />
                                <i data-lucide="clock" class="mr-2 h-4 w-4"></i>
                                <span>15:00</span>
                            </label>
                            <label
                                class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white cursor-pointer">
                                <input name="mulai" type="radio" id="time-16" name="time" value="16:00"
                                    class="mr-2 appearance-none w-4 h-4 border-2 border-[#29ABE2] rounded-full focus:outline-none focus:ring-0" />
                                <i data-lucide="clock" class="mr-2 h-4 w-4"></i>
                                <span>16:00</span>
                            </label>
                            <label
                                class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white cursor-pointer">
                                <input name="mulai" type="radio" id="time-17" name="time" value="17:00"
                                    class="mr-2 appearance-none w-4 h-4 border-2 border-[#29ABE2] rounded-full focus:outline-none focus:ring-0" />
                                <i data-lucide="clock" class="mr-2 h-4 w-4"></i>
                                <span>17:00</span>
                            </label>
                            <label
                                class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white cursor-pointer">
                                <input name="mulai" type="radio" id="time-18" name="time" value="18:00"
                                    class="mr-2 appearance-none w-4 h-4 border-2 border-[#29ABE2] rounded-full focus:outline-none focus:ring-0" />
                                <i data-lucide="clock" class="mr-2 h-4 w-4"></i>
                                <span>18:00</span>
                            </label>
                            <label
                                class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white cursor-pointer">
                                <input name="mulai" type="radio" id="time-19" name="time" value="19:00"
                                    class="mr-2 appearance-none w-4 h-4 border-2 border-[#29ABE2] rounded-full focus:outline-none focus:ring-0" />
                                <i data-lucide="clock" class="mr-2 h-4 w-4"></i>
                                <span>19:00</span>
                            </label>
                            <label
                                class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white cursor-pointer">
                                <input name="mulai" type="radio" id="time-20" name="time" value="20:00"
                                    class="mr-2 appearance-none w-4 h-4 border-2 border-[#29ABE2] rounded-full focus:outline-none focus:ring-0" />
                                <i data-lucide="clock" class="mr-2 h-4 w-4"></i>
                                <span>20:00</span>
                            </label>
                            <label
                                class="inline-flex items-center justify-center px-4 py-2 border border-[#29ABE2] text-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white cursor-pointer">
                                <input name="mulai" type="radio" id="time-21" name="time" value="21:00"
                                    class="mr-2 appearance-none w-4 h-4 border-2 border-[#29ABE2] rounded-full focus:outline-none focus:ring-0" />
                                <i data-lucide="clock" class="mr-2 h-4 w-4"></i>
                                <span>21:00</span>
                            </label>
                        </div>
                    </div>
            </div>
            <div class="p-6 flex justify-end">
                <button name="confirm"
                    class="inline-flex items-center px-6 py-3 bg-[#29ABE2] text-white font-medium rounded-md hover:bg-[#1a8cc0] text-lg">
                    Konfirmasi Pemesanan
                </button>
                </form>
            </div>
        </div>
    </div>
</main>