@extends('layout.cart')
@section('title', 'Aplikasi Web Penjualan Tas')

@section('content')

<body class="bg-pink-50 font-sans">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold text-gray-900 mb-6">Keranjang Belanja</h1>
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Left Side (Existing Items) -->
            <div class="md:col-span-2 grid gap-6">
                <!-- Individual Product -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-700 mb-4">Tas Ransel</h2>
                    <img src="{{ asset('images/tas1.jpg') }}" alt="Tas Ransel" class="w-24 h-24 mb-4">
                    <p class="text-gray-600 mb-4">Warna biru dan pink, Tas wanita korea berbahan kulit</p>
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-lg font-bold text-gray-900">Rp 150.000</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <button onclick="updateQuantity('decrement', 'qty1')" class="text-gray-600 bg-gray-200 hover:bg-gray-300 rounded-full h-8 w-8 flex items-center justify-center">
                            <span class="text-xl">-</span>
                        </button>
                        <span id="qty1" class="text-lg font-bold text-gray-900">1</span>
                        <button onclick="updateQuantity('increment', 'qty1')" class="text-gray-600 bg-gray-200 hover:bg-gray-300 rounded-full h-8 w-8 flex items-center justify-center">
                            <span class="text-xl">+</span>
                        </button>
                        <button class="ml-4 text-white bg-red-500 hover:bg-red-700 font-medium rounded-lg text-sm px-4 py-2">Hapus</button>
                    </div>
                </div>

                <!-- Repeat for other products -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-700 mb-4">Tas Sekolah</h2>
                    <img src="{{ asset('images/tas2.jpg') }}" alt="Tas Sekolah" class="w-24 h-24 mb-4">
                    <p class="text-gray-600 mb-4">Warna biru dan pink, Tas wanita korea berbahan nylon</p>
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-lg font-bold text-gray-900">Rp 200.000</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <button onclick="updateQuantity('decrement', 'qty2')" class="text-gray-600 bg-gray-200 hover:bg-gray-300 rounded-full h-8 w-8 flex items-center justify-center">
                            <span class="text-xl">-</span>
                        </button>
                        <span id="qty2" class="text-lg font-bold text-gray-900">1</span>
                        <button onclick="updateQuantity('increment', 'qty2')" class="text-gray-600 bg-gray-200 hover:bg-gray-300 rounded-full h-8 w-8 flex items-center justify-center">
                            <span class="text-xl">+</span>
                        </button>
                        <button class="ml-4 text-white bg-red-500 hover:bg-red-700 font-medium rounded-lg text-sm px-4 py-2">Hapus</button>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-700 mb-4">Tas Selempang</h2>
                    <img src="{{ asset('images/tas4.jpg') }}" alt="Tas Selempang" class="w-24 h-24 mb-4">
                    <p class="text-gray-600 mb-4">Tas Wanita Murah, Tas Selempang Cewek, Sling Bag Wanita</p>
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-lg font-bold text-gray-900">Rp 125.000</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <button onclick="updateQuantity('decrement', 'qty3')" class="text-gray-600 bg-gray-200 hover:bg-gray-300 rounded-full h-8 w-8 flex items-center justify-center">
                            <span class="text-xl">-</span>
                        </button>
                        <span id="qty3" class="text-lg font-bold text-gray-900">1</span>
                        <button onclick="updateQuantity('increment', 'qty3')" class="text-gray-600 bg-gray-200 hover:bg-gray-300 rounded-full h-8 w-8 flex items-center justify-center">
                            <span class="text-xl">+</span>
                        </button>
                        <button class="ml-4 text-white bg-red-500 hover:bg-red-700 font-medium rounded-lg text-sm px-4 py-2">Hapus</button>
                    </div>
                </div>
            </div>

            <!-- Right Side (Order Summary) -->
            <div class="bg-white shadow-md p-6 rounded-lg">
                <h3 class="text-xl font-extrabold text-gray-900 border-b pb-4">Ringkasan Pesanan</h3>
                <ul class="text-gray-700 divide-y mt-6">
                    <li class="flex justify-between items-center text-md py-4">Subtotal <span class="font-bold">Rp 475.000</span></li>
                    <li class="flex justify-between items-center text-md py-4">Ongkos Kirim <span class="font-bold">Rp 10.000</span></li>
                    <li class="flex justify-between items-center text-md py-4 font-bold">Total <span class="font-bold">Rp 485.000</span></li>
                </ul>
                <button type="button" class="mt-6 text-md px-6 py-2.5 w-full bg-blue-600 hover:bg-blue-700 text-white rounded transition-colors duration-300">Beli Sekarang</button>

                <div class="mt-10">
                    <h3 class="text-xl font-extrabold text-gray-900 mb-4">Gunakan kode promo</h3>
                    <div class="flex border border-blue-600 overflow-hidden max-w-md rounded">
                        <input type="text" placeholder="Kode promo" class="w-full outline-none bg-white text-gray-600 text-md px-4 py-2.5" />
                        <button type='button' class="flex items-center justify-center bg-blue-600 hover:bg-blue-700 px-6 text-md text-white transition-colors duration-300">Terapkan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


@endsection
