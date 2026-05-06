<x-layout>
<<<<<<< HEAD
    <!-- Cinematic Hero Section -->
    <section class="relative min-h-screen flex flex-col justify-end w-full" id="beranda">
        <!-- Background Image & Gradient Overlays -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=2070&auto=format&fit=crop" alt="Pabrik Genteng Premium" class="w-full h-full object-cover animate-[scale_20s_ease-in-out_infinite_alternate]" style="transform-origin: center;">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-900/30 via-slate-900/60 to-slate-950"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950/80 via-transparent to-slate-950/80"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 px-4 sm:px-6 lg:px-12 max-w-7xl mx-auto w-full pt-28 pb-32">
            <div class="max-w-4xl" x-data="{ show: false }" x-init="setTimeout(() => show = true, 300)">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-white/20 bg-white/5 backdrop-blur-md mb-8 transition-all duration-1000 transform" :class="show ? 'translate-y-0 opacity-100' : 'translate-y-4 opacity-0'">
                    <span class="w-2 h-2 rounded-full bg-primary-500 animate-pulse"></span>
                    <span class="text-white/80 text-xs font-bold uppercase tracking-[0.2em]">Mahakarya Atap Sejak 1990</span>
                </div>

                <h1 class="text-5xl sm:text-7xl lg:text-[7rem] font-heading font-normal text-white leading-[1.1] mb-8 transition-all duration-1000 delay-100 transform" :class="show ? 'translate-y-0 opacity-100' : 'translate-y-8 opacity-0'">
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
                    <a href="https://wa.me/6281234567890" target="_blank" class="btn-outline-white w-full sm:w-auto">
                        Konsultasi Arsitektural
                    </a>
                </div>
            </div>
        </div>

        <!-- Floating Info Bar (Glassmorphism) -->
        <div class="absolute bottom-0 left-0 right-0 z-20 translate-y-1/2 px-4 sm:px-6 lg:px-12 hidden md:block">
            <div class="max-w-7xl mx-auto">
                <div class="glass-dark rounded-3xl p-8 grid grid-cols-3 gap-8 divide-x divide-slate-700/50">
                    <div class="px-8 flex items-center gap-6">
                        <div class="w-14 h-14 rounded-full bg-primary-500/20 flex items-center justify-center text-primary-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                        </div>
                        <div>
                            <p class="text-white font-heading font-bold text-2xl">Harga Pabrik</p>
                            <p class="text-slate-400 text-sm mt-1">Langsung dari fasilitas kami</p>
                        </div>
                    </div>
                    <div class="px-8 flex items-center gap-6">
                        <div class="w-14 h-14 rounded-full bg-primary-500/20 flex items-center justify-center text-primary-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/></svg>
                        </div>
                        <div>
                            <p class="text-white font-heading font-bold text-2xl">Garansi 20 Thn</p>
                            <p class="text-slate-400 text-sm mt-1">Perlindungan cuaca ekstrem</p>
                        </div>
                    </div>
                    <div class="px-8 flex items-center gap-6">
                        <div class="w-14 h-14 rounded-full bg-primary-500/20 flex items-center justify-center text-primary-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        </div>
                        <div>
                            <p class="text-white font-heading font-bold text-2xl">Premium Quality</p>
                            <p class="text-slate-400 text-sm mt-1">Standar estetika tertinggi</p>
                        </div>
                    </div>
                </div>
=======
    <!-- Shopify V2 Hero Section (Full Width Image with Overlay) -->
    <section class="relative min-h-[95vh] flex items-center justify-center w-full overflow-hidden" id="beranda">
        <!-- Background Image & Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=2070&auto=format&fit=crop" alt="Pabrik Genteng Premium" class="w-full h-full object-cover">
            <!-- Gradient Overlay to ensure text contrast -->
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 from-10% via-slate-950/70 to-slate-900/40"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 text-center px-4 max-w-5xl mx-auto mt-20">
            <div class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white text-xs font-bold uppercase tracking-widest mb-8">
                <span class="relative flex h-2 w-2">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                </span>
                Ekselensi Atap Sejak 1990
            </div>

            <h1 class="text-6xl sm:text-7xl md:text-8xl lg:text-[6.5rem] font-heading font-bold text-white tracking-tighter leading-[1.05] mb-8">
                Kualitas Premium.<br>Ketahanan Abadi.
            </h1>
            
            <p class="text-lg md:text-2xl text-slate-200 mb-12 max-w-3xl mx-auto leading-relaxed">
                Menciptakan mahakarya arsitektur melalui kualitas genteng premium. Perlindungan elegan untuk hunian Anda, diwariskan dari generasi ke generasi.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center w-full sm:w-auto">
                <a href="#katalog" class="btn-primary w-full sm:w-auto">
                    Koleksi Kami
                </a>
                <a href="https://wa.me/6281234567890" target="_blank" class="btn-outline w-full sm:w-auto">
                    Konsultasi Ahli
                </a>
>>>>>>> 0c80183053b7a1109115c40951ccb87b8cf95134
            </div>
        </div>
    </section>

<<<<<<< HEAD
    <!-- Keunggulan (Dark Premium Style) -->
    <section class="relative z-10 bg-slate-950 pt-32 pb-24 sm:pt-48 sm:pb-32" id="keunggulan">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-20 md:mb-28 text-center max-w-4xl mx-auto">
                <span class="text-primary-400 font-bold tracking-[0.2em] uppercase text-sm mb-4 block">Filosofi Konstruksi</span>
                <h2 class="text-4xl md:text-6xl font-heading font-normal text-white mb-6 leading-tight">Keunggulan Dalam Setiap <span class="italic text-slate-400">Detail.</span></h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
                <!-- Card 1 -->
                <div class="group relative bg-slate-900 p-10 rounded-[2rem] border border-slate-800 hover:border-primary-500/50 transition-colors duration-500 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-500/10 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-slate-950 border border-slate-800 text-primary-400 rounded-full flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500 shadow-lg">
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
                        <div class="w-16 h-16 bg-slate-950 border border-slate-800 text-primary-400 rounded-full flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500 shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                        </div>
                        <h3 class="text-2xl font-heading font-normal text-white mb-4">Ramah Lingkungan</h3>
                        <p class="text-slate-400 text-base leading-relaxed font-light">Material alami yang menyerap dan melepas panas secara optimal, menjaga sirkulasi suhu ruangan tetap sejuk di negara tropis.</p>
                    </div>
=======
    <!-- Keunggulan (Rounded Overlap Style) -->
    <section class="relative z-20 bg-white -mt-16 rounded-t-[3rem] py-24 sm:py-32" id="keunggulan">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="mb-16 md:mb-24 text-center max-w-3xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-slate-900 mb-6 tracking-tight">Filosofi Kualitas Kami.</h2>
                <p class="text-lg text-slate-500 leading-relaxed">Lebih dari sekadar pelindung, setiap keping genteng kami adalah dedikasi terhadap seni konstruksi dan keamanan keluarga Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-slate-50 p-10 rounded-[2rem] border border-slate-100 hover:bg-white hover:shadow-lg transition-all duration-300 group">
                    <div class="w-14 h-14 bg-slate-900 text-white rounded-full flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-slate-900 mb-4 tracking-tight">Ketahanan Abadi</h3>
                    <p class="text-slate-500 text-base leading-relaxed">Diproses dengan pemanasan tingkat tinggi menghasilkan kepadatan material yang tahan terhadap lumut dan cuaca ekstrem.</p>
                </div>
                
                <!-- Card 2 -->
                <div class="bg-slate-50 p-10 rounded-[2rem] border border-slate-100 hover:bg-white hover:shadow-lg transition-all duration-300 group">
                    <div class="w-14 h-14 bg-primary-600 text-white rounded-full flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18"/><path d="M15 3v18"/></svg>
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-slate-900 mb-4 tracking-tight">Estetika Arsitektural</h3>
                    <p class="text-slate-500 text-base leading-relaxed">Desain geometris presisi yang menyempurnakan garis atap, cocok untuk gaya hunian dari klasik hingga ultra-modern.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-slate-50 p-10 rounded-[2rem] border border-slate-100 hover:bg-white hover:shadow-lg transition-all duration-300 group">
                    <div class="w-14 h-14 bg-primary-600 text-white rounded-full flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg>
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-slate-900 mb-4 tracking-tight">Harga Pabrik</h3>
                    <p class="text-slate-500 text-base leading-relaxed">Investasi cerdas untuk hunian Anda. Dapatkan kualitas setara standar internasional langsung dari fasilitas produksi kami.</p>
>>>>>>> 0c80183053b7a1109115c40951ccb87b8cf95134
                </div>
            </div>
        </div>
    </section>

<<<<<<< HEAD
    <!-- Katalog Produk (Editorial Style) -->
    <section class="py-24 sm:py-32 bg-slate-50" id="katalog" x-data="{ selectedCategory: 'all' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-10 border-b border-slate-200 pb-10">
                <div class="max-w-2xl">
                    <h2 class="text-4xl md:text-6xl font-heading font-normal text-slate-900 mb-6 leading-tight">Koleksi <span class="italic text-slate-500">Eksklusif.</span></h2>
                    <p class="text-lg text-slate-600 font-light">Pilih material yang mendefinisikan karakter bangunan Anda.</p>
                </div>
                
                <!-- Animated Filter Tabs -->
                <div class="flex space-x-2 bg-slate-200/50 p-1.5 rounded-full overflow-x-auto w-full md:w-auto shrink-0 no-scrollbar relative">
                    <button @click="selectedCategory = 'all'" 
                            :class="selectedCategory === 'all' ? 'text-white' : 'text-slate-600 hover:text-slate-900'" 
                            class="relative px-8 py-3 rounded-full text-sm font-bold transition-colors z-10 whitespace-nowrap">
                        <span x-show="selectedCategory === 'all'" class="absolute inset-0 bg-slate-900 rounded-full -z-10" x-transition.opacity></span>
                        Semua
                    </button>
                    <button @click="selectedCategory = 'beton'" 
                            :class="selectedCategory === 'beton' ? 'text-white' : 'text-slate-600 hover:text-slate-900'" 
                            class="relative px-8 py-3 rounded-full text-sm font-bold transition-colors z-10 whitespace-nowrap">
                        <span x-show="selectedCategory === 'beton'" class="absolute inset-0 bg-slate-900 rounded-full -z-10" x-transition.opacity></span>
                        Beton Premium
                    </button>
                    <button @click="selectedCategory = 'tanah_liat'" 
                            :class="selectedCategory === 'tanah_liat' ? 'text-white' : 'text-slate-600 hover:text-slate-900'" 
                            class="relative px-8 py-3 rounded-full text-sm font-bold transition-colors z-10 whitespace-nowrap">
                        <span x-show="selectedCategory === 'tanah_liat'" class="absolute inset-0 bg-slate-900 rounded-full -z-10" x-transition.opacity></span>
                        Tanah Liat
                    </button>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Produk 1 -->
                <div x-show="selectedCategory === 'all' || selectedCategory === 'beton'" x-transition class="group relative rounded-[2rem] overflow-hidden aspect-[4/5] bg-slate-200">
                    <img src="https://images.unsplash.com/photo-1616422285623-14ff4e2a14ae?q=80&w=2000&auto=format&fit=crop" alt="Genteng Beton Flat" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-700 ease-in-out">
                    
                    <!-- Slide up overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300"></div>
                    
                    <div class="absolute inset-x-0 bottom-0 p-8 translate-y-8 group-hover:translate-y-0 transition-transform duration-500 ease-out">
                        <span class="text-xs font-bold tracking-widest uppercase text-white mb-3 block opacity-80">Beton Premium</span>
                        <h3 class="text-3xl font-heading font-normal text-white mb-2">Flat Minimalis</h3>
                        <p class="text-slate-300 mb-6 text-sm font-light opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">Garis tegas untuk arsitektur kontemporer dan modern. Memberikan kesan sleek tanpa mengorbankan durabilitas.</p>
                        
                        <a href="https://wa.me/6281234567890" target="_blank" class="opacity-0 group-hover:opacity-100 transition-all duration-500 delay-200 inline-flex items-center gap-2 text-white font-bold hover:text-primary-400">
                            Pesan Sekarang <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
=======
    <!-- Katalog Produk (Clean Shopify Style) -->
    <section class="py-24 sm:py-32 bg-slate-50" id="katalog" x-data="{ selectedCategory: 'all' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
                <div>
                    <h2 class="text-4xl md:text-5xl font-heading font-bold text-slate-900 mb-4 tracking-tight">Koleksi Eksklusif.</h2>
                    <p class="text-lg text-slate-500 max-w-2xl">Pilih material yang mendefinisikan karakter bangunan Anda.</p>
                </div>
                
                <!-- Filter Tabs -->
                <div class="flex space-x-2 overflow-x-auto pb-2 w-full md:w-auto shrink-0 no-scrollbar">
                    <button @click="selectedCategory = 'all'" :class="selectedCategory === 'all' ? 'bg-primary-600 text-white' : 'bg-white text-slate-600 hover:bg-slate-100 border border-slate-200'" class="px-6 py-2.5 rounded-full text-sm font-bold transition-colors whitespace-nowrap">Semua</button>
                    <button @click="selectedCategory = 'beton'" :class="selectedCategory === 'beton' ? 'bg-primary-600 text-white' : 'bg-white text-slate-600 hover:bg-slate-100 border border-slate-200'" class="px-6 py-2.5 rounded-full text-sm font-bold transition-colors whitespace-nowrap">Beton</button>
                    <button @click="selectedCategory = 'tanah_liat'" :class="selectedCategory === 'tanah_liat' ? 'bg-primary-600 text-white' : 'bg-white text-slate-600 hover:bg-slate-100 border border-slate-200'" class="px-6 py-2.5 rounded-full text-sm font-bold transition-colors whitespace-nowrap">Tanah Liat</button>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Produk 1 -->
                <div x-show="selectedCategory === 'all' || selectedCategory === 'beton'" class="group">
                    <div class="bg-white rounded-3xl aspect-[4/3] mb-6 overflow-hidden relative border border-slate-100">
                        <img src="https://images.unsplash.com/photo-1616422285623-14ff4e2a14ae?q=80&w=2000&auto=format&fit=crop" alt="Genteng Beton Flat" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-700 ease-out">
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-2xl font-heading font-bold text-slate-900 tracking-tight">Flat Minimalis</h3>
                            <span class="text-xs font-bold tracking-widest uppercase text-slate-400 bg-slate-100 px-3 py-1 rounded-full">Beton</span>
                        </div>
                        <p class="text-slate-500 mb-6 text-base">Garis tegas untuk arsitektur kontemporer.</p>
                        <a href="https://wa.me/6281234567890" target="_blank" class="w-full btn-outline border-slate-200 text-slate-900 py-3 text-sm">Lihat Spesifikasi</a>
>>>>>>> 0c80183053b7a1109115c40951ccb87b8cf95134
                    </div>
                </div>

                <!-- Produk 2 -->
<<<<<<< HEAD
                <div x-show="selectedCategory === 'all' || selectedCategory === 'beton'" x-transition class="group relative rounded-[2rem] overflow-hidden aspect-[4/5] bg-slate-200">
                    <img src="https://images.unsplash.com/photo-1594910086208-d2e46cecf475?q=80&w=2000&auto=format&fit=crop" alt="Genteng Beton Garuda" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-700 ease-in-out">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300"></div>
                    
                    <div class="absolute inset-x-0 bottom-0 p-8 translate-y-8 group-hover:translate-y-0 transition-transform duration-500 ease-out">
                        <span class="text-xs font-bold tracking-widest uppercase text-white mb-3 block opacity-80">Beton Premium</span>
                        <h3 class="text-3xl font-heading font-normal text-white mb-2">Gelombang Klasik</h3>
                        <p class="text-slate-300 mb-6 text-sm font-light opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">Dimensi kaya dengan sistem interlocking ekstra kuat. Sempurna untuk hunian gaya mediterania atau tropis klasik.</p>
                        
                        <a href="https://wa.me/6281234567890" target="_blank" class="opacity-0 group-hover:opacity-100 transition-all duration-500 delay-200 inline-flex items-center gap-2 text-white font-bold hover:text-primary-400">
                            Pesan Sekarang <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
=======
                <div x-show="selectedCategory === 'all' || selectedCategory === 'beton'" class="group">
                    <div class="bg-white rounded-3xl aspect-[4/3] mb-6 overflow-hidden relative border border-slate-100">
                        <img src="https://images.unsplash.com/photo-1594910086208-d2e46cecf475?q=80&w=2000&auto=format&fit=crop" alt="Genteng Beton Garuda" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-700 ease-out">
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-2xl font-heading font-bold text-slate-900 tracking-tight">Gelombang Klasik</h3>
                            <span class="text-xs font-bold tracking-widest uppercase text-primary-600 bg-primary-50 px-3 py-1 rounded-full">Beton</span>
                        </div>
                        <p class="text-slate-500 mb-6 text-base">Dimensi kaya dengan sistem interlocking.</p>
                        <a href="https://wa.me/6281234567890" target="_blank" class="w-full btn-outline border-slate-200 text-slate-900 py-3 text-sm">Lihat Spesifikasi</a>
>>>>>>> 0c80183053b7a1109115c40951ccb87b8cf95134
                    </div>
                </div>

                <!-- Produk 3 -->
<<<<<<< HEAD
                <div x-show="selectedCategory === 'all' || selectedCategory === 'tanah_liat'" x-transition class="group relative rounded-[2rem] overflow-hidden aspect-[4/5] bg-primary-900">
                    <!-- Texture Overlay for Clay -->
                    <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/stucco.png')]"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/60 to-transparent opacity-90"></div>
                    
                    <div class="absolute inset-x-0 bottom-0 p-8 translate-y-8 group-hover:translate-y-0 transition-transform duration-500 ease-out">
                        <span class="text-xs font-bold tracking-[0.2em] uppercase text-primary-400 mb-3 block">Tanah Liat</span>
                        <h3 class="text-3xl font-heading font-normal text-white mb-2">Morando Natural</h3>
                        <p class="text-slate-300 mb-6 text-sm font-light opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">Keanggunan bernapas yang ramah lingkungan. Dibuat dengan presisi tinggi menghasilkan warna natural yang tak lekang oleh waktu.</p>
                        
                        <a href="https://wa.me/6281234567890" target="_blank" class="opacity-0 group-hover:opacity-100 transition-all duration-500 delay-200 inline-flex items-center gap-2 text-white font-bold hover:text-primary-400">
                            Pesan Sekarang <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
=======
                <div x-show="selectedCategory === 'all' || selectedCategory === 'tanah_liat'" class="group">
                    <div class="bg-slate-200 rounded-3xl aspect-[4/3] mb-6 overflow-hidden relative border border-slate-100 flex items-center justify-center">
                        <span class="text-slate-400 font-bold text-sm tracking-widest uppercase">Tanah Liat</span>
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-2xl font-heading font-bold text-slate-900 tracking-tight">Morando Natural</h3>
                            <span class="text-xs font-bold tracking-widest uppercase text-primary-600 bg-primary-50 px-3 py-1 rounded-full">Tanah Liat</span>
                        </div>
                        <p class="text-slate-500 mb-6 text-base">Keanggunan bernapas yang ramah lingkungan.</p>
                        <a href="https://wa.me/6281234567890" target="_blank" class="w-full btn-outline border-slate-200 text-slate-900 py-3 text-sm">Lihat Spesifikasi</a>
>>>>>>> 0c80183053b7a1109115c40951ccb87b8cf95134
                    </div>
                </div>
            </div>
        </div>
    </section>

<<<<<<< HEAD
    <!-- Galeri Proyek (Asymmetric Bento Grid) -->
    <section class="py-24 sm:py-32 bg-white" id="galeri" x-data="{ imgModal: false, imgModalSrc: '' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-16 md:mb-24 flex flex-col md:flex-row justify-between items-end gap-8">
                <div>
                    <h2 class="text-4xl md:text-6xl font-heading font-normal text-slate-900 mb-4 leading-tight">Portofolio <span class="italic text-slate-500">Karya.</span></h2>
                    <p class="text-lg text-slate-600 font-light max-w-xl">Menjadi bagian dari mahakarya arsitektur di seluruh penjuru negeri.</p>
                </div>
                <div class="hidden md:block">
                    <button class="btn-outline">Lihat Semua Proyek</button>
                </div>
            </div>
            
            <!-- High-end Bento Grid Gallery -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 md:gap-6 auto-rows-[250px] md:auto-rows-[300px]">
                <!-- Large Feature Image -->
                <div class="md:col-span-8 row-span-2 rounded-[2rem] overflow-hidden group cursor-pointer relative" @click="imgModalSrc = 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=2075&auto=format&fit=crop'; imgModal = true">
                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=2075&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" alt="Rumah Klasik Mewah">
                    <div class="absolute inset-0 bg-slate-900/20 group-hover:bg-transparent transition-colors duration-500"></div>
                    <div class="absolute bottom-8 left-8">
                        <span class="glass px-4 py-2 rounded-full text-xs font-bold tracking-widest uppercase text-slate-900 shadow-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 translate-y-4 group-hover:translate-y-0">Villa Tropis</span>
=======
    <!-- Galeri Proyek (Shopify Style) -->
    <section class="py-24 sm:py-32 bg-white" id="galeri" x-data="{ imgModal: false, imgModalSrc: '' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-16 md:mb-24 text-center">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-slate-900 mb-4 tracking-tight">Galeri Portofolio.</h2>
                <p class="text-lg text-slate-500 max-w-2xl mx-auto">Sentuhan akhir pada mahakarya hunian premium.</p>
            </div>
            
            <!-- Bento Grid Gallery -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 auto-rows-[200px] md:auto-rows-[300px]">
                <!-- Large Feature Image -->
                <div class="col-span-2 row-span-2 rounded-[2rem] overflow-hidden group cursor-pointer border border-slate-100 relative" @click="imgModalSrc = 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=2075&auto=format&fit=crop'; imgModal = true">
                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=2075&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Rumah Klasik Mewah">
                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-white/90 backdrop-blur-sm text-slate-900 px-6 py-2 rounded-full font-bold text-sm">Lihat Detail</span>
>>>>>>> 0c80183053b7a1109115c40951ccb87b8cf95134
                    </div>
                </div>
                
                <!-- Small Image 1 -->
<<<<<<< HEAD
                <div class="md:col-span-4 row-span-1 rounded-[2rem] overflow-hidden group cursor-pointer relative" @click="imgModalSrc = 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=2070&auto=format&fit=crop'; imgModal = true">
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" alt="Desain Modern">
                </div>
                
                <!-- Small Image 2 -->
                <div class="md:col-span-4 row-span-1 rounded-[2rem] overflow-hidden group cursor-pointer relative" @click="imgModalSrc = 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?q=80&w=2070&auto=format&fit=crop'; imgModal = true">
                    <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" alt="Fasad Minimalis">
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
=======
                <div class="col-span-2 md:col-span-1 row-span-1 rounded-[2rem] overflow-hidden group cursor-pointer border border-slate-100 relative" @click="imgModalSrc = 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=2070&auto=format&fit=crop'; imgModal = true">
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Desain Modern">
                </div>
                
                <!-- Small Image 2 -->
                <div class="col-span-2 md:col-span-1 row-span-1 rounded-[2rem] overflow-hidden group cursor-pointer border border-slate-100 relative" @click="imgModalSrc = 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?q=80&w=2070&auto=format&fit=crop'; imgModal = true">
                    <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Fasad Minimalis">
                </div>
                
                <!-- Medium Landscape Image -->
                <div class="col-span-2 row-span-1 rounded-[2rem] overflow-hidden group cursor-pointer border border-slate-100 relative" @click="imgModalSrc = 'https://images.unsplash.com/photo-1580587771525-78b9dba3b914?q=80&w=1974&auto=format&fit=crop'; imgModal = true">
                    <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?q=80&w=1974&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Villa Tropis">
                </div>
            </div>
        </div>

        <!-- Fullscreen Image Modal -->
        <div x-show="imgModal" class="fixed inset-0 z-[100] flex items-center justify-center bg-slate-900/95 backdrop-blur-sm p-4" style="display: none;">
            <div @click.away="imgModal = false" class="relative max-w-5xl w-full h-auto max-h-[90vh] rounded-2xl overflow-hidden shadow-2xl">
                <button @click="imgModal = false" class="absolute top-4 right-4 bg-white/20 hover:bg-white/40 backdrop-blur-md text-white rounded-full p-2 transition-colors z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
                <img :src="imgModalSrc" class="w-full h-full object-contain bg-transparent">
>>>>>>> 0c80183053b7a1109115c40951ccb87b8cf95134
            </div>
        </div>
    </section>

<<<<<<< HEAD
    <!-- Banner Ajak Konsultasi (Sophisticated Dark) -->
    <section class="py-32 relative overflow-hidden bg-slate-950">
        <!-- Subtle glow effects -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-4xl h-96 bg-primary-600/30 blur-[120px] rounded-full pointer-events-none"></div>
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/noise-pattern-with-subtle-cross-lines.png')] opacity-20 mix-blend-overlay"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-6xl lg:text-7xl font-heading font-normal text-white mb-8 leading-tight">
                Realisasikan Visi <span class="italic text-primary-400">Arsitektur</span> Anda.
            </h2>
            <p class="text-xl text-slate-400 mb-12 max-w-2xl mx-auto font-light leading-relaxed">Tim ahli kami siap memberikan konsultasi material, perhitungan teknis, dan estimasi biaya secara komprehensif.</p>
            <a href="https://wa.me/6281234567890" target="_blank" class="btn-primary">
                Konsultasi Sekarang
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
=======
    <!-- Banner Ajak Konsultasi (Shopify Callout Style) -->
    <section class="py-32 bg-primary-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-6xl font-heading font-bold text-white mb-8 tracking-tighter leading-tight">
                Konsultasikan visi arsitektur Anda dengan ahli kami.
            </h2>
            <p class="text-xl text-white mb-10 max-w-2xl mx-auto">Kami siap membantu Anda memilih material atap yang paling tepat dan menghitung estimasi kebutuhannya.</p>
            <a href="https://wa.me/6281234567890" target="_blank" class="btn-primary bg-white text-primary-600 hover:bg-slate-100">
                Hubungi Konsultan Kami
>>>>>>> 0c80183053b7a1109115c40951ccb87b8cf95134
            </a>
        </div>
    </section>

    <!-- Testimoni & Maps -->
<<<<<<< HEAD
    <section class="py-24 sm:py-32 bg-slate-50" id="testimoni">
=======
    <section class="py-24 sm:py-32 bg-white" id="testimoni">
>>>>>>> 0c80183053b7a1109115c40951ccb87b8cf95134
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                
                <!-- Testimonials -->
                <div>
<<<<<<< HEAD
                    <h2 class="text-4xl md:text-5xl font-heading font-normal text-slate-900 mb-12">Reputasi <span class="italic text-slate-500">Teruji.</span></h2>
                    
                    <div class="space-y-8">
                        <!-- Review 1 -->
                        <div class="bg-white p-10 rounded-[2rem] border border-slate-200/60 shadow-sm hover:shadow-md transition-shadow duration-300">
                            <div class="flex items-center gap-1 text-primary-500 mb-6">
=======
                    <h2 class="text-4xl md:text-5xl font-heading font-bold text-slate-900 mb-12 tracking-tight">Kepercayaan Klien.</h2>
                    
                    <div class="space-y-12">
                        <!-- Review 1 -->
                        <div class="border-b border-slate-100 pb-10">
                            <div class="flex items-center gap-1 text-slate-900 mb-6">
>>>>>>> 0c80183053b7a1109115c40951ccb87b8cf95134
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current text-slate-300" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
<<<<<<< HEAD
                            <p class="text-xl text-slate-700 leading-relaxed mb-8 font-heading italic">"Presisi dan keindahan dalam satu produk. Genteng beton dari Atmorejo benar-benar menyempurnakan fasad rumah kami."</p>
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 bg-slate-900 rounded-full flex items-center justify-center font-heading font-normal text-xl text-white">A</div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-lg">Bpk. Ahmad</h4>
=======
                            <p class="text-xl text-slate-700 leading-relaxed mb-6">"Presisi dan keindahan dalam satu produk. Genteng beton dari Atmorejo menyempurnakan garis fasad desain rumah kami."</p>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center font-heading font-bold text-xl text-primary-600">A</div>
                                <div>
                                    <h4 class="font-bold text-slate-900">Bpk. Ahmad</h4>
>>>>>>> 0c80183053b7a1109115c40951ccb87b8cf95134
                                    <span class="text-sm text-slate-500">Pemilik Rumah</span>
                                </div>
                            </div>
                        </div>

                        <!-- Review 2 -->
<<<<<<< HEAD
                        <div class="bg-white p-10 rounded-[2rem] border border-slate-200/60 shadow-sm hover:shadow-md transition-shadow duration-300">
                            <div class="flex items-center gap-1 text-primary-500 mb-6">
=======
                        <div class="border-b border-slate-100 pb-10">
                            <div class="flex items-center gap-1 text-slate-900 mb-6">
>>>>>>> 0c80183053b7a1109115c40951ccb87b8cf95134
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
<<<<<<< HEAD
                            <p class="text-xl text-slate-700 leading-relaxed mb-8 font-heading italic">"Sebagai arsitek, saya sangat ketat soal material. Atmorejo memberikan konsistensi bentuk dan warna yang berkelas."</p>
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 bg-slate-900 rounded-full flex items-center justify-center font-heading font-normal text-xl text-white">S</div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-lg">Bpk. Suryana</h4>
                                    <span class="text-sm text-slate-500">Arsitek Utama</span>
=======
                            <p class="text-xl text-slate-700 leading-relaxed mb-6">"Sebagai arsitek, saya menghargai material yang konsisten bentuk dan warnanya. Atmorejo memberikan standar tersebut."</p>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center font-heading font-bold text-xl text-primary-600">S</div>
                                <div>
                                    <h4 class="font-bold text-slate-900">Bpk. Suryana</h4>
                                    <span class="text-sm text-slate-500">Arsitek & Kontraktor</span>
>>>>>>> 0c80183053b7a1109115c40951ccb87b8cf95134
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Location & Maps -->
                <div class="h-full flex flex-col">
<<<<<<< HEAD
                    <h2 class="text-4xl md:text-5xl font-heading font-normal text-slate-900 mb-12">Pusat <span class="italic text-slate-500">Distribusi.</span></h2>
                    
                    <div class="w-full h-[450px] rounded-[2rem] overflow-hidden bg-slate-200 mb-8 border border-slate-200/60 shadow-inner">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.3973605759197!2d110.38538781115147!3d-7.747608876782029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5900b694adc9%3A0x670925a3892daf75!2sCV%20Atmorejo%20Genteng!5e0!3m2!1sen!2sid!4v1778007162316!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="grayscale hover:grayscale-0 transition-all duration-700"></iframe>
                    </div>

                    <div class="grid grid-cols-2 gap-8 p-8 bg-white rounded-[2rem] border border-slate-200/60 shadow-sm">
                        <div>
                            <h4 class="text-xs font-bold tracking-widest uppercase text-primary-500 mb-3">Kantor & Galeri</h4>
                            <p class="text-slate-900 text-base leading-relaxed font-medium">Jl. Raya Genteng No. 123,<br>Kec. Sukamakmur, Bogor</p>
                        </div>
                        <div>
                            <h4 class="text-xs font-bold tracking-widest uppercase text-primary-500 mb-3">Waktu Operasional</h4>
                            <p class="text-slate-900 text-base leading-relaxed font-medium">Senin - Sabtu<br>08:00 - 16:00 WIB</p>
=======
                    <h2 class="text-4xl md:text-5xl font-heading font-bold text-slate-900 mb-12 tracking-tight">Kunjungi Galeri Kami.</h2>
                    
                    <div class="w-full h-[400px] rounded-3xl overflow-hidden bg-slate-100 mb-8 border border-slate-200">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.3973605759197!2d110.38538781115147!3d-7.747608876782029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5900b694adc9%3A0x670925a3892daf75!2sCV%20Atmorejo%20Genteng!5e0!3m2!1sen!2sid!4v1778007162316!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="grid grid-cols-2 gap-8">
                        <div>
                            <h4 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-2">Alamat</h4>
                            <p class="text-slate-900 text-base leading-relaxed">Jl. Raya Genteng No. 123,<br>Kec. Sukamakmur, Bogor</p>
                        </div>
                        <div>
                            <h4 class="text-xs font-bold tracking-widest uppercase text-slate-500 mb-2">Operasional</h4>
                            <p class="text-slate-900 text-base leading-relaxed">Senin - Sabtu<br>08:00 - 16:00 WIB</p>
>>>>>>> 0c80183053b7a1109115c40951ccb87b8cf95134
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-layout>
