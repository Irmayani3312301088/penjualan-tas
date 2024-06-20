@extends('layout.layoutt')

@section('title', 'Aplikasi Web Penjualan Tas')

@section('content')
<div class="container mx-auto py-8 w-3/4 mt-20">
    <div class="grid grid-cols-3 gap-8">
        @foreach($products as $product)
            <div class="product bg-white p-2 shadow-md rounded-md">
                <img src="{{ asset('images/' . $product['photo']) }}" alt="Tas Image">
                <div class="details mt-4">
                    <h2 class="text-xl font-bold mb-2">{{ $product['product_name'] }}</h2>
                    <p class="price text-green-600 font-semibold mb-2">Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
                    <div class="text-center">
                        <form action="{{ route('add_to_cart', $product['id']) }}" method="POST">
                            @csrf
                            <button type="submit" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2">
                                + Keranjang
                            </button>
                        </form>
                    </div>
                    <div class="text-center">
                        <a href="/detailproduct">
                            <button type="button" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2">
                                Detail Produk
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
