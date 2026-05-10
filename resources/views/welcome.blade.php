<x-layout>
    <!-- Cinematic Hero Section -->
    <section class="relative min-h-screen flex flex-col justify-end w-full" id="beranda">
        <!-- Background Image & Gradient Overlays -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=60&w=1600&auto=format&fit=crop" 
                 alt="Pabrik Genteng Premium" 
                 class="w-full h-full object-cover animate-[scale_30s_ease-in-out_infinite_alternate] will-change-transform" 
                 style="transform-origin: center;"
                 loading="eager">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-900/30 via-slate-900/60 to-slate-950"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950/80 via-transparent to-slate-950/80"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 px-4 sm:px-6 lg:px-12 max-w-7xl mx-auto w-full pt-28 pb-32">
            <div class="max-w-4xl" x-data="{ show: false }" x-init="setTimeout(() => show = true, 300)">
                <div class="inline-flex items-center gap-3 px-5 py-2.5 rounded-full border border-primary-500/30 bg-primary-500/20 backdrop-blur-md mb-8 transition-all duration-1000 transform" :class="show ? 'translate-y-0 opacity-100' : 'translate-y-4 opacity-0'">
                    <span class="w-2.5 h-2.5 rounded-full bg-primary-400 animate-pulse"></span>
                    <span class="text-white text-xs font-bold uppercase tracking-[0.2em]">Mahakarya Atap Sejak 1990</span>
                </div>

                <h1 class="text-5xl sm:text-7xl lg:text-[7rem] font-heading font-semibold text-white leading-[1.1] mb-8 transition-all duration-1000 delay-100 transform" :class="show ? 'translate-y-0 opacity-100' : 'translate-y-8 opacity-0'">
                    Estetika <span class="italic text-primary-400">Arsitektur,</span><br>
                    Kekuatan Abadi.
                </h1>
                
                <p class="text-lg md:text-2xl text-slate-300 mb-12 max-w-2xl leading-relaxed font-light transition-all duration-1000 delay-200 transform" :class="show ? 'translate-y-0 opacity-100' : 'translate-y-8 opacity-0'">
                    Mendefinisikan ulang standar kemewahan hunian melalui genteng premium dengan durabilitas tanpa kompromi.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-6 transition-all duration-1000 delay-300 transform" :class="show ? 'translate-y-0 opacity-100' : 'translate-y-8 opacity-0'">
                    <a href="#katalog" class="btn-primary w-full sm:w-auto">
                        Jelajahi Koleksi
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                    <a href="https://wa.me/628122709648" target="_blank" class="btn-outline-white w-full sm:w-auto">
                        Konsultasi Gratis
                    </a>
                </div>
            </div>
        </div>

        <!-- Floating Info Bar (Glassmorphism Optimized) -->
        <div class="absolute bottom-0 left-0 right-0 z-20 translate-y-1/2 px-4 sm:px-6 lg:px-12 hidden md:block">
            <div class="max-w-7xl mx-auto">
                <div class="glass-dark rounded-3xl p-8 grid grid-cols-3 gap-8 divide-x divide-slate-700/50">
                    <div class="px-8 flex items-center gap-6">
                        <div class="w-14 h-14 rounded-full bg-primary-500/20 flex items-center justify-center text-primary-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                        </div>
                        <div>
                            <p class="text-white font-heading font-normal text-2xl">Harga Pabrik</p>
                            <p class="text-slate-400 text-sm mt-1">Langsung dari fasilitas kami</p>
                        </div>
                    </div>
                    <div class="px-8 flex items-center gap-6">
                        <div class="w-14 h-14 rounded-full bg-primary-500/20 flex items-center justify-center text-primary-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/></svg>
                        </div>
                        <div>
                            <p class="text-white font-heading font-normal text-2xl">Garansi 20 Thn</p>
                            <p class="text-slate-400 text-sm mt-1">Perlindungan cuaca ekstrem</p>
                        </div>
                    </div>
                    <div class="px-8 flex items-center gap-6">
                        <div class="w-14 h-14 rounded-full bg-primary-500/20 flex items-center justify-center text-primary-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        </div>
                        <div>
                            <p class="text-white font-heading font-normal text-2xl">Premium Quality</p>
                            <p class="text-slate-400 text-sm mt-1">Standar estetika tertinggi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Keunggulan (Dark Premium Style) -->
    <section class="relative z-10 bg-slate-950 pt-32 pb-24 sm:pt-48 sm:pb-32" id="keunggulan">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-20 md:mb-28 text-center max-w-4xl mx-auto">
                <span class="inline-block bg-primary-500/10 text-primary-400 border border-primary-500/20 font-bold tracking-[0.2em] uppercase text-xs px-4 py-2 rounded-full mb-6">Filosofi Konstruksi</span>
                <h2 class="text-4xl md:text-6xl font-heading font-normal text-white mb-6 leading-tight">Keunggulan Dalam Setiap <span class="italic text-primary-400">Detail.</span></h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
                <!-- Card 1 -->
                <div class="group relative bg-slate-900 p-10 rounded-[2rem] border border-slate-800 hover:border-primary-500/50 transition-colors duration-500 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-500/10 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-primary-600 text-white rounded-full flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500 shadow-[0_0_30px_rgba(204,66,32,0.3)]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <h3 class="text-2xl font-heading font-normal text-white mb-4">Ketahanan Abadi</h3>
                        <p class="text-slate-400 text-base leading-relaxed font-light">Melalui proses pemanasan tingkat tinggi, kami menghasilkan kepadatan material yang tahan terhadap lumut, retak, dan cuaca ekstrem.</p>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="group relative bg-slate-900 p-10 rounded-[2rem] border border-slate-800 hover:border-primary-500/50 transition-colors duration-500 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-500/10 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-primary-600 text-white rounded-full flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500 shadow-[0_0_30px_rgba(204,66,32,0.4)]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 10.4V20a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-9.6"/><path d="M2 14h20"/><path d="M12 2v8"/><path d="m16 6-4-4-4 4"/></svg>
                        </div>
                        <h3 class="text-2xl font-heading font-normal text-white mb-4">Presisi Arsitektural</h3>
                        <p class="text-slate-400 text-base leading-relaxed font-light">Desain geometris presisi dengan sistem interlocking mutlak, memastikan tidak ada celah untuk kebocoran dan menyempurnakan garis atap.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group relative bg-slate-900 p-10 rounded-[2rem] border border-slate-800 hover:border-primary-500/50 transition-colors duration-500 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-500/10 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-primary-600 text-white rounded-full flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500 shadow-[0_0_30px_rgba(204,66,32,0.3)]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                        </div>
                        <h3 class="text-2xl font-heading font-normal text-white mb-4">Ramah Lingkungan</h3>
                        <p class="text-slate-400 text-base leading-relaxed font-light">Material alami yang menyerap dan melepas panas secara optimal, menjaga sirkulasi suhu ruangan tetap sejuk di negara tropis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Katalog Produk (Editorial Style) -->
    <section class="py-24 sm:py-32 bg-slate-50" id="katalog" x-data="{ selectedCategory: 'all' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-10 border-b border-slate-200 pb-10">
                <div class="max-w-2xl">
                    <h2 class="text-4xl md:text-6xl font-heading font-normal text-slate-900 mb-6 leading-tight">Koleksi <span class="italic text-primary-600">Eksklusif.</span></h2>
                    <p class="text-lg text-slate-600 font-light">Pilih material yang mendefinisikan karakter bangunan Anda.</p>
                </div>
                
                <!-- Animated Filter Tabs -->
                <div class="flex space-x-2 bg-slate-200/50 p-1.5 rounded-full overflow-x-auto w-full md:w-auto shrink-0 no-scrollbar relative">
                    <button @click="selectedCategory = 'all'" 
                            :class="selectedCategory === 'all' ? 'text-white' : 'text-slate-600 hover:text-primary-600'" 
                            class="relative px-8 py-3 rounded-full text-sm font-bold transition-colors z-10 whitespace-nowrap">
                        <span x-show="selectedCategory === 'all'" class="absolute inset-0 bg-primary-600 rounded-full -z-10 shadow-md shadow-primary-500/20" x-transition.opacity></span>
                        Semua
                    </button>
                    <button @click="selectedCategory = 'beton'" 
                            :class="selectedCategory === 'beton' ? 'text-white' : 'text-slate-600 hover:text-primary-600'" 
                            class="relative px-8 py-3 rounded-full text-sm font-bold transition-colors z-10 whitespace-nowrap">
                        <span x-show="selectedCategory === 'beton'" class="absolute inset-0 bg-primary-600 rounded-full -z-10 shadow-md shadow-primary-500/20" x-transition.opacity></span>
                        Beton Premium
                    </button>
                    <button @click="selectedCategory = 'tanah_liat'" 
                            :class="selectedCategory === 'tanah_liat' ? 'text-white' : 'text-slate-600 hover:text-primary-600'" 
                            class="relative px-8 py-3 rounded-full text-sm font-bold transition-colors z-10 whitespace-nowrap">
                        <span x-show="selectedCategory === 'tanah_liat'" class="absolute inset-0 bg-primary-600 rounded-full -z-10 shadow-md shadow-primary-500/20" x-transition.opacity></span>
                        Tanah Liat
                    </button>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Produk 1 -->
                <div x-show="selectedCategory === 'all' || selectedCategory === 'beton'" x-transition class="group bg-white rounded-[2rem] border border-slate-200 overflow-hidden hover:shadow-xl hover:-translate-y-2 transition-all duration-500">
                    <div class="relative aspect-square bg-slate-50 p-8 flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('images/genteng_flat.png') }}" alt="Genteng Beton Flat" class="object-contain w-full h-full group-hover:scale-110 transition-transform duration-700 mix-blend-multiply">
                        <div class="absolute top-6 left-6">
                            <span class="bg-slate-200 text-slate-700 text-xs font-bold px-3 py-1.5 rounded-full tracking-widest uppercase">Beton Premium</span>
                        </div>
                    </div>
                    
                    <div class="p-8">
                        <h3 class="text-3xl font-heading font-normal text-slate-900 mb-6">Flat Minimalis</h3>
                        
                        <div class="grid grid-cols-3 gap-4 mb-8 pt-6 border-t border-slate-100">
                            <div>
                                <span class="block text-slate-500 text-xs font-medium mb-1">Panjang</span>
                                <span class="block text-slate-900 font-bold">33 cm</span>
                            </div>
                            <div>
                                <span class="block text-slate-500 text-xs font-medium mb-1">Lebar</span>
                                <span class="block text-slate-900 font-bold">42 cm</span>
                            </div>
                            <div>
                                <span class="block text-slate-500 text-xs font-medium mb-1">Berat</span>
                                <span class="block text-slate-900 font-bold">4.4 kg</span>
                            </div>
                        </div>
                        
                        <a href="https://wa.me/628122709648" target="_blank" class="flex items-center justify-between w-full border border-slate-200 text-slate-900 font-bold px-6 py-4 rounded-full hover:border-primary-500 hover:text-primary-600 transition-all group/btn">
                            <span>Pesan Sekarang</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover/btn:translate-x-1 transition-transform"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div x-show="selectedCategory === 'all' || selectedCategory === 'beton'" x-transition class="group bg-white rounded-[2rem] border border-slate-200 overflow-hidden hover:shadow-xl hover:-translate-y-2 transition-all duration-500">
                    <div class="relative aspect-square bg-slate-50 p-8 flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('images/genteng_gelombang.png') }}" alt="Genteng Beton Gelombang" class="object-contain w-full h-full group-hover:scale-110 transition-transform duration-700 mix-blend-multiply">
                        <div class="absolute top-6 left-6">
                            <span class="bg-slate-200 text-slate-700 text-xs font-bold px-3 py-1.5 rounded-full tracking-widest uppercase">Beton Premium</span>
                        </div>
                    </div>
                    
                    <div class="p-8">
                        <h3 class="text-3xl font-heading font-normal text-slate-900 mb-6">Gelombang Klasik</h3>
                        
                        <div class="grid grid-cols-3 gap-4 mb-8 pt-6 border-t border-slate-100">
                            <div>
                                <span class="block text-slate-500 text-xs font-medium mb-1">Panjang</span>
                                <span class="block text-slate-900 font-bold">33 cm</span>
                            </div>
                            <div>
                                <span class="block text-slate-500 text-xs font-medium mb-1">Lebar</span>
                                <span class="block text-slate-900 font-bold">42 cm</span>
                            </div>
                            <div>
                                <span class="block text-slate-500 text-xs font-medium mb-1">Berat</span>
                                <span class="block text-slate-900 font-bold">4.2 kg</span>
                            </div>
                        </div>
                        
                        <a href="https://wa.me/628122709648" target="_blank" class="flex items-center justify-between w-full border border-slate-200 text-slate-900 font-bold px-6 py-4 rounded-full hover:border-primary-500 hover:text-primary-600 transition-all group/btn">
                            <span>Pesan Sekarang</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover/btn:translate-x-1 transition-transform"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div x-show="selectedCategory === 'all' || selectedCategory === 'tanah_liat'" x-transition class="group bg-white rounded-[2rem] border border-slate-200 overflow-hidden hover:shadow-xl hover:-translate-y-2 transition-all duration-500">
                    <div class="relative aspect-square bg-slate-50 p-8 flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('images/genteng_tanah_liat.png') }}" alt="Genteng Tanah Liat Morando" class="object-contain w-full h-full group-hover:scale-110 transition-transform duration-700 mix-blend-multiply">
                        <div class="absolute top-6 left-6">
                            <span class="bg-primary-50 text-primary-600 text-xs font-bold px-3 py-1.5 rounded-full tracking-widest uppercase">Tanah Liat</span>
                        </div>
                    </div>
                    
                    <div class="p-8">
                        <h3 class="text-3xl font-heading font-normal text-slate-900 mb-6">Morando Natural</h3>
                        
                        <div class="grid grid-cols-3 gap-4 mb-8 pt-6 border-t border-slate-100">
                            <div>
                                <span class="block text-slate-500 text-xs font-medium mb-1">Panjang</span>
                                <span class="block text-slate-900 font-bold">32 cm</span>
                            </div>
                            <div>
                                <span class="block text-slate-500 text-xs font-medium mb-1">Lebar</span>
                                <span class="block text-slate-900 font-bold">40 cm</span>
                            </div>
                            <div>
                                <span class="block text-slate-500 text-xs font-medium mb-1">Berat</span>
                                <span class="block text-slate-900 font-bold">2.2 kg</span>
                            </div>
                        </div>
                        
                        <a href="https://wa.me/628122709648" target="_blank" class="flex items-center justify-between w-full border border-slate-200 text-slate-900 font-bold px-6 py-4 rounded-full hover:border-primary-500 hover:text-primary-600 transition-all group/btn">
                            <span>Pesan Sekarang</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover/btn:translate-x-1 transition-transform"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri Proyek (Asymmetric Bento Grid) -->
    <section class="py-24 sm:py-32 bg-white" id="galeri" x-data="{ imgModal: false, imgModalSrc: '' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-16 md:mb-24 flex flex-col md:flex-row justify-between items-end gap-8">
                <div>
                    <h2 class="text-4xl md:text-6xl font-heading font-normal text-slate-900 mb-4 leading-tight">Portofolio <span class="italic text-primary-600">Karya.</span></h2>
                    <p class="text-lg text-slate-600 font-light max-w-xl">Menjadi bagian dari mahakarya arsitektur di seluruh penjuru negeri.</p>
                </div>
                <div class="hidden md:block">
                    <button class="btn-outline">Lihat Semua Proyek</button>
                </div>
            </div>
            
            <!-- High-end Bento Grid Gallery -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 md:gap-6 auto-rows-[250px] md:auto-rows-[300px]">
                <!-- Large Feature Image -->
                <div class="md:col-span-8 row-span-2 rounded-[2rem] overflow-hidden group cursor-pointer relative" @click="imgModalSrc = 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=60&w=1200&auto=format&fit=crop'; imgModal = true">
                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=60&w=1200&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Rumah Klasik Mewah" loading="lazy">
                    <div class="absolute inset-0 bg-slate-900/20 group-hover:bg-transparent transition-colors duration-500"></div>
                    <div class="absolute bottom-8 left-8">
                        <span class="glass px-4 py-2 rounded-full text-xs font-bold tracking-widest uppercase text-slate-900 shadow-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 translate-y-4 group-hover:translate-y-0">Villa Tropis</span>
                    </div>
                </div>
                
                <!-- Small Image 1 -->
                <div class="md:col-span-4 row-span-1 rounded-[2rem] overflow-hidden group cursor-pointer relative" @click="imgModalSrc = 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=60&w=800&auto=format&fit=crop'; imgModal = true">
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=60&w=800&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Desain Modern" loading="lazy">
                </div>
                
                <!-- Small Image 2 -->
                <div class="md:col-span-4 row-span-1 rounded-[2rem] overflow-hidden group cursor-pointer relative" @click="imgModalSrc = 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?q=60&w=800&auto=format&fit=crop'; imgModal = true">
                    <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?q=60&w=800&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Fasad Minimalis" loading="lazy">
                </div>
            </div>
            
            <div class="mt-8 md:hidden text-center">
                <button class="btn-outline w-full">Lihat Semua Proyek</button>
            </div>
        </div>

        <!-- Fullscreen Image Modal (Refined) -->
        <div x-show="imgModal" x-transition.opacity.duration.300ms class="fixed inset-0 z-[100] flex items-center justify-center bg-slate-950/95 backdrop-blur-md p-4" style="display: none;">
            <div @click.away="imgModal = false" class="relative max-w-6xl w-full h-auto max-h-[90vh]">
                <button @click="imgModal = false" class="absolute -top-12 right-0 text-white hover:text-primary-400 transition-colors z-10 flex items-center gap-2 text-sm font-bold tracking-widest uppercase">
                    Tutup <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
                <img :src="imgModalSrc" class="w-full h-full object-contain rounded-lg shadow-2xl">
            </div>
        </div>
    </section>

    <!-- Banner Ajak Konsultasi (Terracotta Dominant) -->
    <section class="py-32 relative overflow-hidden bg-primary-600">
        <!-- Subtle glow and textures -->
        <div class="absolute top-0 right-0 w-full h-full bg-gradient-to-bl from-primary-500 via-transparent to-transparent opacity-80 pointer-events-none"></div>
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/stucco.png')] opacity-10 mix-blend-overlay"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-6xl lg:text-7xl font-heading font-normal text-white mb-8 leading-tight">
                Realisasikan Visi <span class="italic font-bold text-primary-100">Arsitektur</span> Anda.
            </h2>
            <p class="text-xl text-primary-100/90 mb-12 max-w-2xl mx-auto font-light leading-relaxed">Tim ahli kami siap memberikan konsultasi material, perhitungan teknis, dan estimasi biaya secara komprehensif.</p>
            <a href="https://wa.me/628122709648" target="_blank" class="bg-white text-primary-600 font-sans font-bold px-10 py-5 rounded-full hover:bg-primary-50 hover:scale-[1.02] transition-all duration-300 active:scale-[0.98] inline-flex items-center justify-center gap-2 shadow-2xl">
                Konsultasi Sekarang
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </a>
        </div>
    </section>

    <!-- Testimoni & Maps -->
    <section class="py-24 sm:py-32 bg-slate-50" id="testimoni">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                
                <!-- Testimonials -->
                <div>
                    <h2 class="text-4xl md:text-5xl font-heading font-normal text-slate-900 mb-12">Reputasi <span class="italic text-primary-500">Teruji.</span></h2>
                    
                    <div class="space-y-8">
                        <!-- Review 1 -->
                        <div class="bg-white p-10 rounded-[2rem] border border-slate-200/60 shadow-sm hover:shadow-md transition-shadow duration-300">
                            <div class="flex items-center gap-1 text-primary-500 mb-6">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current text-slate-300" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <p class="text-xl text-slate-700 leading-relaxed mb-8 font-heading italic">"Presisi dan keindahan dalam satu produk. Genteng beton dari Atmorejo benar-benar menyempurnakan fasad rumah kami."</p>
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 bg-slate-900 rounded-full flex items-center justify-center font-heading font-normal text-xl text-white">A</div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-lg">Bpk. Ahmad</h4>
                                    <span class="text-sm text-slate-500">Pemilik Rumah</span>
                                </div>
                            </div>
                        </div>

                        <!-- Review 2 -->
                        <div class="bg-white p-10 rounded-[2rem] border border-slate-200/60 shadow-sm hover:shadow-md transition-shadow duration-300">
                            <div class="flex items-center gap-1 text-primary-500 mb-6">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <p class="text-xl text-slate-700 leading-relaxed mb-8 font-heading italic">"Sebagai arsitek, saya sangat ketat soal material. Atmorejo memberikan konsistensi bentuk dan warna yang berkelas."</p>
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 bg-slate-900 rounded-full flex items-center justify-center font-heading font-normal text-xl text-white">S</div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-lg">Bpk. Suryana</h4>
                                    <span class="text-sm text-slate-500">Arsitek Utama</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Location & Maps -->
                <div class="h-full flex flex-col">
                    <h2 class="text-4xl md:text-5xl font-heading font-normal text-slate-900 mb-12">Pusat <span class="italic text-primary-500">Distribusi.</span></h2>
                    
                    <div class="w-full h-[450px] rounded-[2rem] overflow-hidden bg-slate-200 mb-8 border border-slate-200/60 shadow-inner">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.3973605759197!2d110.38538781115147!3d-7.747608876782029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5900b694adc9%3A0x670925a3892daf75!2sCV%20Atmorejo%20Genteng!5e0!3m2!1sen!2sid!4v1778007162316!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="grayscale hover:grayscale-0 transition-all duration-700"></iframe>
                    </div>

                    <div class="grid grid-cols-2 gap-8 p-8 bg-white rounded-[2rem] border border-slate-200/60 shadow-sm">
                        <div>
                            <h4 class="text-xs font-bold tracking-widest uppercase text-primary-500 mb-3">Alamat</h4>
                            <p class="text-slate-900 text-base leading-relaxed font-medium"> Jl. Kaliurang No.10 KM 6,8 No, Kayen, Condongcatur,<br>Kec. Depok, Kabupaten Sleman, <br>Daerah Istimewa Yogyakarta 55281</p>
                        </div>
                        <div>
                            <h4 class="text-xs font-bold tracking-widest uppercase text-primary-500 mb-3">Waktu Operasional</h4>
                            <p class="text-slate-900 text-base leading-relaxed font-medium">Senin - Sabtu<br>08:30 - 16:00 WIB</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-layout>
