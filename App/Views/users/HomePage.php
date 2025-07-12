<main class="flex-1">
            <section class="relative py-20 md:py-32 bg-white/50">
                <div class="absolute inset-0 bg-grid-pattern opacity-10"></div>
                <div class="container mx-auto px-4 relative text-center">
                    <span class="inline-flex items-center rounded-full border border-[#F47920] px-3 py-1 text-sm font-medium text-[#F47920] mb-4">
                        <i data-lucide="sparkles" class="mr-2 h-4 w-4"></i>
                        Main, Makan, Ulangi
                    </span>
                    <h1 class="text-4xl font-bold tracking-tighter sm:text-5xl md:text-6xl lg:text-7xl text-[#29ABE2]">
                        Kafe Gaming Terbaik Anda
                    </h1>
                    <p class="mx-auto mt-4 max-w-[700px] text-lg text-gray-600 md:text-xl">
                        RentGo adalah tempat yang sempurna untuk nongkrong. Pesan sesi PlayStation Anda, pesan makanan dan minuman lezat, dan nikmati pengalaman yang mulus.
                    </p>
                </div>
            </section>

            <section class="py-16 md:py-24">
                <div class="container mx-auto px-4">
                    <div class="text-center">
                        <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl text-[#29ABE2]">
                            Mengapa Memilih RentGo?
                        </h2>
                        <p class="mx-auto mt-4 max-w-2xl text-gray-600">
                            Kami menawarkan perpaduan unik antara budaya game dan kafe, didukung oleh teknologi.
                        </p>
                    </div>
                    <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                        <div class="text-center bg-white shadow-md rounded-lg p-6">
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-[#29ABE2]/10">
                                <i data-lucide="gamepad-2" class="h-6 w-6 text-[#29ABE2]"></i>
                            </div>
                            <h3 class="mt-4 text-xl font-bold text-[#29ABE2]">Konsol Terbaru</h3>
                            <p class="mt-2 text-gray-600">Pesan konsol PS5 dan PS4 dengan perpustakaan game yang luas.</p>
                        </div>
                        <div class="text-center bg-white shadow-md rounded-lg p-6">
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-[#29ABE2]/10">
                                <i data-lucide="coffee" class="h-6 w-6 text-[#29ABE2]"></i>
                            </div>
                            <h3 class="mt-4 text-xl font-bold text-[#29ABE2]">Kafe Gourmet</h3>
                            <p class="mt-2 text-gray-600">Pesan makanan dan minuman lezat langsung ke stasiun game Anda.</p>
                        </div>
                        <div class="text-center bg-white shadow-md rounded-lg p-6">
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-[#29ABE2]/10">
                                <i data-lucide="qr-code" class="h-6 w-6 text-[#29ABE2]"></i>
                            </div>
                            <h3 class="mt-4 text-xl font-bold text-[#29ABE2]">Akses QR Mulus</h3>
                            <p class="mt-2 text-gray-600">Pindai kode QR di meja Anda untuk langsung mengakses menu dan layanan.</p>
                        </div>
                        <div class="text-center bg-white shadow-md rounded-lg p-6">
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-[#29ABE2]/10">
                                <i data-lucide="sparkles" class="h-6 w-6 text-[#29ABE2]"></i>
                            </div>
                            <h3 class="mt-4 text-xl font-bold text-[#29ABE2]">Rekomendasi AI</h3>
                            <p class="mt-2 text-gray-600">Dapatkan saran game dan makanan yang dipersonalisasi berdasarkan riwayat Anda.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Daftar Game -->
            <section id="games" class="py-16 md:py-24 bg-white/50">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold mb-6 text-[#29ABE2]">Daftar Game</h2>
                    <div class="mb-6">
                        <label for="genre-filter" class="block text-lg font-semibold mb-2">Filter Genre:</label>
                        <select id="genre-filter" class="p-2 border rounded-md w-full max-w-xs focus:ring-[#29ABE2] focus:border-[#29ABE2]">
                            <option value="all">Semua</option>
                            <option value="sport">Sport</option>
                            <option value="rpg">RPG</option>
                            <option value="action">Action</option>
                        </select>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-white p-4 rounded-lg shadow-md transition-transform hover:scale-105">
                            <img src="https://via.placeholder.com/300x150" alt="Game 1" class="w-full h-40 object-cover rounded-md mb-4">
                            <h3 class="text-xl font-semibold">FIFA 23</h3>
                            <p class="text-gray-600">Genre: Sport</p>
                            <div class="flex items-center mt-2">
                                <i data-lucide="star" class="w-5 h-5 text-yellow-400"></i>
                                <span class="ml-2">4.8/5</span>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-md transition-transform hover:scale-105">
                            <img src="https://via.placeholder.com/300x150" alt="Game 2" class="w-full h-40 object-cover rounded-md mb-4">
                            <h3 class="text-xl font-semibold">Elden Ring</h3>
                            <p class="text-gray-600">Genre: RPG</p>
                            <div class="flex items-center mt-2">
                                <i data-lucide="star" class="w-5 h-5 text-yellow-400"></i>
                                <span class="ml-2">4.9/5</span>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-md transition-transform hover:scale-105">
                            <img src="https://via.placeholder.com/300x150" alt="Game 3" class="w-full h-40 object-cover rounded-md mb-4">
                            <h3 class="text-xl font-semibold">God of War</h3>
                            <p class="text-gray-600">Genre: Action</p>
                            <div class="flex items-center mt-2">
                                <i data-lucide="star" class="w-5 h-5 text-yellow-400"></i>
                                <span class="ml-2">4.7/5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-16 md:py-24 bg-white/50">
                <div class="container mx-auto px-4">
                    <div class="flex items-center justify-between">
                        <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl text-[#29ABE2]">
                            Game Populer
                        </h2>
                        <a href="/login" class="inline-flex items-center text-[#29ABE2] hover:underline">
                            Lihat Semua <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                        </a>
                    </div>
                    <div class="mt-8 grid grid-cols-2 gap-6 md:grid-cols-4">
                        <div class="overflow-hidden bg-white shadow-md rounded-lg">
                            <img src="https://placehold.co/300x400.png" alt="Cyberpunk 2077" class="h-auto w-full object-cover transition-transform duration-300 hover:scale-105" data-ai-hint="futuristic city">
                            <div class="p-4">
                                <h3 class="font-semibold text-[#29ABE2]">Cyberpunk 2077</h3>
                            </div>
                        </div>
                        <div class="overflow-hidden bg-white shadow-md rounded-lg">
                            <img src="https://placehold.co/300x400.png" alt="The Witcher 3" class="h-auto w-full object-cover transition-transform duration-300 hover:scale-105" data-ai-hint="fantasy warrior">
                            <div class="p-4">
                                <h3 class="font-semibold text-[#29ABE2]">The Witcher 3</h3>
                            </div>
                        </div>
                        <div class="overflow-hidden bg-white shadow-md rounded-lg">
                            <img src="https://placehold.co/300x400.png" alt="Red Dead 2" class="h-auto w-full object-cover transition-transform duration-300 hover:scale-105" data-ai-hint="cowboy landscape">
                            <div class="p-4">
                                <h3 class="font-semibold text-[#29ABE2]">Red Dead 2</h3>
                            </div>
                        </div>
                        <div class="overflow-hidden bg-white shadow-md rounded-lg">
                            <img src="https://placehold.co/300x400.png" alt="Elden Ring" class="h-auto w-full object-cover transition-transform duration-300 hover:scale-105" data-ai-hint="dark fantasy">
                            <div class="p-4">
                                <h3 class="font-semibold text-[#29ABE2]">Elden Ring</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-16 md:py-24">
                <div class="container mx-auto px-4">
                    <div class="flex items-center justify-between">
                        <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl text-[#29ABE2]">
                            Favorit Penggemar
                        </h2>
                        <a href="/login" class="inline-flex items-center text-[#29ABE2] hover:underline">
                            Menu Lengkap <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                        </a>
                    </div>
                    <div class="mt-8 grid grid-cols-2 gap-6 md:grid-cols-4">
                        <div class="bg-white shadow-md rounded-lg">
                            <img src="https://placehold.co/300x300.png" alt="Espresso" class="aspect-square w-full rounded-t-lg object-cover" data-ai-hint="coffee cup">
                            <div class="flex justify-between p-4">
                                <h3 class="font-semibold text-[#29ABE2]">Espresso</h3>
                                <p class="font-medium text-[#29ABE2]">Rp 25.000</p>
                            </div>
                        </div>
                        <div class="bg-white shadow-md rounded-lg">
                            <img src="https://placehold.co/300x300.png" alt="Sayap Ayam Pedas" class="aspect-square w-full rounded-t-lg object-cover" data-ai-hint="food wings">
                            <div class="flex justify-between p-4">
                                <h3 class="font-semibold text-[#29ABE2]">Sayap Ayam Pedas</h3>
                                <p class="font-medium text-[#29ABE2]">Rp 45.000</p>
                            </div>
                        </div>
                        <div class="bg-white shadow-md rounded-lg">
                            <img src="https://placehold.co/300x300.png" alt="Indomie Spesial" class="aspect-square w-full rounded-t-lg object-cover" data-ai-hint="noodle bowl">
                            <div class="flex justify-between p-4">
                                <h3 class="font-semibold text-[#29ABE2]">Indomie Spesial</h3>
                                <p class="font-medium text-[#29ABE2]">Rp 30.000</p>
                            </div>
                        </div>
                        <div class="bg-white shadow-md rounded-lg">
                            <img src="https://placehold.co/300x300.png" alt="Es Teh Leci" class="aspect-square w-full rounded-t-lg object-cover" data-ai-hint="iced tea">
                            <div class="flex justify-between p-4">
                                <h3 class="font-semibold text-[#29ABE2]">Es Teh Leci</h3>
                                <p class="font-medium text-[#29ABE2]">Rp 28.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="border-t py-16 md:py-24">
                <div class="container mx-auto px-4 text-center">
                    <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl text-[#29ABE2]">
                        Siap untuk Mulai?
                    </h2>
                    <p class="mx-auto mt-4 max-w-[600px] text-gray-600">
                        Petualangan game atau rehat kopi Anda berikutnya hanya dengan sekali klik.
                    </p>
                    <div class="mt-8">
                        <a href="/login" class="inline-flex items-center px-6 py-3 bg-[#29ABE2] text-white font-medium rounded-md hover:bg-[#1a8cc0] text-lg">
                            Buat Reservasi
                        </a>
                    </div>
                </div>
            </section>
                    

        <!-- Additional Sections -->
        <section class="container mx-auto px-4 py-8">
            <!-- Jam Operasional -->
            <section id="jam-operasional" class="mb-12">
                <h2 class="text-3xl font-bold mb-6 text-[#29ABE2]">📅 Jam Operasional</h2>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <p class="text-lg font-semibold">Hari Buka: Senin - Minggu</p>
                    <p class="text-gray-600 mt-2">Jam: 10:00 - 23:00</p>
                    <p class="text-[#F47920] mt-2 font-semibold">Promo Spesial: Gratis Es Teh per cup setiap hari Jumat!</p>
                </div>
            </section>

            <!-- Harga Sewa & Paket Promo -->
            <section id="harga" class="mb-12">
                <h2 class="text-3xl font-bold mb-6 text-[#29ABE2]">💰 Harga Sewa & Paket Promo</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white p-4 rounded-lg shadow-md text-center transition-transform hover:scale-105">
                        <h3 class="text-lg font-semibold">Sewa Per Jam</h3>
                        <p class="text-2xl font-bold text-[#F47920]">Rp 25.000</p>
                        <p class="text-gray-600">Mainkan game favoritmu per jam</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md text-center transition-transform hover:scale-105">
                        <h3 class="text-lg font-semibold">Paket Harian</h3>
                        <p class="text-2xl font-bold text-[#F47920]">Rp 150.000</p>
                        <p class="text-gray-600">Main sepuasnya selama 8 jam</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md text-center transition-transform hover:scale-105">
                        <h3 class="text-lg font-semibold">Paket Hemat</h3>
                        <p class="text-2xl font-bold text-[#F47920]">Rp 200.000</p>
                        <p class="text-gray-600">Main + makanan ringan untuk 2 orang</p>
                    </div>
                </div>
            </section>

            <!-- Galeri Foto -->
            <section id="galeri" class="mb-12">
                <h2 class="text-3xl font-bold mb-6 text-[#29ABE2]">🖼️ Galeri Foto</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <img src="https://via.placeholder.com/300x200" alt="Ruang Bermain" class="w-full h-48 object-cover rounded-md hover:opacity-90 transition-opacity">
                    <img src="https://via.placeholder.com/300x200" alt="Konsol PS5" class="w-full h-48 object-cover rounded-md hover:opacity-90 transition-opacity">
                    <img src="https://via.placeholder.com/300x200" alt="Suasana Rental" class="w-full h-48 object-cover rounded-md hover:opacity-90 transition-opacity">
                </div>
            </section>

            <!-- Testimoni Pelanggan -->
            <section id="testimoni" class="mb-12">
                <h2 class="text-3xl font-bold mb-6 text-[#29ABE2]">⭐ Testimoni Pelanggan</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <p class="text-gray-600">"Tempatnya nyaman, konsolnya terbaru!"</p>
                        <p class="mt-2 font-semibold">- Andi</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <p class="text-gray-600">"Pelayanan ramah, harga terjangkau."</p>
                        <p class="mt-2 font-semibold">- Budi</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <p class="text-gray-600">"Seru banget, pasti balik lagi!"</p>
                        <p class="mt-2 font-semibold">- Citra</p>
                    </div>
                </div>
            </section>

            <!-- Lokasi & Kontak -->
            <section id="kontak" class="mb-12">
                <h2 class="text-3xl font-bold mb-6 text-[#29ABE2]">📍 Lokasi & Kontak</h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.019437405389!2d144.9537353153169!3d-37.81621897975175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzfCsDU5JzM4LjQiUyAxNDTCsDU3JzEzLjUiRQ!5e0!3m2!1sen!2sau!4v1610000000000!5m2!1sen!2sau" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" class="rounded-md"></iframe>
                    </div>
                    <div>
                        <p class="text-lg font-semibold">Alamat:</p>
                        <p class="text-gray-600">Jl. Contoh No. 123, Jakarta</p>
                        <p class="text-lg font-semibold mt-4">Nomor WA:</p>
                        <p class="text-gray-600">+62 812-3456-7890</p>
                        <p class="text-lg font-semibold mt-4">Jam Operasional:</p>
                        <p class="text-gray-600">Senin - Minggu: 10:00 - 23:00</p>
                        <a href="https://wa.me/6281234567890" class="inline-block mt-4 bg-[#29ABE2] text-white py-2 px-4 rounded-md hover:bg-blue-600 transition-colors">Hubungi Kami Sekarang</a>
                    </div>
                </div>
            </section>
        </section>
        </main>