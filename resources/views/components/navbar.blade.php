<<<<<<< HEAD
<header x-data="{ mobileMenuOpen: false }" class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-200 shadow-sm transition-all duration-300">
=======
<header x-data="{ mobileMenuOpen: false }" class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b-[3px] border-primary-500 shadow-sm transition-all duration-300">
>>>>>>> 0c80183053b7a1109115c40951ccb87b8cf95134
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Global">
        <div class="flex items-center justify-between h-20">
            
            <!-- Logo -->
            <div class="flex lg:flex-1">
                <a href="/" class="flex items-center gap-2 group">
                    <div class="w-10 h-10 bg-slate-900 rounded-lg flex items-center justify-center text-white shadow-sm transition-transform group-hover:scale-105">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-home"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <span class="font-heading font-bold text-2xl tracking-tight text-slate-900">
                        Atmorejo
                    </span>
                </a>
            </div>
            
            <div class="flex lg:hidden">
                <button type="button" @click="mobileMenuOpen = true" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-slate-800">
                    <span class="sr-only">Buka menu utama</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="#katalog" class="text-sm font-bold leading-6 text-slate-600 hover:text-slate-900 transition-colors">Katalog Produk</a>
                <a href="#galeri" class="text-sm font-bold leading-6 text-slate-600 hover:text-slate-900 transition-colors">Galeri Proyek</a>
                <a href="#testimoni" class="text-sm font-bold leading-6 text-slate-600 hover:text-slate-900 transition-colors">Testimoni</a>
                <a href="#lokasi" class="text-sm font-bold leading-6 text-slate-600 hover:text-slate-900 transition-colors">Lokasi</a>
            </div>
            
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="https://wa.me/6281234567890" target="_blank" class="bg-slate-900 text-white font-bold py-2.5 px-6 rounded-full hover:bg-slate-800 hover:scale-105 transition-all duration-300 text-sm shadow-md shadow-slate-900/10">Hubungi Kami</a>
            </div>
        </div>
    </nav>

    <!-- Mobile menu -->
    <div x-show="mobileMenuOpen" class="lg:hidden" style="display: none;" role="dialog" aria-modal="true">
        <!-- Background backdrop -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-40 bg-slate-900/50 backdrop-blur-sm"></div>

        <div x-show="mobileMenuOpen"
             @click.away="mobileMenuOpen = false"
             x-transition:enter="transition ease-in-out duration-300 transform"
             x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in-out duration-300 transform"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="translate-x-full"
<<<<<<< HEAD
             class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-slate-900/10 shadow-2xl border-l border-slate-200">
=======
             class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-slate-900/10 shadow-2xl border-t-[3px] border-primary-500">
>>>>>>> 0c80183053b7a1109115c40951ccb87b8cf95134
            
            <div class="flex items-center justify-between">
                <a href="/" class="-m-1.5 p-1.5 flex items-center gap-2">
                    <span class="sr-only">CV Atmorejo Genteng</span>
                    <div class="w-8 h-8 bg-slate-900 rounded-md flex items-center justify-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-home"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <span class="font-heading font-bold text-lg text-slate-800">Atmorejo</span>
                </a>
                <button type="button" @click="mobileMenuOpen = false" class="-m-2.5 rounded-md p-2.5 text-slate-700">
                    <span class="sr-only">Tutup menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-slate-200">
                    <div class="space-y-2 py-6">
                        <a href="#katalog" @click="mobileMenuOpen = false" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-slate-900 hover:bg-slate-50 hover:text-primary-600">Katalog Produk</a>
                        <a href="#galeri" @click="mobileMenuOpen = false" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-slate-900 hover:bg-slate-50 hover:text-primary-600">Galeri Proyek</a>
                        <a href="#testimoni" @click="mobileMenuOpen = false" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-slate-900 hover:bg-slate-50 hover:text-primary-600">Testimoni</a>
                        <a href="#lokasi" @click="mobileMenuOpen = false" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-slate-900 hover:bg-slate-50 hover:text-primary-600">Lokasi</a>
                    </div>
                    <div class="py-6">
                        <a href="https://wa.me/6281234567890" target="_blank" @click="mobileMenuOpen = false" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-slate-900 bg-slate-50 hover:bg-slate-100 text-center mt-4">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
