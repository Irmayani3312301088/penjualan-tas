@extends('layout.layout')
@section('title', 'Produk')

@section('content')
<<<<<<< HEAD

<div class="row ">
    @foreach($products as $product)
    <div class="col-xs-18 col-sm-6 col-md-4 " style="margin-top:10px;">
        <div class="images_thumbnail productlist">
            <img src="{{ asset('images') }}/{{ $product->photo }}" class="img-fluid">
            <div class="caption p-4 bg-white shadow-md h-1/2">
                <h4 class="font-bold mb-2 text-2xl">{{ $product->product_name }}</h4>
                <p class="mb-2">{{ $product->product_description }}</p>
                @php
                // Remove dot from price and convert to integer
                $price = (int)str_replace('.', '', $product->price);
                @endphp
                <p class="price text-green-600 font-semibold mb-2">Harga: Rp {{ number_format($price, 0, ',', '.') }}</p>
                <p class="price text-green-600 font-semibold mb-2">Stock: {{ $product->stock }}</p>
                <p class="btn-holder text-center">
                    <a href="{{ route('add_to_cart', $product->id) }}" class="text-white bg-gradient-to-r from-pink-400
                    via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" role="button" @if($product->stock < 1) disabled @endif>
                            + Keranjang
                    </a>
                </p>

=======
<div class="container mx-auto py-8 w-3/4 mt-20">
    <div class="grid grid-cols-3 gap-8">
        @foreach($products as $product)
            <div class="product bg-white p-2 shadow-md rounded-md">
                <img src="{{ asset('images/17.png' . $product['photo']) }}" alt="Tas Image">
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
>>>>>>> d605283c87869e9a32c83bd95b2a22979314492b
            </div>
        </div>
    </div>
    @endforeach
</div>



@endsection
