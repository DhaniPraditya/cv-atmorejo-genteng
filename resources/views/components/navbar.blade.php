<header x-data="{ mobileMenuOpen: false, scrolled: false }" 
        @scroll.window="scrolled = (window.pageYOffset > 20)"
        :class="scrolled ? 'glass py-3' : 'bg-transparent py-5'"
        class="fixed top-0 left-0 right-0 z-40 transition-all duration-300">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Global">
        <div class="flex items-center justify-between">
            <div class="flex lg:flex-1">
                <a href="/" class="-m-1.5 p-1.5 flex items-center gap-2">
                    <span class="sr-only">CV Atmorejo Genteng</span>
                    <!-- Logo Placeholder / Icon -->
                    <div class="w-10 h-10 bg-primary-600 rounded-lg flex items-center justify-center text-white shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-home"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <span class="font-heading font-bold text-xl tracking-tight text-slate-800">
                        Atmorejo <span class="text-primary-600">Genteng</span>
                    </span>
                </a>
            </div>
            
            <div class="flex lg:hidden">
                <button type="button" @click="mobileMenuOpen = true" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-slate-700">
                    <span class="sr-only">Buka menu utama</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            
            <div class="hidden lg:flex lg:gap-x-10">
                <a href="#katalog" class="text-sm font-bold leading-6 text-slate-950 hover:opacity-70 transition-opacity">Katalog Produk</a>
                <a href="#galeri" class="text-sm font-bold leading-6 text-slate-950 hover:opacity-70 transition-opacity">Galeri Proyek</a>
                <a href="#testimoni" class="text-sm font-bold leading-6 text-slate-950 hover:opacity-70 transition-opacity">Testimoni</a>
                <a href="#lokasi" class="text-sm font-bold leading-6 text-slate-950 hover:opacity-70 transition-opacity">Lokasi</a>
            </div>
            
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="https://wa.me/6281234567890" target="_blank" class="bg-slate-950 text-white font-bold py-2.5 px-6 rounded-full hover:bg-slate-800 transition-colors text-sm">Hubungi Kami</a>
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
             class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-slate-900/10 shadow-2xl">
            
            <div class="flex items-center justify-between">
                <a href="/" class="-m-1.5 p-1.5 flex items-center gap-2">
                    <span class="sr-only">CV Atmorejo Genteng</span>
                    <div class="w-8 h-8 bg-primary-600 rounded-md flex items-center justify-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-home"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <span class="font-heading font-bold text-lg text-slate-800">Atmorejo <span class="text-primary-600">Genteng</span></span>
                </a>
                <button type="button" @click="mobileMenuOpen = false" class="-m-2.5 rounded-md p-2.5 text-slate-700">
                    <span class="sr-only">Tutup menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-slate-500/10">
                    <div class="space-y-2 py-6">
                        <a href="#katalog" @click="mobileMenuOpen = false" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-slate-900 hover:bg-slate-50 hover:text-primary-600">Katalog Produk</a>
                        <a href="#galeri" @click="mobileMenuOpen = false" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-slate-900 hover:bg-slate-50 hover:text-primary-600">Galeri Proyek</a>
                        <a href="#testimoni" @click="mobileMenuOpen = false" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-slate-900 hover:bg-slate-50 hover:text-primary-600">Testimoni</a>
                        <a href="#lokasi" @click="mobileMenuOpen = false" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-slate-900 hover:bg-slate-50 hover:text-primary-600">Lokasi</a>
                    </div>
                    <div class="py-6">
                        <a href="#kontak" @click="mobileMenuOpen = false" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-primary-600 hover:bg-slate-50">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
