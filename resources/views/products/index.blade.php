@extends('layouts.app')

@section('title', 'Katalog Produk Olahan Ikan Asin Kumpeh Jambi')

@section('content')
<div class="py-16 bg-lightbg min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="text-xs font-bold text-naturegreen-700 uppercase tracking-widest block">Katalog Resmi E-Commerce</span>
            <h1 class="font-extrabold text-3xl sm:text-5xl text-naturegreen-900">
                Inovasi Rasa Olahan Ikan Asin Tanjung
            </h1>
            <p class="text-stone-600 text-sm sm:text-base">
                Diolah secara higienis oleh perajin wanita kelompok usaha TK-PPEG Sumber Rezeki, berizin edar P-IRT resmi, dan dikemas rapat kedap udara.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($products as $product)
            <div class="bg-white rounded-3xl border border-naturegreen-200 shadow-md card-nature-hover flex flex-col justify-between overflow-hidden group">
                <div class="relative overflow-hidden h-76 bg-lightbg flex items-center justify-center p-6 border-b border-naturegreen-100">
                    <div class="absolute top-4 left-4 z-20">
                        <span class="bg-naturegreen-700 text-limeaccent-400 font-bold text-[10px] uppercase tracking-wider px-3 py-1 rounded-full shadow-md">
                            {{ $product->weight ?? '75g' }} · {{ $product->packaging ?? 'Standing Pouch' }}
                        </span>
                    </div>
                    <img src="{{ $product->main_image }}" alt="{{ $product->name }}" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-xl relative z-10">
                </div>

                <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs text-stone-500">
                            <span class="font-mono text-[11px] font-bold text-naturegreen-700">SKU: {{ $product->sku ?? 'KMP-00' }}</span>
                            <span class="text-amber-500 font-bold"><i class="fa-solid fa-star"></i> 4.9 (Seller Terpercaya)</span>
                        </div>
                        <h3 class="font-extrabold text-xl text-naturegreen-900 group-hover:text-naturegreen-700 transition-colors">
                            <a href="{{ route('products.show', $product->slug) }}">
                                {{ $product->name }}
                            </a>
                        </h3>
                        <p class="text-stone-600 text-xs leading-relaxed line-clamp-2">
                            {{ $product->short_description }}
                        </p>
                    </div>

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
</div>
@endsection
