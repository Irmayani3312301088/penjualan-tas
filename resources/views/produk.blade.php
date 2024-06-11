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
            <img src="{{ asset('images/18.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Sling Bag-Grey</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 1.150.000</p>
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
            <img src="{{ asset('images/19.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Sling Bag-Grey</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 1.150.000</p>
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
            <img src="{{ asset('images/p1.png') }}" alt="Tas Image">
            <div class="details mt-4">
                <h2 class="text-xl font-bold mb-2"> Tas Ransel</h2>
                <p class="price text-green-600 font-semibold mb-2">Rp 367.000</p>
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
        <!-- Product 6 -->
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
        <!-- Product 7 -->
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

        <!-- Product 8 -->
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

        <!-- Product 9 -->
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

@endsection

