@extends('layout.detailproduct')

@section('content')

<div class="container mx-auto p-6 mt-20">
        <div class="flex justify-center items-center">
            <div class="w-full max-w-4xl bg-white shadow-md rounded-lg p-6 flex ">
                <div class="w-1/2">
                    <img src="{{ asset('images/17.png') }}" alt="Product Image" class="w-full h-auto rounded">
                </div>
                <div class="w-1/2 pl-6">
                    <h1 class="text-3xl font-semibold mb-4">I'm a product</h1>
                    <p class="text-red-500 text-xl mb-2">$400.00</p>
                    <p class="text-gray-600 mb-4">SKU: 0002</p>
                    <form class="mb-4">
                        <label for="quantity" class="block text-gray-700 mb-2">Quantity</label>
                        <input type="number" id="quantity" name="quantity" value="1" class="w-16 p-2 border rounded mb-4">
                        <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded mr-2">Add to Cart</button>
                        <button type="button" class="bg-black text-white px-4 py-2 rounded">Buy Now</button>
                    </form>
                    <div class="mb-4">
                        <h2 class="text-lg font-semibold mb-2">PRODUCT INFO</h2>
                        <p class="text-gray-700">I'm a product detail. I'm a great place to add more information about your product such as sizing, material, care and cleaning instructions. This is also a great space to write what makes this product special and how your customers can benefit from this item.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
