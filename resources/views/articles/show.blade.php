@extends('layouts.app')

@section('title', $article->title . ' | Berita Desa Kumpeh')

@section('content')
<div class="py-16 bg-peat-pattern min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
        
        <div class="bg-white rounded-3xl p-6 sm:p-10 border border-slate-100 shadow-xl space-y-6">
            <div>
                <span class="text-xs font-bold text-terracotta-600 uppercase tracking-widest block mb-2">
                    Berita & Artikel UMKM Desa Kumpeh
                </span>
                <h1 class="font-serif font-bold text-3xl sm:text-4xl text-gambut-900 leading-tight">
                    {{ $article->title }}
                </h1>
                <div class="mt-4 flex items-center gap-3 text-xs text-slate-400 font-medium">
                    <span class="font-bold text-gambut-800"><i class="fa-solid fa-user mr-1"></i> Penulis: {{ $article->author }}</span>
                    <span>•</span>
                    <span><i class="fa-regular fa-calendar mr-1"></i> {{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('d M Y') : 'Terbaru' }}</span>
                </div>
            </div>

            <div class="rounded-2xl overflow-hidden shadow-md aspect-[16/9] bg-gambut-900 border border-slate-200">
                <img src="{{ $article->featured_image }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
            </div>

            <div class="prose prose-slate max-w-none text-sm sm:text-base leading-relaxed text-slate-700 space-y-4 font-normal">
                {!! nl2br(e($article->content)) !!}
            </div>

            <div class="pt-6 border-t border-slate-100 flex justify-between items-center text-xs">
                <a href="{{ route('articles.index') }}" class="font-bold text-gambut-800 hover:text-terracotta-600 transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span>Kembali ke Berita & Artikel</span>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
