<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin CMS | UMKM Desa Kumpeh</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-[#1E3822] text-stone-100 min-h-screen flex items-center justify-center p-4 font-sans">

    <div class="max-w-md w-full bg-[#2E4F32] rounded-3xl p-8 shadow-2xl border border-white/10 space-y-6">
        
        <!-- Header -->
        <div class="text-center space-y-2">
            <div class="w-12 h-12 rounded-2xl bg-[#C85A32] text-white mx-auto flex items-center justify-center font-bold text-xl shadow">
                GK
            </div>
            <h1 class="font-bold text-2xl text-white">Admin Portal CMS</h1>
            <p class="text-xs text-stone-300">UMKM Olahan Ikan Asin Desa Kumpeh</p>
        </div>

        @if($errors->any())
        <div class="bg-red-500/20 border border-red-500/50 p-3 rounded-xl text-xs text-red-200">
            {{ $errors->first() }}
        </div>
        @endif

        @if(session('success'))
        <div class="bg-emerald-500/20 border border-emerald-500/50 p-3 rounded-xl text-xs text-emerald-200">
            {{ session('success') }}
        </div>
        @endif

        <!-- Login Form -->
        <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-bold text-stone-300 mb-1">Email Administrator</label>
                <input type="email" name="email" value="{{ old('email', 'admin@desa-kumpeh.id') }}" required class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-xs text-white placeholder-stone-400 focus:outline-none focus:border-amber-400">
            </div>

            <div>
                <label class="block text-xs font-bold text-stone-300 mb-1">Password</label>
                <input type="password" name="password" value="admin123" required class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-xs text-white placeholder-stone-400 focus:outline-none focus:border-amber-400">
            </div>

            <button type="submit" class="w-full bg-[#C85A32] hover:bg-[#A44322] text-white text-xs font-bold py-3.5 rounded-xl shadow-lg transition-colors flex items-center justify-center space-x-2">
                <i data-lucide="log-in" class="w-4 h-4"></i>
                <span>Masuk ke Dashboard CMS</span>
            </button>
        </form>

        <div class="text-center pt-2 border-t border-white/10 text-[11px] text-stone-400">
            <p>Demo Login: <strong class="text-amber-300">admin@desa-kumpeh.id</strong> / <strong class="text-amber-300">admin123</strong></p>
        </div>

    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
