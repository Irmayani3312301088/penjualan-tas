@extends('layout.layout')

@section('title', 'Aplikasi Web Penjualan Tas')

@section('content')

<!-- Carousel -->
<div id="default-carousel" class="relative h-full overflow-hidden rounded-lg mt-20" data-carousel="slide">
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        @foreach(['pq.jpg', 'pa.jpg', 'pm.webp', 'pi.webp', 'pk.jpg'] as $image)
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/' . $image) }}" class="block w-full h-full object-cover" alt="Carousel Image">
        </div>
        @endforeach
    </div>
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        @foreach(range(0, 4) as $index)
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}"></button>
        @endforeach
    </div>
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white">
            <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white">
            <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<!-- Featured Products -->
<div class="container mx-auto mt-8 w-3/4">
    <div class="grid grid-cols-3 gap-8">
        @foreach(['pb.jpg', 'pv.jpg', 'image3.jpg'] as $productImage)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('images/' . $productImage) }}" alt="Featured Product Image">
            </a>
        </div>
        @endforeach
    </div>
</div>

<!-- Best Choice Section -->
<div class="flex items-center justify-center py-4 mt-8">
    <span class="text-lg font-bold text-pink-800">PILIHAN TERBAIK</span>
</div>

 <div class="container mx-auto py-8 w-3/4">
    <div class="grid grid-cols-3 gap-8">
         <!-- Product 1 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/p1.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Louis Vitton</h2>
                <p class="price text-green-600 font-semibold mb-2">stok : 20</p>
                <p class="price text-green-600 font-semibold mb-2">Rp 289.000</p>
                <div class="text-center">
                    <button type="button" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                        + Keranjang </button>
                </div>
                <div class="text-center">
                <a href="/detailproduct"><button type="button" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                   Detail Produk </button></a></div>
            </div>
        </div>
         <!-- Product 2 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/p2.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Louis Vitton</h2>
                <p class="price text-green-600 font-semibold mb-2">stok : 13</p>
                <p class="price text-green-600 font-semibold mb-2">Rp 799.000</p>
                <div class="text-center">
                    <button type="button" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                        + Keranjang </button>
                </div>
                <div class="text-center">
                <a href="/detailproduct"><button type="button" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                   Detail Produk </button></a></div>
            </div>
        </div>
         <!-- Product 3 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/p3.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Louis Vitton</h2>
                <p class="price text-green-600 font-semibold mb-2">stok : 13</p>
                <p class="price text-green-600 font-semibold mb-2">Rp 456.000</p>
                <div class="text-center">
                    <button type="button" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                        + Keranjang </button>
                </div>
                <div class="text-center">
                <a href="/detailproduct"><button type="button" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                   Detail Produk </button></a></div>
            </div>
        </div>
        <!-- Product 4 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/p4.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Tas Sekolah</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 289.000</p>
                <div class="text-center">
                    <button type="button" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                        + Keranjang </button>
                </div>
                <div class="text-center">
                <a href="/detailproduct"><button type="button" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                   Detail Produk </button></a></div>
            </div>
        </div>
         <!-- Product 5 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/p5.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Tas Sekolah</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 289.000</p>
                <div class="text-center">
                    <button type="button" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                        + Keranjang </button>
                </div>
                <div class="text-center">
                <a href="/detailproduct"><button type="button" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                   Detail Produk </button></a></div>
            </div>
        </div>
         <!-- Product 6 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/p6.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Tas Sekolah</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 289.000</p>
                <div class="text-center">
                    <button type="button" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                        + Keranjang </button>
                </div>
                <div class="text-center">
                <a href="/detailproduct"><button type="button" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                   Detail Produk </button></a></div>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Offer Section -->
<div class="offer bg-pink-100 py-12">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 w-full mb-8 lg:mb-0 flex justify-center">
                <img src="{{ asset('images/image1.png') }}" alt="Tas Image" class="w-3/4 max-w-xs">
            </div>
            <div class="lg:w-1/2 w-full lg:pl-12">
                <p class="text-gray-600 text-sm mb-2">Secara eksklusif tersedia di Moda Bags</p>
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Tas Modis dan Fungsional</h1>
                <p class="text-gray-700 leading-relaxed block mb-4">
                    Tas modis dan fungsional yang sempurna untuk aktivitas sehari-hari. Dengan bahan berkualitas tinggi dan desain yang elegan, tas ini akan menjadi teman setia Anda dalam berbagai kesempatan.
                </p>
                <a href="{{ route('produk') }}" class="text-white bg-pink-600 hover:bg-pink-700 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Belanja Sekarang</a>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/flowbite@^2/dist/flowbite.min.js"></script>

@endsection
