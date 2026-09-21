<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk Baru | Admin CMS Kumpeh</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-stone-100 text-stone-900 min-h-screen flex font-sans">

    <!-- Sidebar -->
    <aside class="w-64 bg-[#1E3822] text-stone-200 flex flex-col justify-between shrink-0">
        <div class="p-6 space-y-6">
            <div class="flex items-center space-x-3">
                <div class="w-9 h-9 rounded-xl bg-[#C85A32] text-white flex items-center justify-center font-bold text-base shadow">
                    GK
                </div>
                <div>
                    <h2 class="font-bold text-sm text-white leading-tight">Admin CMS Kumpeh</h2>
                    <span class="text-[10px] text-amber-300">Laravel 12 Engine</span>
                </div>
            </div>

            <nav class="space-y-1 pt-4 text-xs font-bold">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 px-3.5 py-3 rounded-xl hover:bg-[#2E4F32] text-stone-300 hover:text-white transition-colors">
                    <i data-lucide="layout-dashboard" class="w-4 h-4 text-amber-400"></i>
                    <span>Dashboard Utama</span>
                </a>
                <a href="{{ route('admin.products.index') }}" class="flex items-center space-x-3 px-3.5 py-3 rounded-xl bg-[#2E4F32] text-white">
                    <i data-lucide="shopping-bag" class="w-4 h-4 text-emerald-400"></i>
                    <span>Kelola Produk Olahan</span>
                </a>
            </nav>
        </div>
    </aside>

    <!-- Main Content Form -->
    <main class="flex-grow p-8 space-y-6 overflow-y-auto">
        
        <div class="flex items-center justify-between pb-4 border-b border-stone-200">
            <div>
                <h1 class="font-bold text-2xl text-stone-900">Tambah Produk Olahan Baru</h1>
                <p class="text-xs text-stone-500 mt-1">Isi formulir lengkap & upload gambar untuk menambahkan produk ke katalog</p>
            </div>
            <a href="{{ route('admin.products.index') }}" class="text-xs font-bold text-stone-600 hover:text-stone-900">
                &larr; Kembali ke Daftar Produk
            </a>
        </div>

        @if($errors->any())
        <div class="bg-red-500/10 border border-red-500/30 p-4 rounded-xl text-xs text-red-800 font-bold space-y-1">
            @foreach($errors->all() as $err)
            <div>- {{ $err }}</div>
            @endforeach
        </div>
        @endif

        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-2xl border border-stone-200 p-6 shadow-sm space-y-6 max-w-3xl">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-stone-700 mb-1">Nama Produk</label>
                    <input type="text" name="name" value="{{ old('name') }}" required placeholder="Contoh: Keripik Ikan Asin Balado" class="w-full border border-stone-300 rounded-xl px-4 py-2.5 text-xs font-bold focus:outline-none focus:border-[#2E4F32]">
                </div>

                <div>
                    <label class="block text-xs font-bold text-stone-700 mb-1">Harga (Rp)</label>
                    <input type="number" name="price" value="{{ old('price', 25000) }}" required class="w-full border border-stone-300 rounded-xl px-4 py-2.5 text-xs font-bold focus:outline-none focus:border-[#2E4F32]">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-xs font-bold text-stone-700 mb-1">Berat</label>
                    <input type="text" name="weight" value="{{ old('weight', '150g') }}" class="w-full border border-stone-300 rounded-xl px-4 py-2.5 text-xs focus:outline-none focus:border-[#2E4F32]">
                </div>

                <div>
                    <label class="block text-xs font-bold text-stone-700 mb-1">Kemasan</label>
                    <input type="text" name="packaging" value="{{ old('packaging', 'Standing Pouch Ziplock') }}" class="w-full border border-stone-300 rounded-xl px-4 py-2.5 text-xs focus:outline-none focus:border-[#2E4F32]">
                </div>

                <div>
                    <label class="block text-xs font-bold text-stone-700 mb-1">Stok (Pcs)</label>
                    <input type="number" name="stock" value="{{ old('stock', 50) }}" required class="w-full border border-stone-300 rounded-xl px-4 py-2.5 text-xs font-bold focus:outline-none focus:border-[#2E4F32]">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-stone-700 mb-1">Ringkasan Singkat (Short Description)</label>
                <input type="text" name="short_description" value="{{ old('short_description') }}" required placeholder="Penjelasan 1 kalimat singkat..." class="w-full border border-stone-300 rounded-xl px-4 py-2.5 text-xs focus:outline-none focus:border-[#2E4F32]">
            </div>

            <div>
                <label class="block text-xs font-bold text-stone-700 mb-1">Deskripsi Lengkap</label>
                <textarea name="description" rows="4" required class="w-full border border-stone-300 rounded-xl px-4 py-2.5 text-xs focus:outline-none focus:border-[#2E4F32]">{{ old('description') }}</textarea>
            </div>

            <!-- Upload File or URL Section -->
            <div class="bg-stone-50 p-4 rounded-xl border border-stone-200 space-y-3">
                <label class="block text-xs font-bold text-stone-800">Pilihan Gambar Produk:</label>
                
                <div>
                    <label class="block text-[11px] font-bold text-emerald-800 mb-1">Opsi A: Upload File Gambar dari Perangkat (JPG, PNG, WEBP)</label>
                    <input type="file" name="main_image_file" accept="image/*" class="w-full text-xs text-stone-600 bg-white p-2 rounded-lg border border-stone-300">
                </div>

                <div class="text-center text-[10px] font-bold text-stone-400">--- ATAU ---</div>

                <div>
                    <label class="block text-[11px] font-bold text-stone-600 mb-1">Opsi B: Atau Masukkan URL Gambar (Direct Link)</label>
                    <input type="url" name="main_image" value="{{ old('main_image') }}" placeholder="https://..." class="w-full border border-stone-300 rounded-xl px-4 py-2 text-xs focus:outline-none focus:border-[#2E4F32]">
                </div>
            </div>

            <div class="flex items-center space-x-2 pt-2">
                <input type="checkbox" name="is_featured" value="1" id="is_featured" checked class="rounded text-[#C85A32]">
                <label for="is_featured" class="text-xs font-bold text-stone-800">Tampilkan di Produk Unggulan Beranda</label>
            </div>

            <div class="pt-4 border-t border-stone-200 flex justify-end space-x-3">
                <a href="{{ route('admin.products.index') }}" class="px-5 py-2.5 rounded-xl border border-stone-300 text-xs font-bold text-stone-700 hover:bg-stone-50">
                    Batal
                </a>
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-[#C85A32] hover:bg-[#A44322] text-white text-xs font-bold shadow">
                    Simpan Produk Baru
                </button>
            </div>

        </form>

    </main>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
