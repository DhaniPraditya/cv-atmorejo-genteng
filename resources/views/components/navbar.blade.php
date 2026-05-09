<header x-data="{ 
    mobileMenuOpen: false,
    scrolled: false 
}" 
@scroll.window="scrolled = (window.pageYOffset > 20)"
class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 py-4 px-4 sm:px-6 lg:px-8"
:class="scrolled ? 'py-3' : 'py-5'">
    <nav class="max-w-7xl mx-auto transition-all duration-300 px-6 lg:px-8 rounded-full border border-white/20 shadow-[0_8px_32px_rgba(0,0,0,0.1)]"
         :class="scrolled ? 'bg-white/70 backdrop-blur-lg' : 'bg-white/40 backdrop-blur-md'">
        <div class="flex items-center justify-between h-16 lg:h-20">
            
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
            
            <!-- Desktop Nav Links -->
            <div class="hidden lg:flex lg:gap-x-10">
                <a href="#katalog" class="text-sm font-bold leading-6 text-slate-700 hover:text-primary-600 transition-colors">Katalog Produk</a>
                <a href="#galeri" class="text-sm font-bold leading-6 text-slate-700 hover:text-primary-600 transition-colors">Galeri Proyek</a>
                <a href="#testimoni" class="text-sm font-bold leading-6 text-slate-700 hover:text-primary-600 transition-colors">Testimoni</a>
                <a href="#lokasi" class="text-sm font-bold leading-6 text-slate-700 hover:text-primary-600 transition-colors">Lokasi</a>
            </div>
            
            <!-- Desktop Button -->
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="https://wa.me/6281234567890" target="_blank" class="bg-[#25D366] text-white font-bold py-2.5 px-6 rounded-full hover:bg-[#128C7E] hover:scale-105 transition-all duration-300 text-sm shadow-md shadow-[#25D366]/20 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    Hubungi Kami
                </a>
            </div>

            <!-- Mobile Toggle -->
            <div class="flex lg:hidden">
                <button type="button" @click="mobileMenuOpen = true" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-slate-800">
                    <span class="sr-only">Buka menu utama</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile menu -->
    <div x-show="mobileMenuOpen" 
         x-cloak
         class="lg:hidden" 
         role="dialog" 
         aria-modal="true">
        <!-- Background backdrop -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-40 bg-slate-900/40 backdrop-blur-sm"></div>

        <div x-show="mobileMenuOpen"
             @click.away="mobileMenuOpen = false"
             x-transition:enter="transition ease-in-out duration-300 transform"
             x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in-out duration-300 transform"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="translate-x-full"
             class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white/90 backdrop-blur-xl px-6 py-6 sm:max-w-sm shadow-2xl">
            
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
                        <a href="#katalog" @click="mobileMenuOpen = false" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-slate-900 hover:bg-primary-50 hover:text-primary-600 transition-colors">Katalog Produk</a>
                        <a href="#galeri" @click="mobileMenuOpen = false" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-slate-900 hover:bg-primary-50 hover:text-primary-600 transition-colors">Galeri Proyek</a>
                        <a href="#testimoni" @click="mobileMenuOpen = false" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-slate-900 hover:bg-primary-50 hover:text-primary-600 transition-colors">Testimoni</a>
                        <a href="#lokasi" @click="mobileMenuOpen = false" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-slate-900 hover:bg-primary-50 hover:text-primary-600 transition-colors">Lokasi</a>
                    </div>
                    <div class="py-6">
                        <a href="https://wa.me/6281234567890" target="_blank" @click="mobileMenuOpen = false" class="flex items-center justify-center gap-2 w-full rounded-full px-3 py-3 text-base font-bold leading-7 text-white bg-[#25D366] hover:bg-[#128C7E] shadow-lg transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
