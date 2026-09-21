@extends('layouts.app')

@section('title', 'Berita & Artikel UMKM Desa Kumpeh | Kabar dari Kumpeh')

@section('content')
<div class="py-16 bg-peat-pattern min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <div class="inline-flex items-center gap-2 bg-gambut-100 text-gambut-800 px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider border border-gambut-200">
                <i class="fa-solid fa-newspaper"></i>
                <span>Jurnal & Dokumentasi Usaha</span>
            </div>
            <h1 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-gambut-900 font-bold">
                Kabar dari Kumpeh: Langkah Kecil Dampak Besar
            </h1>
            <p class="text-slate-600 text-base">
                Artikel, dokumentasi pelatihan, dan publikasi hilirisasi potensi rawa gambut Desa Kumpeh.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($articles as $article)
            <article class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all border border-slate-100 flex flex-col group">
                <div class="h-48 overflow-hidden relative bg-gambut-900">
                    <img src="{{ $article->featured_image }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <span class="absolute bottom-3 left-3 bg-gambut-800/90 text-white text-[10px] font-bold px-2.5 py-1 rounded-md">
                        Berita UMKM
                    </span>
                </div>
                <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                    <div class="space-y-2">
                        <div class="text-xs text-slate-400 flex items-center gap-2">
                            <i class="fa-regular fa-calendar"></i>
                            <span>{{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('d M Y') : 'Terbaru' }}</span>
                            <span>•</span>
                            <span>{{ $article->author ?? 'Tim Kumpeh' }}</span>
                        </div>
                        <h3 class="font-serif text-lg font-bold text-gambut-900 group-hover:text-terracotta-600 transition-colors line-clamp-2">
                            {{ $article->title }}
                        </h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-3">
                            {{ $article->excerpt }}
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('articles.show', $article->slug) }}" class="inline-flex items-center gap-2 text-xs font-bold text-terracotta-600 hover:text-terracotta-700 pt-2">
                            <span>Baca Selengkapnya</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

    </div>
</div>
@endsection
