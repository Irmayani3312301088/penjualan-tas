@extends('layout.home')

@section('title', 'Aplikasi Web Penjualan Tas')
@section('content')

<div id="default-carousel" class="relative h-full overflow-hidden rounded-lg mt-20" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/pq.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/pa.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/pm.webp') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/pi.webp') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/pk.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<div class="container mx-auto mt-8 w-3/4">
    <div class="grid grid-cols-3 gap-8">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('images/pb.jpg') }}" alt="" />
            </a>
        </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('images/pv.jpg') }}" alt="" />
            </a>
        </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('images/image3.jpg') }}" alt="" />
            </a>
        </div>
    </div>
</div>

<div class="flex items-center justify-center py-4 mt-8">
    <span class="text-lg font-bold text-pink-800">PILIHAN TERBAIK</span>
</div>

<div class="container mx-auto py-8 w-3/4">
    <div class="grid grid-cols-3 gap-8">
        <!-- Product 1 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/p1.png') }}" alt="Tas Image">
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
        <!-- Product 2 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/p2.png') }}" alt="Tas Image">
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
        <!-- Product 3 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/p3.png') }}" alt="Tas Image">
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

<div class="offer bg-pink-100 py-12">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 w-full mb-8 lg:mb-0 flex justify-center">
                <img src="{{ asset('images/image2.png') }}" alt="Tas Image" class="w-3/4 max-w-xs ">
            </div>
            <div class="lg:w-1/2 w-full lg:pl-12">
                <p class="text-gray-600 text-sm mb-2">Secara eksklusif tersedia di Moda Bags</p>
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Discount 50%</h1>
                <small class="text-gray-700 leading-relaxed block mb-4">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore fugiat repellendus distinctio nam reiciendis aspernatur corrupti quod vitae nihil asperiores omnis sequi, est minus iusto pariatur, quaerat, illum incidunt deleniti!
                </small>
                <a href="#" class="inline-block bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded-md transition duration-300">Beli Sekarang &#8594;</a>
            </div>
        </div>
    </div>
</div>




<script src="https://unpkg.com/flowbite@^2/dist/flowbite.min.js"></script>

@endsection
