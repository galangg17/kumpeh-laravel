@extends('layouts.app')

@section('title', ($siteSettings['site_name'] ?? 'IKAN ASIN TANJUNG') . ' - Official Store Olahan Ikan Asin Kumpeh')

@section('content')

<!-- ==================== 1. HERO SECTION WITH OVERLAPPING FEATURE CARDS (Presisi Referensi) ==================== -->
<section class="relative bg-gradient-to-b from-naturegreen-800 via-naturegreen-700 to-naturegreen-900 text-white pt-16 pb-28 lg:pt-24 lg:pb-36 overflow-hidden">
    
    <!-- Ambient Glow & Background Image Overlay -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=1920')] bg-cover bg-center opacity-15 mix-blend-overlay"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        
        <!-- Top Pill Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 text-limeaccent-400 font-bold text-xs uppercase tracking-wider backdrop-blur-md mb-6 border border-white/15">
            <i class="fa-solid fa-leaf"></i>
            <span>{{ $siteSettings['hero_badge'] ?? '100% Olahan Ikan Rawa Gambut Jambi | Legalitas P-IRT & NIB' }}</span>
        </div>

        <!-- Main Hero Title -->
        <h1 class="font-extrabold text-3xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-[1.12] max-w-4xl mx-auto">
            {{ $siteSettings['hero_title'] ?? 'Inovasi Hilirisasi Olahan Ikan Asin Tanjung Kumpeh' }}
        </h1>

        <!-- Hero Subtitle -->
        <p class="text-stone-200 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto mt-6 font-normal">
            {{ $siteSettings['hero_subtitle'] ?? 'Dipelopori oleh Ibu-Ibu Kelompok Usaha TK-PPEG & Didukung Program IMPLI / IFAD / GEF / DLH Jambi. Rasakan kenikmatan keripik balado, rempeyek, dan kentang mustofa ikan asin krispi berizin edar resmi.' }}
        </p>

        <!-- Main Pill CTA Button (Presisi Referensi MyGarden) -->
        <div class="mt-8 flex justify-center">
            <a href="#produk" class="btn-lime-pill px-8 py-4 text-sm font-extrabold inline-flex items-center gap-3 shadow-xl">
                <span>{{ $siteSettings['hero_cta_primary'] ?? 'Pesan Sekarang' }}</span>
                <i class="fa-solid fa-arrow-right text-base"></i>
            </a>
        </div>

    </div>
</section>

<!-- OVERLAPPING 4 FEATURE CARDS (Presisi Referensi Bottom Hero Overlay) -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 sm:-mt-20 relative z-30 mb-16">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
        
        <!-- Card 1 -->
        <div class="bg-white p-6 rounded-3xl border border-naturegreen-100 shadow-xl space-y-2 card-nature-hover">
            <div class="w-10 h-10 rounded-2xl bg-naturegreen-100 text-naturegreen-700 flex items-center justify-center text-lg font-bold">
                <i class="fa-solid fa-fish"></i>
            </div>
            <h4 class="font-bold text-sm text-naturegreen-900">100% Ikan Rawa Gambut</h4>
            <p class="text-xs text-stone-600 leading-relaxed">Bahan baku ikan asin segar pilihan langsung dari perairan rawa gambut Kumpeh.</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-6 rounded-3xl border border-naturegreen-100 shadow-xl space-y-2 card-nature-hover">
            <div class="w-10 h-10 rounded-2xl bg-naturegreen-100 text-naturegreen-700 flex items-center justify-center text-lg font-bold">
                <i class="fa-solid fa-pump-soap"></i>
            </div>
            <h4 class="font-bold text-sm text-naturegreen-900">SOP Steril CPPOB</h4>
            <p class="text-xs text-stone-600 leading-relaxed">Diproses higienis mengacu pada standar keamanan pangan Dinas Kesehatan & BPOM.</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-6 rounded-3xl border border-naturegreen-100 shadow-xl space-y-2 card-nature-hover">
            <div class="w-10 h-10 rounded-2xl bg-naturegreen-100 text-naturegreen-700 flex items-center justify-center text-lg font-bold">
                <i class="fa-solid fa-pepper-hot"></i>
            </div>
            <h4 class="font-bold text-sm text-naturegreen-900">Bumbu Rempah Alami</h4>
            <p class="text-xs text-stone-600 leading-relaxed">Racikan bumbu rempah murni Dapur Jambi tanpa pengawet atau pewarna sintesis.</p>
        </div>

        <!-- Card 4 (Highlighted Green Card Presisi Referensi) -->
        <div class="bg-naturegreen-700 text-white p-6 rounded-3xl border border-naturegreen-600 shadow-xl space-y-2 card-nature-hover">
            <div class="w-10 h-10 rounded-2xl bg-limeaccent-500 text-darkforest-950 flex items-center justify-center text-lg font-extrabold">
                <i class="fa-solid fa-certificate"></i>
            </div>
            <h4 class="font-bold text-sm text-white">Legalitas NIB & P-IRT</h4>
            <p class="text-xs text-stone-200 leading-relaxed">NIB: {{ $siteSettings['legal_nib'] ?? '1008260074264' }} & 3 Izin Edar P-IRT Resmi BPOM Terbit s.d 2031.</p>
        </div>

    </div>
</div>

<!-- ==================== 2. PARTNER LOGOS & FOUNDER SPOTLIGHT (Presisi Referensi) ==================== -->
<section class="py-12 bg-white border-y border-naturegreen-100 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            <!-- Left: Partner Logos & Intro -->
            <div class="lg:col-span-7 space-y-6">
                <div>
                    <span class="text-xs font-bold text-naturegreen-700 uppercase tracking-widest block mb-1">Kemitraan Strategis</span>
                    <h2 class="font-extrabold text-2xl sm:text-3xl text-naturegreen-900">Konsorsium Pendamping Resmi</h2>
                    <p class="text-xs sm:text-sm text-stone-600 mt-2 leading-relaxed">
                        Program hilirisasi ini terlaksana atas kerjasama terpadu pemerintah, organisasi internasional, dan lembaga pendamping teknis.
                    </p>
                </div>

                <!-- Partner Badges Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                    <div class="p-3 bg-lightbg rounded-2xl border border-naturegreen-200 text-center text-xs font-bold text-naturegreen-900">
                        IMPLI Jambi
                    </div>
                    <div class="p-3 bg-lightbg rounded-2xl border border-naturegreen-200 text-center text-xs font-bold text-naturegreen-900">
                        IFAD Global
                    </div>
                    <div class="p-3 bg-lightbg rounded-2xl border border-naturegreen-200 text-center text-xs font-bold text-naturegreen-900">
                        GEF Facility
                    </div>
                    <div class="p-3 bg-lightbg rounded-2xl border border-naturegreen-200 text-center text-xs font-bold text-naturegreen-900">
                        DLH Prov. Jambi
                    </div>
                    <div class="p-3 bg-lightbg rounded-2xl border border-naturegreen-200 text-center text-xs font-bold text-naturegreen-900">
                        PT Laman Cakap Kolaboratif
                    </div>
                    <div class="p-3 bg-lightbg rounded-2xl border border-naturegreen-200 text-center text-xs font-bold text-naturegreen-900">
                        TK-PPEG Sumber Rezeki
                    </div>
                </div>
            </div>

            <!-- Right: Founder Quote Card (Presisi Referensi Card Hijau dengan Foto Perajin) -->
            <div class="lg:col-span-5">
                <div class="bg-naturegreen-800 text-white p-6 sm:p-8 rounded-3xl shadow-2xl relative overflow-hidden space-y-4 border border-naturegreen-700">
                    <div class="w-10 h-10 rounded-full bg-limeaccent-500 text-darkforest-950 flex items-center justify-center text-xl font-bold">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <p class="text-stone-100 text-xs sm:text-sm leading-relaxed italic">
                        "Melalui program hilirisasi IMPLI, ikan rawa gambut kami memiliki nilai tambah tinggi yang menopang ekonomi keluarga secara berkelanjutan."
                    </p>
                    <div class="pt-4 border-t border-white/20 flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full bg-limeaccent-500 text-darkforest-950 font-bold flex items-center justify-center text-lg">
                            SJ
                        </div>
                        <div>
                            <span class="font-bold text-sm text-white block">Sopiyah J</span>
                            <span class="text-[11px] text-limeaccent-400 block">Ketua Kelompok Usaha TK-PPEG · Kel. Tanjung Kumpeh</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ==================== 3. BENTO STAT BOX & STORY (Presisi Referensi MyGarden) ==================== -->
<section id="cerita" class="py-16 bg-lightbg relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            <!-- Left: 4 Quadrants Stat Box (Presisi Referensi Green Quadrant Box) -->
            <div class="lg:col-span-5">
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-naturegreen-700 text-white p-6 rounded-3xl space-y-1 text-center shadow-lg">
                        <div class="text-3xl font-extrabold text-limeaccent-400">100%</div>
                        <div class="text-xs font-semibold text-stone-100">Bahan Rawa Gambut</div>
                    </div>

                    <div class="bg-limeaccent-500 text-darkforest-950 p-6 rounded-3xl space-y-1 text-center shadow-lg">
                        <div class="text-3xl font-extrabold">3</div>
                        <div class="text-xs font-bold">Izin P-IRT Terbit</div>
                    </div>

                    <div class="bg-white text-naturegreen-900 p-6 rounded-3xl space-y-1 text-center shadow-lg border border-naturegreen-200">
                        <div class="text-3xl font-extrabold text-naturegreen-700">1000+</div>
                        <div class="text-xs font-semibold text-stone-600">Bungkus Terjual</div>
                    </div>

                    <div class="bg-darkforest-900 text-white p-6 rounded-3xl space-y-1 text-center shadow-lg">
                        <div class="text-3xl font-extrabold text-limeaccent-400">4</div>
                        <div class="text-xs font-semibold text-stone-200">Pilar SOP Kebersihan</div>
                    </div>
                </div>
            </div>

            <!-- Right: Detailed Story Content -->
            <div class="lg:col-span-7 space-y-5">
                <span class="text-xs font-bold text-naturegreen-700 uppercase tracking-widest block">Cerita Pemberdayaan Warga</span>
                <h2 class="font-extrabold text-3xl sm:text-4xl text-naturegreen-900 leading-tight">
                    Pengembangan Hilirisasi & Ekonomi Warga Tanjung Kumpeh
                </h2>
                <p class="text-stone-600 text-sm leading-relaxed">
                    Kegiatan pendampingan oleh IMPLI, IFAD, GEF, DLH Jambi, dan PT Laman Cakap Kolaborasi mengubah cara warga mengolah hasil perikanan rawa dari pengolahan tradisional menjadi produk krispi higienis bernilai ekonomi tinggi.
                </p>

                <div class="grid grid-cols-2 gap-4 pt-2">
                    <div class="p-4 bg-white rounded-2xl border border-naturegreen-200 text-xs space-y-1">
                        <span class="font-bold text-naturegreen-900 block">✓ Penirisan Spinner Mekanis</span>
                        <span class="text-stone-500 block">Produk bebas minyak sisa & tahan lama hingga 12 bulan.</span>
                    </div>
                    <div class="p-4 bg-white rounded-2xl border border-naturegreen-200 text-xs space-y-1">
                        <span class="font-bold text-naturegreen-900 block">✓ Kemasan Standing Pouch</span>
                        <span class="text-stone-500 block">Dilengkapi seal kedap udara & stempel kadaluarsa resmi.</span>
                    </div>
                </div>

                <div class="pt-2">
                    <a href="#produk" class="btn-lime-pill px-6 py-3 text-xs inline-flex items-center gap-2 shadow">
                        <span>Lihat Katalog Produk</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ==================== 4. COMPLETE PRODUCT CATALOG GRID (Presisi Referensi MyGarden) ==================== -->
<section id="produk" class="py-20 bg-white border-t border-naturegreen-100 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="text-xs font-bold text-naturegreen-700 uppercase tracking-widest block">Katalog Resmi E-Commerce</span>
            <h2 class="font-extrabold text-3xl sm:text-4xl text-naturegreen-900">
                Katalog Lengkap Olahan Ikan Asin Tanjung Kumpeh
            </h2>
            <p class="text-stone-600 text-sm sm:text-base">
                Pilih olahan krispi favorit Anda. Diolah secara higienis, lulus pengujian mutu P-IRT BPOM, dan dikemas rapat kedap udara.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($products as $product)
            <div class="bg-white rounded-3xl border border-naturegreen-200 shadow-md card-nature-hover flex flex-col justify-between overflow-hidden group">
                
                <!-- Product Header Badge & Photo -->
                <div class="relative bg-lightbg p-6 h-76 flex items-center justify-center border-b border-naturegreen-100 overflow-hidden">
                    <span class="absolute top-4 left-4 z-20 bg-naturegreen-700 text-limeaccent-400 font-bold text-[10px] uppercase tracking-wider px-3 py-1 rounded-full shadow-md">
                        {{ $product->weight ?? '75g' }} · {{ $product->packaging ?? 'Standing Pouch' }}
                    </span>

                    <img src="{{ $product->main_image }}" alt="{{ $product->name }}" class="h-full object-contain drop-shadow-xl group-hover:scale-105 transition-transform duration-500 relative z-10">
                </div>

                <!-- Card Content -->
                <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                    
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs text-stone-500">
                            <span class="font-mono text-[11px] font-bold text-naturegreen-700">SKU: {{ $product->sku ?? 'KMP-00' }}</span>
                            <span class="text-amber-500 font-bold"><i class="fa-solid fa-star"></i> 4.9 (Seller Terpercaya)</span>
                        </div>

                        <h3 class="font-extrabold text-xl text-naturegreen-900 leading-tight group-hover:text-naturegreen-700 transition-colors">
                            <a href="{{ route('products.show', $product->slug) }}">
                                {{ $product->name }}
                            </a>
                        </h3>

                        <p class="text-stone-600 text-xs leading-relaxed line-clamp-2">
                            {{ $product->short_description }}
                        </p>
                    </div>

                    <!-- Price & Action Pill Button (Presisi Referensi) -->
                    <div class="pt-4 border-t border-naturegreen-100 space-y-3">
                        <div class="flex items-baseline justify-between">
                            <span class="text-xs text-stone-500 font-medium">Harga Resmi:</span>
                            <span class="font-extrabold text-2xl text-naturegreen-800">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </span>
                        </div>

                        <div class="grid grid-cols-2 gap-2">
                            <button 
                                onclick="addToCart('{{ addslashes($product->name) }}', '{{ $product->price }}', '{{ $product->main_image }}')"
                                class="w-full bg-naturegreen-700 hover:bg-naturegreen-800 text-white font-bold py-3 px-3 rounded-2xl text-xs flex items-center justify-center gap-1.5 transition-colors shadow"
                            >
                                <i class="fa-solid fa-plus text-limeaccent-400"></i>
                                <span>+ Keranjang</span>
                            </button>

                            <a 
                                href="{{ route('products.show', $product->slug) }}"
                                class="w-full bg-lightbg hover:bg-naturegreen-100 text-naturegreen-900 font-bold py-3 px-3 rounded-2xl text-xs flex items-center justify-center gap-1 transition-colors text-center"
                            >
                                <span>Detail Resep</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- ==================== 5. GENUINE REVIEWS & TESTIMONIALS (Presisi Referensi) ==================== -->
<section class="py-16 bg-lightbg relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
            <span class="text-xs font-bold text-naturegreen-700 uppercase tracking-widest block">Ulasan Pelanggan Terverifikasi</span>
            <h2 class="font-extrabold text-3xl sm:text-4xl text-naturegreen-900">
                Ulasan Asli dari Konsumen
            </h2>
            <p class="text-stone-600 text-sm">
                Kepercayaan pembeli dari seluruh Jambi dan luar kota terhadap rasa, kerenyahan, dan kebersihan produk kami.
            </p>
        </div>

        <!-- Stats Summary Header (Presisi Referensi) -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-10 max-w-4xl mx-auto text-center">
            <div class="p-4 bg-white rounded-2xl border border-naturegreen-200 shadow-sm">
                <span class="font-extrabold text-xl text-naturegreen-700 block">4.9 / 5.0</span>
                <span class="text-[11px] text-stone-500">Rata-Rata Rating</span>
            </div>
            <div class="p-4 bg-white rounded-2xl border border-naturegreen-200 shadow-sm">
                <span class="font-extrabold text-xl text-naturegreen-700 block">98%</span>
                <span class="text-[11px] text-stone-500">Kepuasan Konsumen</span>
            </div>
            <div class="p-4 bg-white rounded-2xl border border-naturegreen-200 shadow-sm">
                <span class="font-extrabold text-xl text-naturegreen-700 block">100%</span>
                <span class="text-[11px] text-stone-500">Bahan Alami Steril</span>
            </div>
            <div class="p-4 bg-white rounded-2xl border border-naturegreen-200 shadow-sm">
                <span class="font-extrabold text-xl text-naturegreen-700 block">3 P-IRT</span>
                <span class="text-[11px] text-stone-500">Izin Edar BPOM</span>
            </div>
        </div>

        <!-- Testimonial Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-3xl border border-naturegreen-200 shadow-sm space-y-4">
                <div class="text-amber-400 text-sm">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p class="text-xs text-stone-600 leading-relaxed italic">
                    "Keripik ikan asin baladonya luar biasa krispi dan tidak amis sama sekali! Bumbu baladonya pas pedas manisnya."
                </p>
                <div class="pt-2 border-t border-stone-100 flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-naturegreen-700 text-white font-bold text-xs flex items-center justify-center">
                        BS
                    </div>
                    <div>
                        <span class="font-bold text-xs text-naturegreen-900 block">Budi Santoso</span>
                        <span class="text-[10px] text-stone-400 block">Pembeli Terverifikasi (Kota Jambi)</span>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-naturegreen-200 shadow-sm space-y-4">
                <div class="text-amber-400 text-sm">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p class="text-xs text-stone-600 leading-relaxed italic">
                    "Rempeyek ikan asinnya wangi banget aroma daun jeruk. Cocok buat camilan santai keluarga."
                </p>
                <div class="pt-2 border-t border-stone-100 flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-naturegreen-700 text-white font-bold text-xs flex items-center justify-center">
                        RN
                    </div>
                    <div>
                        <span class="font-bold text-xs text-naturegreen-900 block">Rina Novita</span>
                        <span class="text-[10px] text-stone-400 block">Pembeli Terverifikasi (Muaro Jambi)</span>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-naturegreen-200 shadow-sm space-y-4">
                <div class="text-amber-400 text-sm">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p class="text-xs text-stone-600 leading-relaxed italic">
                    "Kentang mustofanya jadi lauk praktis keluarga. Serpihan ikan asinnya gurih nagih!"
                </p>
                <div class="pt-2 border-t border-stone-100 flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-naturegreen-700 text-white font-bold text-xs flex items-center justify-center">
                        AH
                    </div>
                    <div>
                        <span class="font-bold text-xs text-naturegreen-900 block">Agus Hermawan</span>
                        <span class="text-[10px] text-stone-400 block">Pembeli Terverifikasi (Jakarta)</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ==================== 6. SOP KEBERSIHAN 4 PILAR ==================== -->
<section id="sop" class="py-16 bg-white border-t border-naturegreen-100 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="text-xs font-bold text-naturegreen-700 uppercase tracking-widest block">SOP Pengendalian Mutu</span>
            <h2 class="font-extrabold text-3xl sm:text-4xl text-naturegreen-900">
                4 Pilar Higienitas & Kebersihan Pabrik
            </h2>
            <p class="text-stone-600 text-sm sm:text-base">
                Seluruh tahapan produksi di Kelurahan Tanjung Kumpeh mengacu pada standar keamanan pangan BPOM.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-lightbg p-6 rounded-3xl border border-naturegreen-200 shadow-sm space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-naturegreen-100 text-naturegreen-800 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-user-nurse"></i>
                </div>
                <h3 class="font-extrabold text-base text-naturegreen-900">
                    1. {{ $siteSettings['sop_1_title'] ?? 'APD & Higienitas Area' }}
                </h3>
                <p class="text-stone-600 text-xs leading-relaxed">
                    {{ $siteSettings['sop_1_desc'] ?? 'Setiap perajin wajib mengenakan celemek, penutup kepala, masker, dan menjaga kebersihan ruangan produksi.' }}
                </p>
            </div>

            <div class="bg-lightbg p-6 rounded-3xl border border-naturegreen-200 shadow-sm space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-temperature-arrow-up"></i>
                </div>
                <h3 class="font-extrabold text-base text-naturegreen-900">
                    2. {{ $siteSettings['sop_2_title'] ?? 'Kontrol Suhu Minyak' }}
                </h3>
                <p class="text-stone-600 text-xs leading-relaxed">
                    {{ $siteSettings['sop_2_desc'] ?? 'Penggorengan pada suhu stabil 160–170°C untuk menghasilkan kerenyahan merata tanpa merusak kualitas bahan.' }}
                </p>
            </div>

            <div class="bg-lightbg p-6 rounded-3xl border border-naturegreen-200 shadow-sm space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-800 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-fan"></i>
                </div>
                <h3 class="font-extrabold text-base text-naturegreen-900">
                    3. {{ $siteSettings['sop_3_title'] ?? 'De-oiling Spinner' }}
                </h3>
                <p class="text-stone-600 text-xs leading-relaxed">
                    {{ $siteSettings['sop_3_desc'] ?? 'Penggunaan peniris minyak mekanis (spinner) untuk memastikan produk bebas kadar minyak lebih & tahan lama.' }}
                </p>
            </div>

            <div class="bg-lightbg p-6 rounded-3xl border border-naturegreen-200 shadow-sm space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-limeaccent-100 text-darkforest-950 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-box-check"></i>
                </div>
                <h3 class="font-extrabold text-base text-naturegreen-900">
                    4. {{ $siteSettings['sop_4_title'] ?? 'Seal Kedap Udara & FIFO' }}
                </h3>
                <p class="text-stone-600 text-xs leading-relaxed">
                    {{ $siteSettings['sop_4_desc'] ?? 'Standing pouch di-seal rapat kedap udara dengan hand sealer, stempel tanggal EXP Date, dan metode FIFO.' }}
                </p>
            </div>
        </div>

    </div>
</section>

<!-- ==================== 7. LOCATION MAP & CONTACT SECTION (Presisi Referensi) ==================== -->
<section class="py-16 bg-lightbg border-t border-naturegreen-100 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <div class="lg:col-span-5 bg-white p-8 rounded-3xl border border-naturegreen-200 shadow-lg space-y-4">
                <span class="text-xs font-bold text-naturegreen-700 uppercase tracking-widest block">Lokasi & Kontak Produksi</span>
                <h3 class="font-extrabold text-2xl text-naturegreen-900">Sekretariat TK-PPEG Sumber Rezeki</h3>
                <p class="text-xs text-stone-600 leading-relaxed">
                    {{ $siteSettings['contact_address'] ?? 'Jalan Suak Kandis, Kelurahan Tanjung (RT 012/RW 000), Kecamatan Kumpeh Ilir, Kabupaten Muaro Jambi, Provinsi Jambi 36371' }}
                </p>
                <div class="pt-2 space-y-2 text-xs font-semibold text-naturegreen-900">
                    <div><i class="fa-brands fa-whatsapp text-naturegreen-700 mr-2"></i> WhatsApp: {{ $siteSettings['contact_whatsapp'] ?? '089529628963' }}</div>
                    <div><i class="fa-solid fa-envelope text-naturegreen-700 mr-2"></i> Email: {{ $siteSettings['contact_email'] ?? 'admin@desa-kumpeh.id' }}</div>
                </div>
            </div>

            <!-- Map Placeholder / Illustration Frame (Presisi Referensi Grid Map) -->
            <div class="lg:col-span-7 bg-naturegreen-800 rounded-3xl p-6 text-white shadow-xl flex flex-col justify-between h-72 relative overflow-hidden border border-naturegreen-700">
                <div class="relative z-10 space-y-2">
                    <span class="bg-limeaccent-500 text-darkforest-950 font-bold text-[10px] px-3 py-1 rounded-full uppercase">PETA LOKASI DESA TANJUNG</span>
                    <h4 class="font-extrabold text-xl text-white">Kecamatan Kumpeh Ilir, Kabupaten Muaro Jambi</h4>
                    <p class="text-xs text-stone-200 max-w-md">Wilayah Rawa Gambut Ekosistem IMPLI Jambi</p>
                </div>
                <div class="pt-4 border-t border-white/20 relative z-10 flex items-center justify-between">
                    <span class="text-xs font-bold text-limeaccent-400">500+ Paket Terkirim ke Seluruh Indonesia</span>
                    <a href="https://maps.google.com/?q=Kumpeh+Ilir+Muaro+Jambi" target="_blank" class="btn-lime-pill px-4 py-2 text-xs">
                        Buka Google Maps →
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ==================== 8. STAY UPDATED BANNER & KABAR UMKM ==================== -->
<section id="berita" class="py-20 bg-darkforest-900 text-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
        
        <span class="text-xs font-bold text-limeaccent-400 uppercase tracking-widest block">Laporan & Berita Hilirisasi IMPLI</span>
        <h2 class="font-extrabold text-3xl sm:text-4xl text-white">
            Kabar Berita & Hilirisasi Desa Tanjung
        </h2>
        <p class="text-stone-300 text-sm max-w-2xl mx-auto">
            Dapatkan informasi perkembangan usaha kelompok warga, berita program IMPLI, dan inovasi varian produk terbaru.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left pt-6">
            @foreach($articles as $article)
            <div class="bg-darkforest-800 rounded-3xl border border-darkforest-700 overflow-hidden flex flex-col justify-between shadow-lg">
                <div class="h-48 overflow-hidden bg-darkforest-950">
                    <img src="{{ $article->featured_image }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
                </div>
                <div class="p-6 space-y-3 flex-1 flex flex-col justify-between">
                    <div class="space-y-2">
                        <span class="text-[10px] font-mono text-limeaccent-400 block uppercase">
                            {{ $article->created_at ? $article->created_at->format('d M Y') : 'Sep 2026' }} · {{ $article->author }}
                        </span>
                        <h3 class="font-bold text-base text-white line-clamp-2">
                            <a href="{{ route('articles.show', $article->slug) }}" class="hover:text-limeaccent-400 transition-colors">
                                {{ $article->title }}
                            </a>
                        </h3>
                        <p class="text-stone-300 text-xs line-clamp-3">
                            {{ $article->excerpt }}
                        </p>
                    </div>
                    <div class="pt-2">
                        <a href="{{ route('articles.show', $article->slug) }}" class="text-xs font-bold text-limeaccent-400 hover:underline">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection
