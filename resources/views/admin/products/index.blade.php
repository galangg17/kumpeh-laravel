<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Produk | Admin CMS Kumpeh</title>
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
                <a href="{{ route('admin.articles.index') }}" class="flex items-center space-x-3 px-3.5 py-3 rounded-xl hover:bg-[#2E4F32] text-stone-300 hover:text-white transition-colors">
                    <i data-lucide="newspaper" class="w-4 h-4 text-blue-400"></i>
                    <span>Kelola Artikel Berita</span>
                </a>
                <a href="{{ route('home') }}" target="_blank" class="flex items-center space-x-3 px-3.5 py-3 rounded-xl hover:bg-[#2E4F32] text-stone-300 hover:text-white transition-colors">
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
                <h1 class="font-bold text-2xl text-stone-900">Kelola Produk Olahan</h1>
                <p class="text-xs text-stone-500 mt-1">Kelola katalog produk olahan ikan asin Desa Kumpeh</p>
            </div>
            <a href="{{ route('admin.products.create') }}" class="bg-[#C85A32] hover:bg-[#A44322] text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow flex items-center space-x-2">
                <i data-lucide="plus" class="w-4 h-4"></i>
                <span>Tambah Produk Baru</span>
            </a>
        </div>

        @if(session('success'))
        <div class="bg-emerald-500/10 border border-emerald-500/30 p-4 rounded-xl text-xs text-emerald-800 font-bold">
            {{ session('success') }}
        </div>
        @endif

        <div class="bg-white rounded-2xl border border-stone-200 shadow-sm overflow-hidden p-6">
            <table class="w-full text-left text-xs">
                <thead class="bg-stone-50 text-stone-600 uppercase font-bold border-b border-stone-200">
                    <tr>
                        <th class="p-3">Gambar</th>
                        <th class="p-3">Nama Produk</th>
                        <th class="p-3">Harga</th>
                        <th class="p-3">Berat / Kemasan</th>
                        <th class="p-3">Stok</th>
                        <th class="p-3 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-100">
                    @foreach($products as $p)
                    <tr>
                        <td class="p-3">
                            <img src="{{ $p->main_image }}" alt="{{ $p->name }}" class="w-12 h-12 rounded-xl object-cover border border-stone-200">
                        </td>
                        <td class="p-3 font-bold text-stone-900">{{ $p->name }}</td>
                        <td class="p-3 font-semibold text-[#2E4F32]">Rp {{ number_format($p->price, 0, ',', '.') }}</td>
                        <td class="p-3 text-stone-500">{{ $p->weight ?? '-' }} ({{ $p->packaging ?? '-' }})</td>
                        <td class="p-3 font-bold">{{ $p->stock }} pcs</td>
                        <td class="p-3 text-right space-x-3">
                            <a href="{{ route('admin.products.edit', $p->id) }}" class="text-blue-600 font-bold hover:underline">Edit</a>
                            <form action="{{ route('admin.products.destroy', $p->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 font-bold hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-4">
                {{ $products->links() }}
            </div>
        </div>

    </main>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
