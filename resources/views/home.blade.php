@extends('layout.home')

@section('title', 'Aplikasi Web Penjualan Tas')
@section('content')

<nav class="bg-gray border-gray-200 dark:bg-gray-900 shadow-lg">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/logo (1).png') }}" class="mr-3 h-12 sm:h-" alt=" Logo" />
        </a>
        <div class="hidden w-full md:flex md:w-auto justify-between items-center">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Beranda</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Produk</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Tentang Kami</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Kontak</a>
                </li>

                <li>
                    <a href="#" class="block py-2 px-3 text-black-900 rounded hover:bg-black-100 md:hover:bg-transparent md:border-0 md:hover:text-pink-700 md:p-0 dark:text-white md:dark:hover:text-pink-500 dark:hover:bg-black-700 dark:hover:text-white md:dark:hover:bg-transparent">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
                        </svg>
                    </a>
                </li>
                <li>
                    <button data-collapse-toggle="navbar-default" type="button" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                        </svg>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="controls-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/pq.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="{{ asset('images/pa.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/pk.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/pm.webp') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/pi.webp') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
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

<div class="flex items-center justify-center py-4">
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

<footer class="footer bg-white py-12 px-4 md:px-6 lg:px-8">
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-between items-center">
            <div class="flex items-center mb-6 md:mb-0">
                <img src="{{ asset('images/logo (1).png') }}" class="mr-3 h-12 sm:h-" alt=" Logo" />
                <span class="text-gray-800 font-semibold text-lg">Moda Bags</span>
            </div>

            <div class="flex flex-wrap justify-center md:justify-center items-center mb-6 md:mb-0">
                <div class="mr-8 items-center text-center"> <!-- Modified -->
                    <h6 class="text-gray-800 font-semibold mb-2">Menu</h6>
                    <ul class="list-none">
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Our Company</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Information</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Support</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Contact Us</a></li>
                    </ul>
                </div>

                <div class="mr-8 items-center text-center"> <!-- Modified -->
                    <h6 class="text-gray-800 font-semibold mb-2">Shop</h6>
                    <ul class="list-none">
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Shop</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Cart</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Shipping Policy</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Return Policy</a></li>
                    </ul>
                </div>

                <div class="text-center"> <!-- Modified -->
                    <h6 class="text-gray-800 font-semibold mb-2">Help</h6>
                    <ul class="list-none">
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Online Support</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Lihat Informasi</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Why We?</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Careers</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="w-full text-pink-1000 text-sm bg-pink-200 p-3 shadow-lg flex text-center">
    <p>&copy; 2024. All Rights Reserved. Designed By Moda Bags.</p>
</div>
</footer>


<script src="https://unpkg.com/flowbite@^2/dist/flowbite.min.js"></script>

@endsection
