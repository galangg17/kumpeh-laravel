<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Website CMS | Admin Kumpeh</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-stone-100 text-stone-900 min-h-screen flex font-sans">

    <!-- Sidebar -->
    <aside class="w-64 bg-[#0D2818] text-stone-200 flex flex-col justify-between shrink-0">
        <div class="p-6 space-y-6">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-xl bg-[#C85A32] text-white flex items-center justify-center font-bold text-base shadow">
                    IT
                </div>
                <div>
                    <h2 class="font-bold text-sm text-white leading-tight">Admin CMS Kumpeh</h2>
                    <span class="text-[10px] text-amber-300">Laravel 12 Engine</span>
                </div>
            </div>

            <nav class="space-y-1 pt-4 text-xs font-bold">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 px-3.5 py-3 rounded-xl hover:bg-[#1A3F28] text-stone-300 hover:text-white transition-colors">
                    <i data-lucide="layout-dashboard" class="w-4 h-4 text-amber-400"></i>
                    <span>Dashboard Utama</span>
                </a>
                <a href="{{ route('admin.settings.index') }}" class="flex items-center space-x-3 px-3.5 py-3 rounded-xl bg-[#1A3F28] text-white shadow-sm">
                    <i data-lucide="sliders" class="w-4 h-4 text-amber-300"></i>
                    <span>Pengaturan Website (CMS)</span>
                </a>
                <a href="{{ route('admin.products.index') }}" class="flex items-center space-x-3 px-3.5 py-3 rounded-xl hover:bg-[#1A3F28] text-stone-300 hover:text-white transition-colors">
                    <i data-lucide="shopping-bag" class="w-4 h-4 text-emerald-400"></i>
                    <span>Kelola Produk</span>
                </a>
                <a href="{{ route('admin.articles.index') }}" class="flex items-center space-x-3 px-3.5 py-3 rounded-xl hover:bg-[#1A3F28] text-stone-300 hover:text-white transition-colors">
                    <i data-lucide="newspaper" class="w-4 h-4 text-blue-400"></i>
                    <span>Kelola Artikel Berita</span>
                </a>
                <a href="{{ route('admin.stories.index') }}" class="flex items-center space-x-3 px-3.5 py-3 rounded-xl hover:bg-[#1A3F28] text-stone-300 hover:text-white transition-colors">
                    <i data-lucide="users" class="w-4 h-4 text-pink-400"></i>
                    <span>Kelola Cerita Warga</span>
                </a>
                <a href="{{ route('home') }}" target="_blank" class="flex items-center space-x-3 px-3.5 py-3 rounded-xl hover:bg-[#1A3F28] text-stone-300 hover:text-white transition-colors">
                    <i data-lucide="globe" class="w-4 h-4 text-amber-300"></i>
                    <span>Lihat Website Publik</span>
                </a>
            </nav>
        </div>

        <div class="p-6 border-t border-white/10">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center space-x-2 bg-red-600/20 hover:bg-red-600 text-red-300 hover:text-white py-2.5 rounded-xl text-xs font-bold transition-colors">
                    <i data-lucide="log-out" class="w-4 h-4"></i>
                    <span>Keluar (Logout)</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-grow p-8 space-y-6 overflow-y-auto">
        <div class="flex items-center justify-between pb-4 border-b border-stone-200">
            <div>
                <h1 class="font-bold text-2xl text-stone-900">Pengaturan Tampilan & Konten Website</h1>
                <p class="text-xs text-stone-500 mt-1">Ubah teks Hero, Pengumuman, Kontak WhatsApp, SOP Kebersihan, dan Legalitas secara real-time</p>
            </div>
            <a href="{{ route('home') }}" target="_blank" class="bg-[#0D2818] hover:bg-[#163824] text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow flex items-center space-x-2">
                <i data-lucide="external-link" class="w-4 h-4 text-amber-400"></i>
                <span>Preview Website</span>
            </a>
        </div>

        @if(session('success'))
        <div class="bg-emerald-500/10 border border-emerald-500/30 p-4 rounded-xl text-xs text-emerald-800 font-bold flex items-center space-x-2">
            <i data-lucide="check-circle" class="w-4 h-4 text-emerald-600"></i>
            <span>{{ session('success') }}</span>
        </div>
        @endif

        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Section 1: Top Announcement Bar -->
            <div class="bg-white rounded-2xl border border-stone-200 shadow-sm p-6 space-y-4">
                <div class="flex items-center space-x-2 text-[#C85A32]">
                    <i data-lucide="megaphone" class="w-5 h-5"></i>
                    <h2 class="font-bold text-base text-stone-900">Top Announcement Bar (Banner Atas)</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="md:col-span-2">
                        <label class="block text-xs font-bold text-stone-700 mb-1">Teks Banner Pengumuman</label>
                        <input type="text" name="announcement_text" value="{{ $settings['announcement_text'] ?? '' }}" class="w-full text-xs p-3 border border-stone-300 rounded-xl focus:ring-2 focus:ring-[#C85A32]">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-stone-700 mb-1">Status Banner</label>
                        <select name="announcement_enabled" class="w-full text-xs p-3 border border-stone-300 rounded-xl">
                            <option value="1" {{ ($settings['announcement_enabled'] ?? '1') == '1' ? 'selected' : '' }}>Aktif (Tampilkan)</option>
                            <option value="0" {{ ($settings['announcement_enabled'] ?? '1') == '0' ? 'selected' : '' }}>Non-Aktif (Sembunyikan)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-stone-700 mb-1">Tautan / Target Link</label>
                        <input type="text" name="announcement_link" value="{{ $settings['announcement_link'] ?? '#produk' }}" class="w-full text-xs p-3 border border-stone-300 rounded-xl">
                    </div>
                </div>
            </div>

            <!-- Section 2: Branding & Hero Banner -->
            <div class="bg-white rounded-2xl border border-stone-200 shadow-sm p-6 space-y-4">
                <div class="flex items-center space-x-2 text-[#0D2818]">
                    <i data-lucide="sparkles" class="w-5 h-5"></i>
                    <h2 class="font-bold text-base text-stone-900">Hero Banner & Branding Utaman</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-stone-700 mb-1">Nama Toko / Website</label>
                        <input type="text" name="site_name" value="{{ $settings['site_name'] ?? 'IKAN ASIN TANJUNG' }}" class="w-full text-xs p-3 border border-stone-300 rounded-xl">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-stone-700 mb-1">Tagline Merek</label>
                        <input type="text" name="site_tagline" value="{{ $settings['site_tagline'] ?? 'Gurih Asli dari Dapur Jambi' }}" class="w-full text-xs p-3 border border-stone-300 rounded-xl">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-xs font-bold text-stone-700 mb-1">Badge Teks Hero (Top Pill)</label>
                        <input type="text" name="hero_badge" value="{{ $settings['hero_badge'] ?? '' }}" class="w-full text-xs p-3 border border-stone-300 rounded-xl">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-xs font-bold text-stone-700 mb-1">Judul Utama Hero (Hero Title)</label>
                        <input type="text" name="hero_title" value="{{ $settings['hero_title'] ?? '' }}" class="w-full text-xs p-3 border border-stone-300 rounded-xl font-bold">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-xs font-bold text-stone-700 mb-1">Subjudul Hero (Description)</label>
                        <textarea name="hero_subtitle" rows="3" class="w-full text-xs p-3 border border-stone-300 rounded-xl">{{ $settings['hero_subtitle'] ?? '' }}</textarea>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-stone-700 mb-1">Teks Tombol Belanja (Primary CTA)</label>
                        <input type="text" name="hero_cta_primary" value="{{ $settings['hero_cta_primary'] ?? 'Belanja Sekarang' }}" class="w-full text-xs p-3 border border-stone-300 rounded-xl">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-stone-700 mb-1">Teks Tombol Secondary (Story CTA)</label>
                        <input type="text" name="hero_cta_secondary" value="{{ $settings['hero_cta_secondary'] ?? 'Lihat Cerita Warga' }}" class="w-full text-xs p-3 border border-stone-300 rounded-xl">
                    </div>
                </div>
            </div>

            <!-- Section 3: Legalitas & Trust Badges -->
            <div class="bg-white rounded-2xl border border-stone-200 shadow-sm p-6 space-y-4">
                <div class="flex items-center space-x-2 text-emerald-700">
                    <i data-lucide="shield-check" class="w-5 h-5"></i>
                    <h2 class="font-bold text-base text-stone-900">Legalitas & Nomor Perizinan Resmi</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-stone-700 mb-1">Nomor Induk Berusaha (NIB)</label>
                        <input type="text" name="legal_nib" value="{{ $settings['legal_nib'] ?? '' }}" class="w-full text-xs p-3 border border-stone-300 rounded-xl">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-stone-700 mb-1">P-IRT Keripik Ikan Asin</label>
                        <input type="text" name="legal_pirt_keripik" value="{{ $settings['legal_pirt_keripik'] ?? '' }}" class="w-full text-xs p-3 border border-stone-300 rounded-xl">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-stone-700 mb-1">P-IRT Rempeyek Ikan Asin</label>
                        <input type="text" name="legal_pirt_rempeyek" value="{{ $settings['legal_pirt_rempeyek'] ?? '' }}" class="w-full text-xs p-3 border border-stone-300 rounded-xl">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-stone-700 mb-1">P-IRT Kentang Mustofa</label>
                        <input type="text" name="legal_pirt_mustofa" value="{{ $settings['legal_pirt_mustofa'] ?? '' }}" class="w-full text-xs p-3 border border-stone-300 rounded-xl">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-stone-700 mb-1">Status Merek HKI Kemenkumham</label>
                        <input type="text" name="legal_hki" value="{{ $settings['legal_hki'] ?? '' }}" class="w-full text-xs p-3 border border-stone-300 rounded-xl">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-stone-700 mb-1">Status Sertifikat Halal BPJPH</label>
                        <input type="text" name="legal_halal" value="{{ $settings['legal_halal'] ?? '' }}" class="w-full text-xs p-3 border border-stone-300 rounded-xl">
                    </div>
                </div>
            </div>

            <!-- Section 4: Kontak & WhatsApp Direct Order -->
            <div class="bg-white rounded-2xl border border-stone-200 shadow-sm p-6 space-y-4">
                <div class="flex items-center space-x-2 text-emerald-600">
                    <i data-lucide="phone-call" class="w-5 h-5"></i>
                    <h2 class="font-bold text-base text-stone-900">Kontak Pembelian & Order WhatsApp</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-stone-700 mb-1">Nomor WhatsApp Admin (e.g. 089529628963)</label>
                        <input type="text" name="contact_whatsapp" value="{{ $settings['contact_whatsapp'] ?? '' }}" class="w-full text-xs p-3 border border-stone-300 rounded-xl">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-stone-700 mb-1">Email Resmi</label>
                        <input type="email" name="contact_email" value="{{ $settings['contact_email'] ?? '' }}" class="w-full text-xs p-3 border border-stone-300 rounded-xl">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-xs font-bold text-stone-700 mb-1">Alamat Produksi Lengkap</label>
                        <textarea name="contact_address" rows="2" class="w-full text-xs p-3 border border-stone-300 rounded-xl">{{ $settings['contact_address'] ?? '' }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Section 5: SOP Kebersihan 4-Pilar -->
            <div class="bg-white rounded-2xl border border-stone-200 shadow-sm p-6 space-y-4">
                <div class="flex items-center space-x-2 text-[#C85A32]">
                    <i data-lucide="award" class="w-5 h-5"></i>
                    <h2 class="font-bold text-base text-stone-900">SOP Kebersihan & Jaminan Mutu (4 Pilar)</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="p-4 bg-stone-50 rounded-xl border border-stone-200 space-y-2">
                        <label class="block text-xs font-bold text-stone-900">Pilar 1 - Judul & Deskripsi</label>
                        <input type="text" name="sop_1_title" value="{{ $settings['sop_1_title'] ?? '' }}" class="w-full text-xs p-2.5 border border-stone-300 rounded-lg">
                        <textarea name="sop_1_desc" rows="2" class="w-full text-xs p-2.5 border border-stone-300 rounded-lg">{{ $settings['sop_1_desc'] ?? '' }}</textarea>
                    </div>
                    <div class="p-4 bg-stone-50 rounded-xl border border-stone-200 space-y-2">
                        <label class="block text-xs font-bold text-stone-900">Pilar 2 - Judul & Deskripsi</label>
                        <input type="text" name="sop_2_title" value="{{ $settings['sop_2_title'] ?? '' }}" class="w-full text-xs p-2.5 border border-stone-300 rounded-lg">
                        <textarea name="sop_2_desc" rows="2" class="w-full text-xs p-2.5 border border-stone-300 rounded-lg">{{ $settings['sop_2_desc'] ?? '' }}</textarea>
                    </div>
                    <div class="p-4 bg-stone-50 rounded-xl border border-stone-200 space-y-2">
                        <label class="block text-xs font-bold text-stone-900">Pilar 3 - Judul & Deskripsi</label>
                        <input type="text" name="sop_3_title" value="{{ $settings['sop_3_title'] ?? '' }}" class="w-full text-xs p-2.5 border border-stone-300 rounded-lg">
                        <textarea name="sop_3_desc" rows="2" class="w-full text-xs p-2.5 border border-stone-300 rounded-lg">{{ $settings['sop_3_desc'] ?? '' }}</textarea>
                    </div>
                    <div class="p-4 bg-stone-50 rounded-xl border border-stone-200 space-y-2">
                        <label class="block text-xs font-bold text-stone-900">Pilar 4 - Judul & Deskripsi</label>
                        <input type="text" name="sop_4_title" value="{{ $settings['sop_4_title'] ?? '' }}" class="w-full text-xs p-2.5 border border-stone-300 rounded-lg">
                        <textarea name="sop_4_desc" rows="2" class="w-full text-xs p-2.5 border border-stone-300 rounded-lg">{{ $settings['sop_4_desc'] ?? '' }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end">
                <button type="submit" class="bg-[#C85A32] hover:bg-[#A44322] text-white text-xs font-bold px-6 py-3.5 rounded-xl shadow-lg flex items-center space-x-2 transition-all transform hover:-translate-y-0.5">
                    <i data-lucide="save" class="w-4 h-4"></i>
                    <span>Simpan Seluruh Pengaturan</span>
                </button>
            </div>

        </form>
    </main>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
