@extends('layouts.app')

@section('title', $product->name . ' - Detail Produk Olahan Ikan Asin Kumpeh')

@section('content')
<div class="py-16 bg-lightbg min-h-screen">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-white rounded-3xl p-6 sm:p-10 border border-naturegreen-200 shadow-xl grid grid-cols-1 md:grid-cols-12 gap-10 items-start">
            
            <!-- Product Image -->
            <div class="md:col-span-6">
                <div class="rounded-2xl overflow-hidden shadow-md border border-naturegreen-100 aspect-square bg-lightbg p-6 flex items-center justify-center relative">
                    <div class="absolute top-4 left-4 z-20 bg-naturegreen-700 text-limeaccent-400 text-xs font-bold px-3.5 py-1.5 rounded-full shadow-md">
                        <i class="fa-solid fa-water mr-1"></i> Rawa Gambut Tanjung Kumpeh
                    </div>
                    <img src="{{ $product->main_image }}" alt="{{ $product->name }}" class="w-full h-full object-contain drop-shadow-xl relative z-10">
                </div>
            </div>

            <!-- Product Details -->
            <div class="md:col-span-6 space-y-6">
                <div>
                    <span class="text-xs font-bold text-naturegreen-700 uppercase tracking-widest block mb-1">
                        Spesifikasi Produk Olahan
                    </span>
                    <h1 class="font-extrabold text-3xl sm:text-4xl text-naturegreen-900 leading-tight">
                        {{ $product->name }}
                    </h1>
                    <div class="mt-4 font-extrabold text-3xl text-naturegreen-700">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </div>
                </div>

                <div class="bg-lightbg border border-naturegreen-200 p-5 rounded-2xl space-y-2.5 text-xs">
                    <div class="flex items-center justify-between border-b border-naturegreen-200 pb-2">
                        <span class="text-stone-500 font-semibold">Berat Bersih:</span>
                        <strong class="text-naturegreen-900 font-bold">{{ $product->weight ?? '75g' }}</strong>
                    </div>
                    <div class="flex items-center justify-between border-b border-naturegreen-200 pb-2">
                        <span class="text-stone-500 font-semibold">Jenis Kemasan:</span>
                        <strong class="text-naturegreen-900 font-bold">{{ $product->packaging ?? 'Standing Pouch Sealed' }}</strong>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-stone-500 font-semibold">Jaminan Mutu:</span>
                        <strong class="text-naturegreen-700 font-bold"><i class="fa-solid fa-circle-check mr-1"></i> SOP Higienis & BPOM P-IRT</strong>
                    </div>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-xs uppercase text-stone-700 tracking-wider">Deskripsi & Formulasi Resep:</h3>
                    <p class="text-xs sm:text-sm text-stone-600 leading-relaxed font-normal">
                        {{ $product->description }}
                    </p>
                </div>

                <div class="pt-4 space-y-3">
                    <button onclick="addToCart('{{ addslashes($product->name) }}', '{{ $product->price }}', '{{ $product->main_image }}')" class="w-full bg-naturegreen-700 hover:bg-naturegreen-800 text-white font-bold text-sm py-4 rounded-2xl shadow-lg transition-all flex items-center justify-center gap-2">
                        <i class="fa-solid fa-basket-shopping text-base text-limeaccent-400"></i>
                        <span>Masukkan ke Keranjang Belanja</span>
                    </button>

                    <a href="{{ route('home') }}#produk" class="block text-center text-xs font-bold text-stone-500 hover:text-naturegreen-900 py-1">
                        ← Kembali ke Katalog Utama
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
