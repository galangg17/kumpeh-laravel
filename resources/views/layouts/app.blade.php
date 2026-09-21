<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', ($siteSettings['site_name'] ?? 'IKAN ASIN TANJUNG') . ' - Official Store Olahan Ikan Asin Kumpeh Jambi')</title>
    
    <!-- Google Fonts: Plus Jakarta Sans & Playfair Display -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- FontAwesome 6.4.0 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              naturegreen: {
                50: '#F4F9F2',
                100: '#E6F2E2',
                500: '#4CAF50',
                600: '#3B8B29',
                700: '#2E6F22',
                800: '#225219',
                900: '#153610',
              },
              limeaccent: {
                400: '#D4E157',
                500: '#CDDC39',
                600: '#C0CA33',
              },
              darkforest: {
                800: '#1B3813',
                900: '#152B0F',
                950: '#0B1708',
              },
              lightbg: '#F4F8F3',
            },
            fontFamily: {
              sans: ['Plus Jakarta Sans', 'system-ui', 'sans-serif'],
              serif: ['Playfair Display', 'Georgia', 'serif'],
            }
          }
        }
      }
    </script>

    <style>
      body {
        background-color: #F4F8F3;
        color: #1A2E16;
      }
      .glass-header-nature {
        background: rgba(255, 255, 255, 0.96);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
      }
      .btn-lime-pill {
        background-color: #CDDC39;
        color: #153610;
        border-radius: 9999px;
        font-weight: 800;
        transition: all 0.3s ease;
      }
      .btn-lime-pill:hover {
        background-color: #D4E157;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px -5px rgba(205, 220, 57, 0.5);
      }
      .card-nature-hover {
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
      }
      .card-nature-hover:hover {
        transform: translateY(-6px);
        box-shadow: 0 25px 45px -12px rgba(46, 111, 34, 0.18);
        border-color: rgba(60, 139, 41, 0.4);
      }
    </style>
</head>
<body class="bg-lightbg text-slate-900 font-sans antialiased min-h-screen flex flex-col selection:bg-naturegreen-700 selection:text-white overflow-x-hidden pb-16 lg:pb-0">

    <!-- Top Info Bar (Presisi Referensi) -->
    <div class="bg-darkforest-900 text-stone-200 text-xs py-2 px-4 border-b border-darkforest-800">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center gap-6 text-[11px]">
                <span class="flex items-center gap-1.5">
                    <i class="fa-solid fa-location-dot text-limeaccent-400"></i>
                    <span>Tanjung RT 012/RW 000, Kumpeh Ilir, Muaro Jambi</span>
                </span>
                <span class="hidden sm:flex items-center gap-1.5">
                    <i class="fa-solid fa-envelope text-limeaccent-400"></i>
                    <span>{{ $siteSettings['contact_email'] ?? 'admin@desa-kumpeh.id' }}</span>
                </span>
            </div>
            <div class="flex items-center gap-4 text-xs">
                <span class="text-limeaccent-400 font-bold text-[11px]">Program Hilirisasi IMPLI / IFAD / GEF</span>
                <a href="{{ route('admin.login') }}" class="text-stone-300 hover:text-white underline font-bold text-[11px]">
                    Admin CMS
                </a>
            </div>
        </div>
    </div>

    @if(($siteSettings['announcement_enabled'] ?? '1') == '1')
    <!-- Announcement Bar -->
    <div class="bg-naturegreen-700 text-white text-xs py-2 px-4 text-center font-bold tracking-wide flex items-center justify-center gap-2 relative z-50">
        <span class="bg-limeaccent-500 text-darkforest-950 text-[10px] font-extrabold px-2.5 py-0.5 rounded-full uppercase">PROMO</span>
        <span>{{ $siteSettings['announcement_text'] ?? '🔥 PROMO PELUNCURAN TOKO DIGITAL: Gratis Ongkir & Legalitas P-IRT Terverifikasi!' }}</span>
        @if(!empty($siteSettings['announcement_link']))
        <a href="{{ $siteSettings['announcement_link'] }}" class="underline hover:text-limeaccent-400 ml-1">Lihat Promo →</a>
        @endif
    </div>
    @endif

    <!-- Main Navigation Header (Presisi Referensi) -->
    <header class="sticky top-0 z-40 glass-header-nature border-b border-naturegreen-100 shadow-sm" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            
            <!-- Brand Identity Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group shrink-0">
                <div class="w-11 h-11 rounded-2xl bg-naturegreen-700 text-limeaccent-400 flex items-center justify-center text-xl shadow-md group-hover:bg-naturegreen-800 transition-colors shrink-0">
                    <i class="fa-solid fa-leaf"></i>
                </div>
                <div class="leading-tight">
                    <span class="font-extrabold text-xl sm:text-2xl text-naturegreen-900 tracking-tight block">
                        {{ $siteSettings['site_name'] ?? 'IKAN ASIN TANJUNG' }}
                    </span>
                    <span class="text-[10px] text-naturegreen-600 font-bold tracking-wider uppercase block">
                        {{ $siteSettings['site_tagline'] ?? 'Gurih Asli dari Dapur Jambi' }}
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden lg:flex items-center gap-8 font-bold text-xs text-stone-700 tracking-wide">
                <a href="{{ route('home') }}" class="hover:text-naturegreen-700 transition-colors py-1 relative group">
                    Beranda
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-naturegreen-700 transition-all group-hover:w-full"></span>
                </a>
                <a href="#produk" class="hover:text-naturegreen-700 transition-colors py-1 relative group">
                    Katalog Produk
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-naturegreen-700 transition-all group-hover:w-full"></span>
                </a>
                <a href="#sop" class="hover:text-naturegreen-700 transition-colors py-1 relative group">
                    SOP Kebersihan
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-naturegreen-700 transition-all group-hover:w-full"></span>
                </a>
                <a href="#cerita" class="hover:text-naturegreen-700 transition-colors py-1 relative group">
                    Cerita Warga
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-naturegreen-700 transition-all group-hover:w-full"></span>
                </a>
                <a href="#berita" class="hover:text-naturegreen-700 transition-colors py-1 relative group">
                    Kabar UMKM
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-naturegreen-700 transition-all group-hover:w-full"></span>
                </a>
            </nav>

            <!-- Header Action Controls -->
            <div class="flex items-center gap-3 shrink-0">
                <!-- Cart Button with Counter Badge -->
                <button onclick="toggleCartDrawer()" class="relative p-2.5 rounded-full bg-naturegreen-50 text-naturegreen-900 border border-naturegreen-200 hover:bg-naturegreen-100 transition-colors focus:outline-none shadow-sm" aria-label="Buka Keranjang Belanja">
                    <i class="fa-solid fa-basket-shopping text-sm"></i>
                    <span id="cartBadgeCount" class="absolute -top-1.5 -right-1.5 bg-naturegreen-700 text-white font-extrabold text-[10px] w-5 h-5 rounded-full flex items-center justify-center shadow hidden">0</span>
                </button>

                <a href="{{ route('admin.login') }}" class="hidden xl:inline-flex items-center gap-1.5 text-xs font-bold px-3.5 py-2.5 rounded-full border border-naturegreen-200 text-stone-700 hover:bg-naturegreen-50 transition-colors">
                    <i class="fa-solid fa-sliders text-naturegreen-700"></i> Admin CMS
                </a>
                
                <!-- Pill CTA Button (Presisi Referensi MyGarden) -->
                <a href="#produk" class="hidden sm:inline-flex items-center gap-2 btn-lime-pill text-xs sm:text-sm px-6 py-2.5 shadow-md">
                    <span>Pesan Sekarang</span>
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>
                
                <!-- Mobile Toggle Button -->
                <button id="mobileMenuBtn" class="lg:hidden text-stone-900 p-2 text-xl focus:outline-none" onclick="toggleMobileMenu()">
                    <i class="fa-solid fa-bars" id="menuIcon"></i>
                </button>
            </div>

        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden lg:hidden border-t border-naturegreen-200 bg-white px-6 py-5 space-y-3 shadow-xl">
            <a href="{{ route('home') }}" onclick="toggleMobileMenu()" class="block text-sm font-bold text-stone-900 hover:text-naturegreen-700 py-1">Beranda</a>
            <a href="#produk" onclick="toggleMobileMenu()" class="block text-sm font-bold text-stone-900 hover:text-naturegreen-700 py-1">Katalog Produk</a>
            <a href="#sop" onclick="toggleMobileMenu()" class="block text-sm font-bold text-stone-900 hover:text-naturegreen-700 py-1">SOP Kebersihan</a>
            <a href="#cerita" onclick="toggleMobileMenu()" class="block text-sm font-bold text-stone-900 hover:text-naturegreen-700 py-1">Cerita Warga</a>
            <a href="#berita" onclick="toggleMobileMenu()" class="block text-sm font-bold text-stone-900 hover:text-naturegreen-700 py-1">Kabar UMKM</a>
            <a href="{{ route('admin.login') }}" class="block text-sm font-bold text-naturegreen-700 pt-2 border-t border-stone-100">
                <i class="fa-solid fa-sliders mr-2"></i> Portal Admin CMS
            </a>
        </div>
    </header>

    <!-- Main Content Canvas -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- FOOTER (Presisi Referensi Dark Forest Green) -->
    <footer class="bg-darkforest-900 text-stone-300 pt-16 pb-12 border-t border-darkforest-800 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-12 border-b border-darkforest-800">
                
                <!-- Brand & Description -->
                <div class="lg:col-span-5 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-2xl bg-limeaccent-500 text-darkforest-950 flex items-center justify-center text-lg font-extrabold shadow">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                        <span class="font-extrabold text-2xl text-white tracking-tight">
                            {{ $siteSettings['site_name'] ?? 'IKAN ASIN TANJUNG' }}
                        </span>
                    </div>
                    <p class="text-stone-300 text-sm leading-relaxed max-w-md">
                        Produk hilirisasi perikanan rawa gambut mandiri Kelompok Usaha TK-PPEG Sumber Rezeki Kelurahan Tanjung. Hasil pendampingan program IMPLI / IFAD / GEF / DLH Jambi dan PT Laman Cakap Kolaborasi.
                    </p>
                    <div class="pt-2 text-xs text-stone-300 space-y-2">
                        <div class="flex items-start gap-2.5">
                            <i class="fa-solid fa-location-dot text-limeaccent-400 mt-1"></i>
                            <span><strong>Alamat Produksi:</strong> {{ $siteSettings['contact_address'] ?? 'Tanjung RT 012/RW 000, Kelurahan Tanjung, Kec. Kumpeh Ilir, Kab. Muaro Jambi, Jambi 36371' }}</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <i class="fa-solid fa-envelope text-limeaccent-400"></i>
                            <span>{{ $siteSettings['contact_email'] ?? 'admin@desa-kumpeh.id' }}</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-limeaccent-400 font-bold font-mono pt-1">
                            <i class="fa-solid fa-certificate"></i>
                            <span>NIB: {{ $siteSettings['legal_nib'] ?? '1008260074264' }} | Izin Edar P-IRT BPOM Terbit</span>
                        </div>
                    </div>
                </div>

                <!-- Menu Quick Links -->
                <div class="lg:col-span-3 space-y-3">
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider text-limeaccent-400">Navigasi Website</h4>
                    <ul class="space-y-2 text-xs font-semibold uppercase tracking-wider">
                        <li><a href="#produk" class="hover:text-limeaccent-400 transition-colors">Katalog Produk</a></li>
                        <li><a href="#sop" class="hover:text-limeaccent-400 transition-colors">SOP Kebersihan 4-Pilar</a></li>
                        <li><a href="#cerita" class="hover:text-limeaccent-400 transition-colors">Cerita Warga Gambut</a></li>
                        <li><a href="#berita" class="hover:text-limeaccent-400 transition-colors">Kabar Hilirisasi IMPLI</a></li>
                        <li><a href="{{ route('admin.login') }}" class="text-limeaccent-400 hover:text-white font-bold transition-colors">Portal Admin CMS</a></li>
                    </ul>
                </div>

                <!-- Legalities Card -->
                <div class="lg:col-span-4 space-y-4">
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider text-limeaccent-400">Legalitas & BPOM P-IRT</h4>
                    <div class="p-4 rounded-2xl bg-darkforest-800 border border-darkforest-700 text-xs space-y-2.5">
                        <div class="text-white font-bold text-[11px]">Nomor SPP-IRT Resmi Terbit (Masa Berlaku s.d 2031):</div>
                        <ul class="text-xs text-stone-200 space-y-1 font-mono">
                            <li>• Keripik: <span class="text-limeaccent-400 font-bold">{{ $siteSettings['legal_pirt_keripik'] ?? 'P-IRT 5021505010314-31' }}</span></li>
                            <li>• Rempeyek: <span class="text-limeaccent-400 font-bold">{{ $siteSettings['legal_pirt_rempeyek'] ?? 'P-IRT 5051505020314-31' }}</span></li>
                            <li>• Kentang Mustofa: <span class="text-limeaccent-400 font-bold">{{ $siteSettings['legal_pirt_mustofa'] ?? 'P-IRT 5111505030314-31' }}</span></li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Copyright bottom -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-stone-400 gap-4">
                <p>© 2026 {{ $siteSettings['site_name'] ?? 'IKAN ASIN TANJUNG' }} - Kelurahan Tanjung, Kumpeh Ilir, Muaro Jambi. Program IMPLI / IFAD / GEF.</p>
                <p class="flex items-center gap-1 font-semibold">
                    Dibuat dengan <i class="fa-solid fa-heart text-limeaccent-400 text-[10px]"></i> untuk kemandirian warga Tanjung Kumpeh
                </p>
            </div>
        </div>
    </footer>

    <!-- STICKY MOBILE CONVERSION BAR -->
    <div class="lg:hidden fixed bottom-0 left-0 right-0 z-40 bg-white/95 backdrop-blur-md border-t border-naturegreen-200 px-4 py-2.5 flex items-center justify-between shadow-2xl">
        <div class="flex items-center gap-3">
            <button onclick="toggleCartDrawer()" class="relative p-2 rounded-full bg-naturegreen-50 text-naturegreen-900 border border-naturegreen-200">
                <i class="fa-solid fa-basket-shopping text-sm"></i>
                <span id="mobileCartCount" class="absolute -top-1 -right-1 bg-naturegreen-700 text-white font-bold text-[9px] w-4 h-4 rounded-full flex items-center justify-center">0</span>
            </button>
            <div>
                <span class="text-[10px] text-stone-500 block font-semibold leading-none uppercase">Subtotal:</span>
                <span id="mobileCartTotal" class="text-xs font-extrabold text-stone-900">Rp 0</span>
            </div>
        </div>
        <button onclick="toggleCartDrawer()" class="btn-lime-pill text-xs font-bold px-5 py-2.5 shadow flex items-center gap-1.5">
            <i class="fa-brands fa-whatsapp text-sm"></i>
            <span>Checkout WA</span>
        </button>
    </div>

    <!-- FLOATING WA BUTTON -->
    <div class="fixed bottom-16 lg:bottom-6 right-6 z-40 flex flex-col items-end gap-2">
        <div id="waTooltip" class="bg-white text-stone-900 text-xs font-semibold px-4 py-2 rounded-2xl shadow-xl border border-stone-200 flex items-center gap-2 animate-bounce">
            <span class="w-2 h-2 rounded-full bg-naturegreen-600"></span>
            <span>Tanya Admin WA Desa Tanjung!</span>
            <button onclick="document.getElementById('waTooltip').style.display='none'" class="text-stone-400 hover:text-stone-600 ml-1">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <button 
            onclick="openDirectWhatsApp()" 
            class="w-14 h-14 rounded-full bg-naturegreen-700 hover:bg-naturegreen-600 text-white flex items-center justify-center text-3xl shadow-2xl hover:shadow-naturegreen-600/50 transition-all transform hover:scale-110 active:scale-95 group focus:outline-none"
            aria-label="Chat via WhatsApp"
        >
            <i class="fa-brands fa-whatsapp"></i>
        </button>
    </div>

    <!-- SLIDE-OVER INTERACTIVE CART DRAWER -->
    <div id="cartDrawerBackdrop" class="fixed inset-0 z-50 bg-stone-900/60 backdrop-blur-sm hidden transition-opacity" onclick="toggleCartDrawer()"></div>
    <div id="cartDrawer" class="fixed top-0 right-0 bottom-0 z-50 w-full max-w-md bg-white shadow-2xl transform translate-x-full transition-transform duration-300 flex flex-col">
        <!-- Drawer Header -->
        <div class="p-5 bg-naturegreen-900 text-white flex items-center justify-between border-b border-naturegreen-800">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl bg-limeaccent-500 text-darkforest-950 flex items-center justify-center font-extrabold text-base shadow">
                    <i class="fa-solid fa-basket-shopping"></i>
                </div>
                <div>
                    <h3 class="font-extrabold text-lg leading-tight text-white">Keranjang Belanja</h3>
                    <p class="text-[11px] text-stone-300">Ikan Asin Tanjung · Kumpeh Jambi</p>
                </div>
            </div>
            <button onclick="toggleCartDrawer()" class="w-8 h-8 rounded-full bg-white/10 text-stone-300 hover:text-white flex items-center justify-center text-sm">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <!-- Drawer Item List -->
        <div id="cartItemsContainer" class="flex-1 p-5 overflow-y-auto space-y-4">
            <!-- Empty Cart Placeholder -->
            <div id="emptyCartState" class="py-16 text-center space-y-3">
                <div class="w-16 h-16 rounded-2xl bg-naturegreen-50 text-naturegreen-800 flex items-center justify-center text-2xl mx-auto border border-naturegreen-200">
                    <i class="fa-solid fa-cart-flatbed"></i>
                </div>
                <h4 class="font-bold text-base text-stone-900">Keranjang Masih Kosong</h4>
                <p class="text-xs text-stone-500 max-w-xs mx-auto">Pilih produk favorit Anda di katalog dan klik "+ Keranjang" untuk mulai belanja.</p>
            </div>
        </div>

        <!-- Drawer Footer & Checkout -->
        <div class="p-5 bg-lightbg border-t border-naturegreen-200 space-y-4">
            <div class="space-y-2">
                <div class="flex items-center justify-between text-xs text-stone-500 font-semibold">
                    <span>Total Item:</span>
                    <span id="cartTotalItemsCount" class="font-bold text-stone-900">0 Pcs</span>
                </div>
                <div class="flex items-center justify-between text-sm">
                    <span class="font-bold text-stone-900 uppercase tracking-wider text-xs">Total Pembayaran:</span>
                    <span id="cartGrandTotal" class="font-extrabold text-2xl text-naturegreen-800">Rp 0</span>
                </div>
            </div>

            <!-- Customer Notes -->
            <div>
                <label class="block text-[11px] font-bold text-stone-700 uppercase tracking-wider mb-1">Catatan / Alamat Tujuan Singkat</label>
                <input type="text" id="cartCustomerNotes" placeholder="Kota pengiriman atau catatan khusus..." class="w-full border border-naturegreen-200 rounded-xl px-3 py-2 text-xs focus:outline-none focus:border-naturegreen-600 bg-white shadow-sm">
            </div>

            <button onclick="checkoutCartWhatsApp()" class="w-full bg-naturegreen-700 hover:bg-naturegreen-800 text-white font-bold py-3.5 px-4 rounded-xl shadow-lg flex items-center justify-center gap-2 text-sm transition-colors">
                <i class="fa-brands fa-whatsapp text-lg text-limeaccent-400"></i>
                <span>Checkout Direct Order ke WhatsApp</span>
            </button>
        </div>
    </div>

    <!-- CART & MODAL STATE ENGINE -->
    <script>
      lucide.createIcons();

      const adminWhatsAppNumber = "{{ $siteSettings['contact_whatsapp'] ?? '089529628963' }}".replace(/[^0-9]/g, '');
      let cart = [];

      function toggleMobileMenu() {
        const menu = document.getElementById('mobileMenu');
        const icon = document.getElementById('menuIcon');
        menu.classList.toggle('hidden');
        if (menu.classList.contains('hidden')) {
          icon.classList.remove('fa-xmark');
          icon.classList.add('fa-bars');
        } else {
          icon.classList.remove('fa-bars');
          icon.classList.add('fa-xmark');
        }
      }

      function toggleCartDrawer() {
        const drawer = document.getElementById('cartDrawer');
        const backdrop = document.getElementById('cartDrawerBackdrop');
        const isOpen = !drawer.classList.contains('translate-x-full');

        if (isOpen) {
          drawer.classList.add('translate-x-full');
          backdrop.classList.add('hidden');
        } else {
          drawer.classList.remove('translate-x-full');
          backdrop.classList.remove('hidden');
          renderCartItems();
        }
      }

      function addToCart(name, price, image) {
        const existing = cart.find(item => item.name === name);
        if (existing) {
          existing.qty += 1;
        } else {
          cart.push({ name, price: Number(price), image, qty: 1 });
        }
        updateCartBadge();
        toggleCartDrawer();
      }

      function updateCartItemQty(name, delta) {
        const item = cart.find(i => i.name === name);
        if (!item) return;
        item.qty += delta;
        if (item.qty <= 0) {
          cart = cart.filter(i => i.name !== name);
        }
        updateCartBadge();
        renderCartItems();
      }

      function removeCartItem(name) {
        cart = cart.filter(i => i.name !== name);
        updateCartBadge();
        renderCartItems();
      }

      function updateCartBadge() {
        const totalCount = cart.reduce((acc, item) => acc + item.qty, 0);
        const totalAmount = cart.reduce((acc, item) => acc + (item.price * item.qty), 0);

        const badge = document.getElementById('cartBadgeCount');
        const mobileCount = document.getElementById('mobileCartCount');
        const mobileTotal = document.getElementById('mobileCartTotal');

        if (totalCount > 0) {
          badge.innerText = totalCount;
          badge.classList.remove('hidden');
          mobileCount.innerText = totalCount;
          mobileTotal.innerText = 'Rp ' + totalAmount.toLocaleString('id-ID');
        } else {
          badge.classList.add('hidden');
          mobileCount.innerText = '0';
          mobileTotal.innerText = 'Rp 0';
        }
      }

      function renderCartItems() {
        const container = document.getElementById('cartItemsContainer');
        const emptyState = document.getElementById('emptyCartState');

        if (cart.length === 0) {
          container.innerHTML = '';
          container.appendChild(emptyState);
          document.getElementById('cartTotalItemsCount').innerText = '0 Pcs';
          document.getElementById('cartGrandTotal').innerText = 'Rp 0';
          return;
        }

        let html = '';
        let totalQty = 0;
        let grandTotal = 0;

        cart.forEach(item => {
          const subtotal = item.price * item.qty;
          totalQty += item.qty;
          grandTotal += subtotal;

          html += `
            <div class="flex items-center justify-between gap-3 p-3.5 bg-white rounded-2xl border border-naturegreen-200">
                <img src="${item.image}" class="w-14 h-14 rounded-xl object-contain bg-lightbg p-1 border border-naturegreen-100 shrink-0">
                <div class="flex-1 min-w-0">
                    <h5 class="font-bold text-xs text-stone-900 truncate">${item.name}</h5>
                    <span class="text-[11px] text-naturegreen-700 font-bold block">Rp ${item.price.toLocaleString('id-ID')}</span>
                    <div class="flex items-center gap-2 mt-1.5">
                        <button onclick="updateCartItemQty('${item.name}', -1)" class="w-6 h-6 rounded-lg bg-naturegreen-100 text-naturegreen-900 font-bold text-xs flex items-center justify-center">-</button>
                        <span class="text-xs font-bold text-stone-800 px-1">${item.qty}</span>
                        <button onclick="updateCartItemQty('${item.name}', 1)" class="w-6 h-6 rounded-lg bg-naturegreen-100 text-naturegreen-900 font-bold text-xs flex items-center justify-center">+</button>
                    </div>
                </div>
                <div class="text-right shrink-0">
                    <span class="font-extrabold text-xs text-stone-900 block">Rp ${subtotal.toLocaleString('id-ID')}</span>
                    <button onclick="removeCartItem('${item.name}')" class="text-stone-400 hover:text-red-600 text-xs mt-2">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </div>
            </div>
          `;
        });

        container.innerHTML = html;
        document.getElementById('cartTotalItemsCount').innerText = `${totalQty} Pcs`;
        document.getElementById('cartGrandTotal').innerText = `Rp ${grandTotal.toLocaleString('id-ID')}`;
      }

      function checkoutCartWhatsApp() {
        if (cart.length === 0) {
          alert('Keranjang belanja Anda masih kosong!');
          return;
        }

        const notes = document.getElementById('cartCustomerNotes').value || '-';
        let itemsList = '';
        let grandTotal = 0;

        cart.forEach((item, index) => {
          const subtotal = item.price * item.qty;
          grandTotal += subtotal;
          itemsList += `${index + 1}. *${item.name}* x ${item.qty} pcs = Rp ${subtotal.toLocaleString('id-ID')}\n`;
        });

        const msg = `Halo Admin {{ $siteSettings['site_name'] ?? 'IKAN ASIN TANJUNG' }},\n\nSaya ingin memesan paket dari Keranjang Belanja:\n\n${itemsList}\n💰 *Total Pembayaran:* Rp ${grandTotal.toLocaleString('id-ID')}\n📝 *Catatan / Tujuan:* ${notes}\n\nMohon informasi estimasi ongkos kirim. Terima kasih!`;

        const waNum = adminWhatsAppNumber.startsWith('0') ? '62' + adminWhatsAppNumber.slice(1) : adminWhatsAppNumber;
        window.open(`https://wa.me/${waNum}?text=${encodeURIComponent(msg)}`, '_blank');
      }

      function openDirectWhatsApp() {
        const defaultMsg = encodeURIComponent("Halo Tim {{ $siteSettings['site_name'] ?? 'IKAN ASIN TANJUNG' }}, saya ingin bertanya mengenai produk dan pemesanan.");
        const waNum = adminWhatsAppNumber.startsWith('0') ? '62' + adminWhatsAppNumber.slice(1) : adminWhatsAppNumber;
        window.open(`https://wa.me/${waNum}?text=${defaultMsg}`, '_blank');
      }
    </script>
</body>
</html>
