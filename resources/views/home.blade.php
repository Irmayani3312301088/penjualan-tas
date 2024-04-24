@extends('layout.home')

@section('title', 'Aplikasi Web Penjualan Tas')
@section('content')

<div id="default-carousel" class="relative h-full overflow-hidden rounded-lg" data-carousel="slide">
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

<div class="container mx-auto mt-8">
    <div class="grid grid-cols-3 gap-8">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('images/image1.png') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-pink-700 rounded-lg hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('images/image2.png') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-pink-700 rounded-lg hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('images/image3.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-pink-700 rounded-lg hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="flex items-center justify-center py-4 mt-8">
    <span class="text-lg font-bold text-pink-800">PILIHAN TERBAIK</span>
</div>

<div class="container mx-auto py-8">
    <div class="grid grid-cols-3 gap-8">
        <!-- Product 1 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/10.webp') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Sling Bag-Grey</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 1.150.000</p>
                <p class="description text-gray-700 mb-2">Deskripsi Produk 2</p>
                <p class="color text-gray-700 mb-2">Warna: hitam</p>
                <label for="quantity2" class="text-gray-700">Jumlah:</label>
                <input type="number" id="quantity2" name="quantity2" min="1" max="10" value="1" class="w-16 border border-gray-300 px-2 py-1 mb-2">
                <p class="stock text-gray-700 mb-2">Stok: 15</p>
                <button class="buy-button bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Beli</button>
            </div>
        </div>
        <!-- Product 2 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/14.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Sling Bag-Grey</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 150.000</p>
                <p class="description text-gray-700 mb-2">Deskripsi Produk 2</p>
                <p class="color text-gray-700 mb-2">Warna: Merah</p>
                <label for="quantity2" class="text-gray-700">Jumlah:</label>
                <input type="number" id="quantity2" name="quantity2" min="1" max="10" value="1" class="w-16 border border-gray-300 px-2 py-1 mb-2">
                <p class="stock text-gray-700 mb-2">Stok: 15</p>
                <button class="buy-button bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Beli</button>
            </div>
        </div>
        <!-- Product 3 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/13.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2">Tote Bag Prejah</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 200.000</p>
                <p class="description text-gray-700 mb-2">Deskripsi Produk 3</p>
                <p class="color text-gray-700 mb-2">Warna: Hijau</p>
                <label for="quantity3" class="text-gray-700">Jumlah:</label>
                <input type="number" id="quantity3" name="quantity3" min="1" max="10" value="1" class="w-16 border border-gray-300 px-2 py-1 mb-2">
                <p class="stock text-gray-700 mb-2">Stok: 20</p>
                <button class="buy-button bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Beli</button>
            </div>
        </div>
        <!-- Product 4 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/15.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2">Backpack Tas Ransel</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 400.000</p>
                <p class="description text-gray-700 mb-2">Deskripsi Produk 7</p>
                <p class="color text-gray-700 mb-2">Warna: Ungu</p>
                <label for="quantity7" class="text-gray-700">Jumlah:</label>
                <input type="number" id="quantity7" name="quantity7" min="1" max="10" value="1" class="w-16 border border-gray-300 px-2 py-1 mb-2">
                <p class="stock text-gray-700 mb-2">Stok: 40</p>
                <button class="buy-button bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Beli</button>
            </div>
        </div>
        <!-- Product 5 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/16.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2">Tas Selempang-Black</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 300.000</p>
                <p class="description text-gray-700 mb-2">Deskripsi Produk 5</p>
                <p class="color text-gray-700 mb-2">Warna: Ungu</p>
                <label for="quantity5" class="text-gray-700">Jumlah:</label>
                <input type="number" id="quantity5" name="quantity5" min="1" max="10" value="1" class="w-16 border border-gray-300 px-2 py-1 mb-2">
                <p class="stock text-gray-700 mb-2">Stok: 30</p>
                <button class="buy-button bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Beli</button>
            </div>
        </div>
        <!-- Product 6 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/17.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Small Jelly Bag Black</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 350.000</p>
                <p class="description text-gray-700 mb-2">Deskripsi Produk 6</p>
                <p class="color text-gray-700 mb-2">Warna: Pink</p>
                <label for="quantity6" class="text-gray-700">Jumlah:</label>
                <input type="number" id="quantity6" name="quantity6" min="1" max="10" value="1" class="w-16 border border-gray-300 px-2 py-1 mb-2">
                <p class="stock text-gray-700 mb-2">Stok: 35</p>
                <button class="buy-button bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Beli</button>
            </div>
        </div>
        <!-- Product 7 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/18.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2">Mini Backpack</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 400.000</p>
                <p class="description text-gray-700 mb-2">Deskripsi Produk 7</p>
                <p class="color text-gray-700 mb-2">Warna: Ungu</p>
                <label for="quantity7" class="text-gray-700">Jumlah:</label>
                <input type="number" id="quantity7" name="quantity7" min="1" max="10" value="1" class="w-16 border border-gray-300 px-2 py-1 mb-2">
                <p class="stock text-gray-700 mb-2">Stok: 40</p>
                <button class="buy-button bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Beli</button>
            </div>
        </div>
        <!-- Product 8 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/19.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2">kasual backpack cream</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 300.000</p>
                <p class="description text-gray-700 mb-2">Deskripsi Produk 8</p>
                <p class="color text-gray-700 mb-2">Warna: Ungu</p>
                <label for="quantity8" class="text-gray-700">Jumlah:</label>
                <input type="number" id="quantity8" name="quantity8" min="1" max="10" value="1" class="w-16 border border-gray-300 px-2 py-1 mb-2">
                <p class="stock text-gray-700 mb-2">Stok: 30</p>
                <button class="buy-button bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Beli</button>
            </div>
        </div>
        <!-- Product 9 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/20.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2">Totebag Ransel Abu-abu</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 350.000</p>
                <p class="description text-gray-700 mb-2">Deskripsi Produk 9</p>
                <p class="color text-gray-700 mb-2">Warna: Pink</p>
                <label for="quantity9" class="text-gray-700">Jumlah:</label>
                <input type="number" id="quantity9" name="quantity9" min="1" max="10" value="1" class="w-16 border border-gray-300 px-2 py-1 mb-2">
                <p class="stock text-gray-700 mb-2">Stok: 35</p>
                <button class="buy-button bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Beli</button>
            </div>
        </div>
    </div>
</div>

<div class="relative w-full h-screen bg-pink-100 flex justify-center items-center">
    <div class="relative flex items-center w-full max-w-screen-xl">
        <div class="w-full h-96 bg-cover bg-center">
            <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center">
                <div class="text-white text-center">
                    <h3 class="text-4xl font-bold mb-2">Dapatkan Promo Hebat!</h3>
                    <p class="text-lg mb-4">Diskon hingga 50% untuk semua produk!</p>
                    <a href="#" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-md">Belanja Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://unpkg.com/flowbite@^2/dist/flowbite.min.js"></script>

@endsection
