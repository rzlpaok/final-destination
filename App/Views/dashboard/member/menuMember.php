<!-- Main Content -->
 <main class="py-12 md:py-16 bg-gray-50">
        <div class="mb-8 text-center">
            <h1 class="text-4xl font-bold tracking-tighter sm:text-5xl headline text-[#29ABE2]">Menu Kami</h1>
            <p class="mx-auto mt-4 max-w-[600px] text-gray-600">Makanan dan minuman lezat untuk menyemangati sesi bermain game Anda. Pesan sekarang dan akan diantar ke stasiun Anda.</p>
        </div>

        <!-- Tabs -->
        <div class="w-full">
            <ul class="flex flex-wrap justify-center mb-8 max-w-md mx-auto sm:grid sm:grid-cols-3 sm:gap-4" role="tablist">
                <li class="mr-2 sm:mr-0">
                    <button class="inline-flex items-center px-4 py-2 text-[#29ABE2] bg-white border border-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white focus:bg-[#29ABE2] focus:text-white" data-tabs-toggle="#kopi-tab" role="tab" aria-controls="kopi-tab" aria-selected="true">
                        <i data-lucide="coffee" class="mr-2 h-4 w-4"></i> Kopi
                    </button>
                </li>
                <li class="mr-2 sm:mr-0">
                    <button class="inline-flex items-center px-4 py-2 text-[#29ABE2] bg-white border border-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white focus:bg-[#29ABE2] focus:text-white" data-tabs-toggle="#makanan-tab" role="tab" aria-controls="makanan-tab" aria-selected="false">
                        <i data-lucide="utensils-crossed" class="mr-2 h-4 w-4"></i> Makanan
                    </button>
                </li>
                <li class="mr-2 sm:mr-0">
                    <button class="inline-flex items-center px-4 py-2 text-[#29ABE2] bg-white border border-[#29ABE2] rounded-md hover:bg-[#29ABE2] hover:text-white focus:bg-[#29ABE2] focus:text-white" data-tabs-toggle="#minuman-tab" role="tab" aria-controls="minuman-tab" aria-selected="false">
                        <i data-lucide="glass-water" class="mr-2 h-4 w-4"></i> Minuman
                    </button>
                </li>
            </ul>
            <div id="tab-content">
                <!-- Kopi Tab -->
                <div id="kopi-tab" role="tabpanel" aria-labelledby="kopi-tab">
                    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                        <div class="bg-white shadow-md rounded-lg">
                            <img src="https://placehold.co/300x300.png" alt="Espresso" class="aspect-square w-full rounded-t-lg object-cover" data-ai-hint="coffee cup">
                            <div class="p-4 flex justify-between items-center">
                                <h3 class="font-semibold text-[#29ABE2]">Espresso</h3>
                                <p class="font-medium text-[#29ABE2]">Rp 25.000</p>
                            </div>
                        </div>
                        <div class="bg-white shadow-md rounded-lg">
                            <img src="https://placehold.co/300x300.png" alt="Cappuccino" class="aspect-square w-full rounded-t-lg object-cover" data-ai-hint="coffee cup">
                            <div class="p-4 flex justify-between items-center">
                                <h3 class="font-semibold text-[#29ABE2]">Cappuccino</h3>
                                <p class="font-medium text-[#29ABE2]">Rp 30.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Makanan Tab -->
                <div id="makanan-tab" class="hidden" role="tabpanel" aria-labelledby="makanan-tab">
                    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                        <div class="bg-white shadow-md rounded-lg">
                            <img src="https://placehold.co/300x300.png" alt="Sayap Ayam Pedas" class="aspect-square w-full rounded-t-lg object-cover" data-ai-hint="food wings">
                            <div class="p-4 flex justify-between items-center">
                                <h3 class="font-semibold text-[#29ABE2]">Sayap Ayam Pedas</h3>
                                <p class="font-medium text-[#29ABE2]">Rp 45.000</p>
                            </div>
                        </div>
                        <div class="bg-white shadow-md rounded-lg">
                            <img src="https://placehold.co/300x300.png" alt="Indomie Spesial" class="aspect-square w-full rounded-t-lg object-cover" data-ai-hint="noodle bowl">
                            <div class="p-4 flex justify-between items-center">
                                <h3 class="font-semibold text-[#29ABE2]">Indomie Spesial</h3>
                                <p class="font-medium text-[#29ABE2]">Rp 30.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Minuman Tab -->
                <div id="minuman-tab" class="hidden" role="tabpanel" aria-labelledby="minuman-tab">
                    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                        <div class="bg-white shadow-md rounded-lg">
                            <img src="https://placehold.co/300x300.png" alt="Es Teh Leci" class="aspect-square w-full rounded-t-lg object-cover" data-ai-hint="iced tea">
                            <div class="p-4 flex justify-between items-center">
                                <h3 class="font-semibold text-[#29ABE2]">Es Teh Leci</h3>
                                <p class="font-medium text-[#29ABE2]">Rp 28.000</p>
                            </div>
                        </div>
                        <div class="bg-white shadow-md rounded-lg">
                            <img src="https://placehold.co/300x300.png" alt="Jus Jeruk" class="aspect-square w-full rounded-t-lg object-cover" data-ai-hint="orange juice">
                            <div class="p-4 flex justify-between items-center">
                                <h3 class="font-semibold text-[#29ABE2]">Jus Jeruk</h3>
                                <p class="font-medium text-[#29ABE2]">Rp 25.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>