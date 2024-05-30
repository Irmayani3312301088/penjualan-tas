@extends('layout.detailproduct')

@section('content')

<body class="bg-pink-50 font-sans">
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Product 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md flex flex-col md:flex-row">
                    <!-- Product Image -->
                    <div class="md:w-1/2 flex items-center justify-center mb-6 md:mb-0">
                        <img src="{{ asset('images/tas1.jpg') }}" alt="Tas Ransel" class="w-64 h-auto rounded-lg shadow-md">
                    </div>
                    <!-- Product Information -->
                    <div class="md:w-1/2 md:ml-8">
                        <h1 class="text-3xl font-semibold mb-4">Tas Ransel</h1>
                        <div class="mb-6">
                            <p class="text-gray-700"><span class="font-bold">Harga:</span> Rp. 150.000</p>
                            <p class="text-gray-700 mt-2"><span class="font-bold">Stok:</span> Tersedia</p>
                            <p class="text-gray-700 mt-2"><span class="font-bold">Deskripsi:</span> Tas Ransel dengan desain yang <span class="italic">modern</span> dan <span class="italic">trendy</span>.</p>
                            <p class="text-gray-700 mt-2"><span class="font-bold">Warna:</span> Biru & Pink</p>
                            <p class="text-gray-700"><span class="font-bold">Bahan:</span> Kulit sintetis</p>
                            <p class="text-gray-700"><span class="font-bold">Ukuran:</span> 30cm x 20cm x 10cm</p>
                            <p class="text-gray-700"><span class="font-bold">Berat:</span> 0.5 kg</p>
                            <div class="flex items-center mt-4">
                                <span class="text-xl font-semibold text-gray-800"><span class="font-bold">Rating:</span> 4.5</span>
                                <span class="ml-2 text-sm text-gray-500">/ 5</span>
                            </div>
                        </div>
                        <!-- Add to Cart Button and Quantity Control -->
                        <div class="flex items-center">
                            <button class="bg-gray-800 text-white px-6 py-3 rounded-md hover:bg-gray-700 transition-colors duration-300">+ Keranjang</button>
                            <div class="flex items-center ml-4">
                                <button onclick="updateQuantity('decrement', 'qty1')" class="text-gray-600 bg-gray-200 hover:bg-gray-300 rounded-full h-8 w-8 flex items-center justify-center">
                                    <span class="text-xl">-</span>
                                </button>
                                <span id="qty1" class="text-lg font-bold text-gray-900 mx-2">1</span>
                                <button onclick="updateQuantity('increment', 'qty1')" class="text-gray-600 bg-gray-200 hover:bg-gray-300 rounded-full h-8 w-8 flex items-center justify-center">
                                    <span class="text-xl">+</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md flex flex-col md:flex-row">
                    <!-- Product Image -->
                    <div class="md:w-1/2 flex items-center justify-center mb-6 md:mb-0">
                        <img src="{{ asset('images/tas2.jpg') }}" alt="Tas Sekolah" class="w-64 h-auto rounded-lg shadow-md">
                    </div>
                    <!-- Product Information -->
                    <div class="md:w-1/2 md:ml-8">
                        <h1 class="text-3xl font-semibold mb-4">Tas Sekolah</h1>
                        <div class="mb-6">
                            <p class="text-gray-700"><span class="font-bold">Harga:</span> Rp. 200.000</p>
                            <p class="text-gray-700 mt-2"><span class="font-bold">Stok:</span> Tersedia</p>
                            <p class="text-gray-700 mt-2"><span class="font-bold">Deskripsi:</span> Tas Sekolah dengan desain yang <span class="italic">modern</span> dan <span class="italic">trendy</span>.</p>
                            <p class="text-gray-700 mt-2"><span class="font-bold">Warna:</span> Biru & Pink</p>
                            <p class="text-gray-700"><span class="font-bold">Bahan:</span> Nylon</p>
                            <p class="text-gray-700"><span class="font-bold">Ukuran:</span> 30cm x 20cm x 10cm</p>
                            <p class="text-gray-700"><span class="font-bold">Berat:</span> 0.5 kg</p>
                            <div class="flex items-center mt-4">
                                <span class="text-xl font-semibold text-gray-800"><span class="font-bold">Rating:</span> 4.5</span>
                                <span class="ml-2 text-sm text-gray-500">/ 5</span>
                            </div>
                        </div>
                        <!-- Add to Cart Button and Quantity Control -->
                        <div class="flex items-center">
                            <button class="bg-gray-800 text-white px-6 py-3 rounded-md hover:bg-gray-700 transition-colors duration-300">+ Keranjang</button>
                            <div class="flex items-center ml-4">
                                <button onclick="updateQuantity('decrement', 'qty2')" class="text-gray-600 bg-gray-200 hover:bg-gray-300 rounded-full h-8 w-8 flex items-center justify-center">
                                    <span class="text-xl">-</span>
                                </button>
                                <span id="qty2" class="text-lg font-bold text-gray-900 mx-2">1</span>
                                <button onclick="updateQuantity('increment', 'qty2')" class="text-gray-600 bg-gray-200 hover:bg-gray-300 rounded-full h-8 w-8 flex items-center justify-center">
                                    <span class="text-xl">+</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

@endsection
