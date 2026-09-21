<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Cerita Warga | Admin CMS Kumpeh</title>
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
                <a href="{{ route('admin.stories.index') }}" class="flex items-center space-x-3 px-3.5 py-3 rounded-xl bg-[#2E4F32] text-white">
                    <i data-lucide="users" class="w-4 h-4 text-amber-400"></i>
                    <span>Kelola Cerita Warga</span>
                </a>
            </nav>
        </div>
    </aside>

    <!-- Main Content Form -->
    <main class="flex-grow p-8 space-y-6 overflow-y-auto">
        
        <div class="flex items-center justify-between pb-4 border-b border-stone-200">
            <div>
                <h1 class="font-bold text-2xl text-stone-900">Edit Cerita Warga</h1>
                <p class="text-xs text-stone-500 mt-1">Perbarui kisah tokoh {{ $story->name }}</p>
            </div>
            <a href="{{ route('admin.stories.index') }}" class="text-xs font-bold text-stone-600 hover:text-stone-900">
                &larr; Kembali ke Daftar Cerita
            </a>
        </div>

        <form action="{{ route('admin.stories.update', $story->id) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-2xl border border-stone-200 p-6 shadow-sm space-y-6 max-w-3xl">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-stone-700 mb-1">Nama Tokoh Warga</label>
                    <input type="text" name="name" value="{{ old('name', $story->name) }}" required class="w-full border border-stone-300 rounded-xl px-4 py-2.5 text-xs font-bold focus:outline-none focus:border-[#2E4F32]">
                </div>

                <div>
                    <label class="block text-xs font-bold text-stone-700 mb-1">Peran / Jabatan</label>
                    <input type="text" name="role" value="{{ old('role', $story->role) }}" required class="w-full border border-stone-300 rounded-xl px-4 py-2.5 text-xs font-bold focus:outline-none focus:border-[#2E4F32]">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-stone-700 mb-1">Kutipan Utama (Quote)</label>
                <input type="text" name="quote" value="{{ old('quote', $story->quote) }}" required class="w-full border border-stone-300 rounded-xl px-4 py-2.5 text-xs font-bold focus:outline-none focus:border-[#2E4F32]">
            </div>

            <div>
                <label class="block text-xs font-bold text-stone-700 mb-1">Kisah Lengkap</label>
                <textarea name="story" rows="5" required class="w-full border border-stone-300 rounded-xl px-4 py-2.5 text-xs focus:outline-none focus:border-[#2E4F32]">{{ old('story', $story->story) }}</textarea>
            </div>

            <!-- Upload File or URL Section -->
            <div class="bg-stone-50 p-4 rounded-xl border border-stone-200 space-y-3">
                <label class="block text-xs font-bold text-stone-800">Foto Saat Ini:</label>
                <img src="{{ $story->photo_url }}" alt="Pratinjau Tokoh" class="w-20 h-20 rounded-xl object-cover border border-stone-300 mb-2">

                <div>
                    <label class="block text-[11px] font-bold text-emerald-800 mb-1">Upload File Foto Baru (JPG, PNG, WEBP)</label>
                    <input type="file" name="photo_file" accept="image/*" class="w-full text-xs text-stone-600 bg-white p-2 rounded-lg border border-stone-300">
                </div>

                <div class="text-center text-[10px] font-bold text-stone-400">--- ATAU ---</div>

                <div>
                    <label class="block text-[11px] font-bold text-stone-600 mb-1">URL Foto (Direct Link)</label>
                    <input type="url" name="photo_url" value="{{ old('photo_url', $story->photo_url) }}" class="w-full border border-stone-300 rounded-xl px-4 py-2 text-xs focus:outline-none focus:border-[#2E4F32]">
                </div>
            </div>

            <div class="pt-4 border-t border-stone-200 flex justify-end space-x-3">
                <a href="{{ route('admin.stories.index') }}" class="px-5 py-2.5 rounded-xl border border-stone-300 text-xs font-bold text-stone-700 hover:bg-stone-50">
                    Batal
                </a>
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-[#C85A32] hover:bg-[#A44322] text-white text-xs font-bold shadow">
                    Perbarui Cerita Warga
                </button>
            </div>

        </form>

    </main>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
