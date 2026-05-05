<x-layout>
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
            </div>
        </div>
    </section>

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
                </div>
            </div>
        </div>
    </section>

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
                    </div>
                </div>

                <!-- Produk 2 -->
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
                    </div>
                </div>

                <!-- Produk 3 -->
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner Ajak Konsultasi (Shopify Callout Style) -->
    <section class="py-32 bg-primary-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-6xl font-heading font-bold text-white mb-8 tracking-tighter leading-tight">
                Konsultasikan visi arsitektur Anda dengan ahli kami.
            </h2>
            <p class="text-xl text-white mb-10 max-w-2xl mx-auto">Kami siap membantu Anda memilih material atap yang paling tepat dan menghitung estimasi kebutuhannya.</p>
            <a href="https://wa.me/6281234567890" target="_blank" class="btn-primary bg-white text-primary-600 hover:bg-slate-100">
                Hubungi Konsultan Kami
            </a>
        </div>
    </section>

    <!-- Testimoni & Maps -->
    <section class="py-24 sm:py-32 bg-white" id="testimoni">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                
                <!-- Testimonials -->
                <div>
                    <h2 class="text-4xl md:text-5xl font-heading font-bold text-slate-900 mb-12 tracking-tight">Kepercayaan Klien.</h2>
                    
                    <div class="space-y-12">
                        <!-- Review 1 -->
                        <div class="border-b border-slate-100 pb-10">
                            <div class="flex items-center gap-1 text-slate-900 mb-6">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current text-slate-300" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <p class="text-xl text-slate-700 leading-relaxed mb-6">"Presisi dan keindahan dalam satu produk. Genteng beton dari Atmorejo menyempurnakan garis fasad desain rumah kami."</p>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center font-heading font-bold text-xl text-primary-600">A</div>
                                <div>
                                    <h4 class="font-bold text-slate-900">Bpk. Ahmad</h4>
                                    <span class="text-sm text-slate-500">Pemilik Rumah</span>
                                </div>
                            </div>
                        </div>

                        <!-- Review 2 -->
                        <div class="border-b border-slate-100 pb-10">
                            <div class="flex items-center gap-1 text-slate-900 mb-6">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <p class="text-xl text-slate-700 leading-relaxed mb-6">"Sebagai arsitek, saya menghargai material yang konsisten bentuk dan warnanya. Atmorejo memberikan standar tersebut."</p>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center font-heading font-bold text-xl text-primary-600">S</div>
                                <div>
                                    <h4 class="font-bold text-slate-900">Bpk. Suryana</h4>
                                    <span class="text-sm text-slate-500">Arsitek & Kontraktor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Location & Maps -->
                <div class="h-full flex flex-col">
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
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-layout>
