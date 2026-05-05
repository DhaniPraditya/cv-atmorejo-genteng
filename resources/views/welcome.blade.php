<x-layout>
    <!-- Shopify-style Hero Section -->
    <section class="pt-32 pb-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto flex flex-col items-center text-center" id="beranda">
        
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-100 border border-slate-200 text-slate-800 text-sm font-semibold mb-8">
            <span class="relative flex h-2 w-2">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
            </span>
            Tersedia pengiriman ke seluruh Jawa
        </div>

        <h1 class="text-5xl sm:text-6xl md:text-8xl font-heading font-extrabold text-slate-950 tracking-tight leading-[1.1] mb-8 max-w-5xl mx-auto">
            Atap Kuat untuk <br class="hidden sm:block"> Generasi Masa Depan.
        </h1>
        
        <p class="text-lg sm:text-xl md:text-2xl text-slate-600 mb-10 max-w-2xl mx-auto leading-relaxed">
            Platform belanja genteng langsung dari pabrik. Kualitas teruji, harga transparan, dan pengiriman aman sampai di proyek Anda.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 mb-20 w-full sm:w-auto">
            <a href="#katalog" class="btn-primary w-full sm:w-auto">
                Lihat Katalog Produk
            </a>
            <a href="https://wa.me/6281234567890" target="_blank" class="btn-outline w-full sm:w-auto">
                Konsultasi Gratis
            </a>
        </div>

        <!-- Massive Hero Image -->
        <div class="w-full relative rounded-[2rem] overflow-hidden bg-slate-100 border border-slate-200 aspect-video md:aspect-[21/9]">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=2070&auto=format&fit=crop" alt="Pabrik Genteng" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-slate-900/10 mix-blend-multiply"></div>
        </div>
        
    </section>

    <!-- Keunggulan (Bento Grid Style) -->
    <section class="py-24 sm:py-32 bg-slate-50 border-t border-slate-200" id="keunggulan">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="mb-16 md:mb-24 flex flex-col md:flex-row md:items-end justify-between gap-8">
                <div class="max-w-3xl">
                    <h2 class="text-4xl md:text-6xl font-heading font-bold text-slate-950 tracking-tight mb-6">Dibangun untuk bertahan.</h2>
                    <p class="text-xl text-slate-600">Material premium yang dirancang khusus untuk menghadapi iklim tropis ekstrem.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white p-10 rounded-3xl border border-slate-200 flex flex-col h-full hover:border-slate-300 transition-colors">
                    <div class="mb-auto">
                        <div class="w-12 h-12 bg-slate-950 text-white rounded-full flex items-center justify-center mb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-950 mb-4">Ketahanan Maksimal</h3>
                        <p class="text-slate-600 text-lg leading-relaxed">Campuran material beton dan tanah liat khusus yang di-press dengan tekanan tinggi.</p>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="bg-slate-950 text-white p-10 rounded-3xl border border-slate-800 flex flex-col h-full relative overflow-hidden md:col-span-2">
                    <!-- Accent background -->
                    <div class="absolute -right-20 -top-20 w-64 h-64 bg-primary-500 rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>
                    <div class="relative z-10 mb-auto max-w-xl">
                        <div class="w-12 h-12 bg-white text-slate-950 rounded-full flex items-center justify-center mb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                        </div>
                        <h3 class="text-3xl font-bold mb-4">Harga Pabrik Langsung</h3>
                        <p class="text-slate-300 text-xl leading-relaxed">Tanpa perantara distributor. Kami memotong jalur distribusi agar Anda mendapatkan harga paling jujur dan transparan untuk proyek Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Katalog Produk -->
    <section class="py-24 sm:py-32 bg-white" id="katalog" x-data="{ selectedCategory: 'all' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
                <div>
                    <h2 class="text-4xl md:text-6xl font-heading font-bold text-slate-950 tracking-tight mb-6">Pilih Genteng Anda.</h2>
                    <p class="text-xl text-slate-600 max-w-2xl">Ragam pilihan model dan warna yang disesuaikan dengan arsitektur rumah modern hingga klasik.</p>
                </div>
                
                <!-- Filter Tabs -->
                <div class="flex space-x-3 overflow-x-auto pb-2 w-full md:w-auto shrink-0 no-scrollbar">
                    <button @click="selectedCategory = 'all'" :class="selectedCategory === 'all' ? 'bg-slate-950 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'" class="px-6 py-3 rounded-full text-base font-bold transition-colors whitespace-nowrap">Semua Tipe</button>
                    <button @click="selectedCategory = 'beton'" :class="selectedCategory === 'beton' ? 'bg-slate-950 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'" class="px-6 py-3 rounded-full text-base font-bold transition-colors whitespace-nowrap">Genteng Beton</button>
                    <button @click="selectedCategory = 'tanah_liat'" :class="selectedCategory === 'tanah_liat' ? 'bg-slate-950 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'" class="px-6 py-3 rounded-full text-base font-bold transition-colors whitespace-nowrap">Tanah Liat</button>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Produk 1 -->
                <div x-show="selectedCategory === 'all' || selectedCategory === 'beton'" class="group">
                    <div class="bg-slate-100 rounded-3xl aspect-[4/3] mb-6 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1616422285623-14ff4e2a14ae?q=80&w=2000&auto=format&fit=crop" alt="Genteng Beton Flat" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-700 ease-in-out">
                        <div class="absolute top-4 left-4 bg-white px-4 py-2 text-xs font-bold tracking-wider uppercase text-slate-950 rounded-full">Beton Flat</div>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-950 mb-2">Flat Minimalis</h3>
                    <p class="text-slate-600 mb-6">Desain modern kontemporer.</p>
                    <ul class="text-base text-slate-600 space-y-3 mb-8 border-t border-slate-200 pt-6">
                        <li class="flex justify-between"><span>Ukuran</span> <span class="font-bold text-slate-950">33 x 42 cm</span></li>
                        <li class="flex justify-between"><span>Berat</span> <span class="font-bold text-slate-950">4.5 Kg</span></li>
                        <li class="flex justify-between"><span>Isi / m²</span> <span class="font-bold text-slate-950">10 pcs</span></li>
                    </ul>
                    <a href="https://wa.me/6281234567890" target="_blank" class="w-full btn-outline text-center block">Tanya Harga</a>
                </div>

                <!-- Produk 2 -->
                <div x-show="selectedCategory === 'all' || selectedCategory === 'beton'" class="group">
                    <div class="bg-slate-100 rounded-3xl aspect-[4/3] mb-6 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1594910086208-d2e46cecf475?q=80&w=2000&auto=format&fit=crop" alt="Genteng Beton Garuda" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-700 ease-in-out">
                        <div class="absolute top-4 left-4 bg-white px-4 py-2 text-xs font-bold tracking-wider uppercase text-slate-950 rounded-full">Beton Gelombang</div>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-950 mb-2">Garuda / Gelombang</h3>
                    <p class="text-slate-600 mb-6">Sistem interlocking anti bocor.</p>
                    <ul class="text-base text-slate-600 space-y-3 mb-8 border-t border-slate-200 pt-6">
                        <li class="flex justify-between"><span>Ukuran</span> <span class="font-bold text-slate-950">33 x 42 cm</span></li>
                        <li class="flex justify-between"><span>Berat</span> <span class="font-bold text-slate-950">4.2 Kg</span></li>
                        <li class="flex justify-between"><span>Isi / m²</span> <span class="font-bold text-slate-950">9 pcs</span></li>
                    </ul>
                    <a href="https://wa.me/6281234567890" target="_blank" class="w-full btn-outline text-center block">Tanya Harga</a>
                </div>

                <!-- Produk 3 -->
                <div x-show="selectedCategory === 'all' || selectedCategory === 'tanah_liat'" class="group">
                    <div class="bg-[#e6e2db] rounded-3xl aspect-[4/3] mb-6 overflow-hidden relative flex items-center justify-center">
                        <div class="absolute top-4 left-4 bg-white px-4 py-2 text-xs font-bold tracking-wider uppercase text-slate-950 rounded-full">Tanah Liat</div>
                        <span class="text-slate-400 font-bold uppercase tracking-widest">Gambar Tanah Liat</span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-950 mb-2">Morando Klasik</h3>
                    <p class="text-slate-600 mb-6">Sejuk, natural, dan tradisional.</p>
                    <ul class="text-base text-slate-600 space-y-3 mb-8 border-t border-slate-200 pt-6">
                        <li class="flex justify-between"><span>Ukuran</span> <span class="font-bold text-slate-950">32 x 23 cm</span></li>
                        <li class="flex justify-between"><span>Berat</span> <span class="font-bold text-slate-950">2.2 Kg</span></li>
                        <li class="flex justify-between"><span>Isi / m²</span> <span class="font-bold text-slate-950">18 pcs</span></li>
                    </ul>
                    <a href="https://wa.me/6281234567890" target="_blank" class="w-full btn-outline text-center block">Tanya Harga</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner Ajak Konsultasi (Shopify Callout Style) -->
    <section class="py-24 sm:py-32 bg-primary-600">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-6xl font-heading font-extrabold text-white tracking-tight mb-8">
                Masih ragu memilih genteng yang tepat?
            </h2>
            <p class="text-xl text-primary-100 mb-12 max-w-2xl mx-auto">
                Tim ahli kami siap menghitung estimasi kebutuhan dan memberikan saran terbaik secara gratis untuk proyek Anda.
            </p>
            <a href="https://wa.me/6281234567890" target="_blank" class="bg-slate-950 text-white font-bold px-10 py-5 rounded-full hover:bg-slate-800 transition-all duration-300 active:scale-[0.98] inline-flex items-center justify-center gap-2 text-lg">
                Mulai Konsultasi Gratis
            </a>
        </div>
    </section>

    <!-- Galeri Proyek -->
    <section class="py-24 sm:py-32 bg-slate-50 border-y border-slate-200" id="galeri" x-data="{ imgModal: false, imgModalSrc: '' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-16 md:mb-24">
                <h2 class="text-4xl md:text-6xl font-heading font-bold text-slate-950 tracking-tight mb-6">Bukti Nyata.</h2>
                <p class="text-xl text-slate-600 max-w-2xl">Portofolio pemasangan genteng dari ratusan pelanggan yang telah mempercayakan atapnya kepada kami.</p>
            </div>
            
            <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">
                <!-- Gallery Item 1 -->
                <div class="relative overflow-hidden rounded-3xl group cursor-pointer border border-slate-200" @click="imgModal = true; imgModalSrc = 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=2000&auto=format&fit=crop'">
                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=600&auto=format&fit=crop" class="w-full h-auto transform group-hover:scale-105 transition-transform duration-700 ease-in-out" alt="Proyek Perumahan Mewah">
                    <div class="absolute inset-0 bg-slate-950/20 group-hover:bg-transparent transition-colors duration-500"></div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="relative overflow-hidden rounded-3xl group cursor-pointer border border-slate-200" @click="imgModal = true; imgModalSrc = 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=2000&auto=format&fit=crop'">
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=600&auto=format&fit=crop" class="w-full h-auto transform group-hover:scale-105 transition-transform duration-700 ease-in-out" alt="Villa Minimalis">
                    <div class="absolute inset-0 bg-slate-950/20 group-hover:bg-transparent transition-colors duration-500"></div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="relative overflow-hidden rounded-3xl group cursor-pointer border border-slate-200" @click="imgModal = true; imgModalSrc = 'https://images.unsplash.com/photo-1513694203232-719a280e022f?q=80&w=2000&auto=format&fit=crop'">
                    <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?q=80&w=600&auto=format&fit=crop" class="w-full h-auto transform group-hover:scale-105 transition-transform duration-700 ease-in-out" alt="Proyek Komersial">
                    <div class="absolute inset-0 bg-slate-950/20 group-hover:bg-transparent transition-colors duration-500"></div>
                </div>
            </div>
        </div>

        <!-- Image Modal -->
        <div x-show="imgModal" class="fixed inset-0 z-[100] flex items-center justify-center bg-slate-950/95 p-4 backdrop-blur-md" style="display: none;" x-transition.opacity>
            <button @click="imgModal = false" class="absolute top-6 right-6 text-slate-400 hover:text-white bg-slate-800 p-3 rounded-full">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
            <img :src="imgModalSrc" class="max-w-full max-h-[90vh] rounded-2xl shadow-2xl" @click.away="imgModal = false">
        </div>
    </section>

    <!-- Testimoni & Maps -->
    <section class="py-24 sm:py-32 bg-white" id="testimoni">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24">
                
                <!-- Testimonials -->
                <div>
                    <h2 class="text-4xl md:text-5xl font-heading font-bold text-slate-950 tracking-tight mb-12">Cerita Pelanggan.</h2>
                    
                    <div class="space-y-8">
                        <!-- Review 1 -->
                        <div class="border-b border-slate-200 pb-8">
                            <div class="flex items-center gap-1 mb-4 text-slate-950">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            </div>
                            <p class="text-xl text-slate-900 font-medium leading-relaxed mb-6">"Kualitas genteng beton flat dari Atmorejo sangat memuaskan. Presisi, tidak bocor, dan membuat tampilan rumah jadi sangat elegan minimalis."</p>
                            <div>
                                <h4 class="font-bold text-slate-950">Bpk. Ahmad</h4>
                                <span class="text-sm text-slate-500">Pemilik Rumah</span>
                            </div>
                        </div>

                        <!-- Review 2 -->
                        <div class="border-b border-slate-200 pb-8">
                            <div class="flex items-center gap-1 mb-4 text-slate-950">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            </div>
                            <p class="text-xl text-slate-900 font-medium leading-relaxed mb-6">"Sebagai kontraktor, saya mencari supplier yang bisa memberikan harga pabrik namun dengan kualitas yang konsisten. Atmorejo adalah partner andalan saya."</p>
                            <div>
                                <h4 class="font-bold text-slate-950">Bpk. Suryana</h4>
                                <span class="text-sm text-slate-500">Kontraktor Perumahan</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Location & Maps -->
                <div class="h-full flex flex-col">
                    <h2 class="text-4xl md:text-5xl font-heading font-bold text-slate-950 tracking-tight mb-12">Kunjungi Kami.</h2>
                    
                    <div class="w-full h-80 rounded-3xl overflow-hidden bg-slate-200 border border-slate-200 mb-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.3973605759197!2d110.38538781115147!3d-7.747608876782029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5900b694adc9%3A0x670925a3892daf75!2sCV%20Atmorejo%20Genteng!5e0!3m2!1sen!2sid!4v1778007162316!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="grid grid-cols-2 gap-8">
                        <div>
                            <h4 class="font-bold text-slate-950 mb-2">Alamat</h4>
                            <p class="text-slate-600">Jl. Raya Genteng No. 123,<br>Kec. Sukamakmur, Kab. Bogor</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-950 mb-2">Jam Buka</h4>
                            <p class="text-slate-600">Senin - Sabtu: 08:00 - 16:00<br>Minggu: Libur</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-layout>
