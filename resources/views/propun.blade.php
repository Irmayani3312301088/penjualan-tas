@extends('layout.propun')

@section('title', 'Aplikasi Web Penjualan Tas')
@section('content')

<div class="flex flex-wrap justify-center">
    <div class="w-full max-w-sm bg-cover bg-center bg-gray-100 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-2 my-4">
        <a href="#">
            <img class="p-6 rounded-t-lg" src="{{ asset('images/10.webp') }}" alt="product image" />
        </a>
        <div class="details mt-2 px-4 pb-4">
            <h2 class="text-xl font-bold mb-2">Sling Bag-Black</h2>
            <p class="price text-green-600 font-semibold mb-2">Rp 1.150.000</p>
            <p class="stock text-gray-700 mb-2">Stok: 15</p>
            <div class="flex justify-between mt-2">
                <button class="bg-pink-500 text-white px-4 py-2 rounded-md mt-1">Ubah</button>
                <button class="bg-pink-500 text-white px-4 py-2 rounded-md mt-1">Hapus</button>
            </div>
        </div>
    </div>

    <div class="w-full max-w-sm bg-cover bg-center bg-gray-100 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-2 my-4">
        <a href="#">
            <img class="p-6 rounded-t-lg" src="{{ asset('images/14.png') }}" alt="product image" />
        </a>
        <div class="details mt-2 px-4 pb-4">
            <h2 class="text-xl font-bold mb-2">Sling Bag-Grey</h2>
            <p class="price text-green-600 font-semibold mb-2">Rp 150.000</p>
            <p class="stock text-gray-700 mb-2">Stok: 13</p>
            <div class="flex justify-between mt-2">
                <button class="bg-pink-500 text-white px-4 py-2 rounded-md mt-1">Ubah</button>
                <button class="bg-pink-500 text-white px-4 py-2 rounded-md mt-1">Hapus</button>
            </div>
        </div>
    </div>

    <div class="w-full max-w-sm bg-cover bg-center bg-gray-100 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-2 my-4">
        <a href="#">
            <img class="p-6 rounded-t-lg" src="{{ asset('images/13.png') }}" alt="product image" />
        </a>
        <div class="details mt-2 px-4 pb-4">
            <h2 class="text-xl font-bold mb-2">Tote Bag Prejah</h2>
            <p class="price text-green-600 font-semibold mb-2">Rp 200.000</p>
            <p class="stock text-gray-700 mb-2">Stok: 25</p>
            <div class="flex justify-between mt-2">
                <button class="bg-pink-500 text-white px-4 py-2 rounded-md mt-1">Ubah</button>
                <button class="bg-pink-500 text-white px-4 py-2 rounded-md mt-1">Hapus</button>
            </div>
        </div>
    </div>
</div>

@endsection
