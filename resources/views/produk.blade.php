@extends('layout.produk')

@section('title', 'Aplikasi Web Penjualan Tas')
@section('content')

<div class="container mx-auto py-8 w-3/4 mt-20">
    <div class="grid grid-cols-3 gap-8">
        <!-- Product 1 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/17.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Sling Bag-Grey</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 1.150.000</p>
                <div class="text-center">
                    <button type="button" class="text-pink-700 hover:text-white border border-pink-700 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-500 dark:text-pink-500 dark:hover:text-white dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                        + Keranjang </button>
                </div>
                <div class="text-center">
                <a href="/detailproduct"><button type="button" class="text-white bg-pink-700 hover:bg-pink-400 border border-pink-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-500 dark:text-pink-500 dark:hover:text-white dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                   Detail Produk </button></a></div>
            </div>
        </div>
        <!-- Product 2 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/18.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Sling Bag-Grey</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 1.150.000</p>
                <div class="text-center">
                    <button type="button" class="text-pink-700 hover:text-white border border-pink-700 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-500 dark:text-pink-500 dark:hover:text-white dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                        + Keranjang </button>
                </div>
                <div class="text-center">
                <a href="/detailproduct"><button type="button" class="text-white bg-pink-700 hover:bg-pink-400 border border-pink-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-500 dark:text-pink-500 dark:hover:text-white dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                   Detail Produk </button></a></div>
            </div>
        </div>
        <!-- Product 3 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/19.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Sling Bag-Grey</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 1.150.000</p>
                <div class="text-center">
                    <button type="button" class="text-pink-700 hover:text-white border border-pink-700 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-500 dark:text-pink-500 dark:hover:text-white dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                        + Keranjang </button>
                </div>
                <div class="text-center">
                <a href="/detailproduct"><button type="button" class="text-white bg-pink-700 hover:bg-pink-400 border border-pink-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-500 dark:text-pink-500 dark:hover:text-white dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                   Detail Produk </button></a></div>
            </div>
        </div>
        <!-- Product 4 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/p1.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Tas Ransel</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 367.000</p>
                <div class="text-center">
                    <button type="button" class="text-pink-700 hover:text-white border border-pink-700 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-500 dark:text-pink-500 dark:hover:text-white dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                        + Keranjang </button>
                </div>
                <div class="text-center">
                <a href="/detailproduct"><button type="button" class="text-white bg-pink-700 hover:bg-pink-400 border border-pink-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-500 dark:text-pink-500 dark:hover:text-white dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                   Detail Produk </button></a></div>
            </div>
        </div>
        <!-- Product 5 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/p2.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Tas Sekolah</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 289.000</p>
                <div class="text-center">
                    <button type="button" class="text-pink-700 hover:text-white border border-pink-700 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-500 dark:text-pink-500 dark:hover:text-white dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                        + Keranjang </button>
                </div>
                <div class="text-center">
                <a href="/detailproduct"><button type="button" class="text-white bg-pink-700 hover:bg-pink-400 border border-pink-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-500 dark:text-pink-500 dark:hover:text-white dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                   Detail Produk </button></a></div>
            </div>
        </div>
        <!-- Product 6 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/p3.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Tas Sekolah</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 289.000</p>
                <div class="text-center">
                    <button type="button" class="text-pink-700 hover:text-white border border-pink-700 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-500 dark:text-pink-500 dark:hover:text-white dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                        + Keranjang </button>
                </div>
                <div class="text-center">
                <a href="/detailproduct"><button type="button" class="text-white bg-pink-700 hover:bg-pink-400 border border-pink-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-500 dark:text-pink-500 dark:hover:text-white dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                   Detail Produk </button></a></div>
            </div>
        </div>
        <!-- Product 7 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/p4.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Tas Sekolah</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 289.000</p>
                <div class="text-center">
                    <button type="button" class="text-pink-700 hover:text-white border border-pink-700 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-500 dark:text-pink-500 dark:hover:text-white dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                        + Keranjang </button>
                </div>
                <div class="text-center">
                <a href="/detailproduct"><button type="button" class="text-white bg-pink-700 hover:bg-pink-400 border border-pink-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-500 dark:text-pink-500 dark:hover:text-white dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                   Detail Produk </button></a></div>
            </div>
        </div>

        <!-- Product 8 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/p5.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Tas Sekolah</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 289.000</p>
                <div class="text-center">
                    <button type="button" class="text-pink-700 hover:text-white border border-pink-700 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-500 dark:text-pink-500 dark:hover:text-white dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                        + Keranjang </button>
                </div>
                <div class="text-center">
                <a href="/detailproduct"><button type="button" class="text-white bg-pink-700 hover:bg-pink-400 border border-pink-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-500 dark:text-pink-500 dark:hover:text-white dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                   Detail Produk </button></a></div>
            </div>
        </div>

        <!-- Product 9 -->
        <div class="product bg-white p-2 shadow-md rounded-md">
            <img src="{{ asset('images/p6.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Tas Sekolah</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 289.000</p>
                <div class="text-center">
                    <button type="button" class="text-pink-700 hover:text-white border border-pink-700 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-500 dark:text-pink-500 dark:hover:text-white dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                        + Keranjang </button>
                </div>
                <div class="text-center">
                <a href="/detailproduct"><button type="button" class="text-white bg-pink-700 hover:bg-pink-400 border border-pink-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-500 dark:text-pink-500 dark:hover:text-white dark:hover:bg-pink-500 dark:focus:ring-pink-800">
                   Detail Produk </button></a></div>
            </div>
        </div>

    </div>

</div>
</div>

@endsection

