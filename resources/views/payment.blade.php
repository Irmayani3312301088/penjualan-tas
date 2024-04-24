@extends('layout.payment')

@section('title', 'Aplikasi Web Penjualan Tas')
@section('content')

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Payment</h1>

        <div class="bg-white rounded-lg shadow-md p-8">
            <form>
                <div class="mb-6">
                    <label for="card-number" class="block mb-2 font-medium text-gray-700">Nomor Kartu</label>
                    <div class="relative">
                        <input type="text" id="card-number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="0000 0000 0000 0000" required>
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 4a2 2 0 00-2 2v11a3 3 0 006 0V6a2 2 0 00-2-2H4z"></path>
                                <path fill-rule="evenodd" d="M18 9a3 3 0 00-3-3h-1.528A5.974 5.974 0 0011 5c-1.542 0-2.942.579-4 1.528V6a2 2 0 00-2-2H4a2 2 0 00-2 2v11a3 3 0 006 0V14a4 4 0 008 0v-5z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="expiration-date" class="block mb-2 font-medium text-gray-700">Tanggal</label>
                    <div class="relative">
                        <input type="text" id="expiration-date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="MM/YY" required>
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="cvv" class="block mb-2 font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <input type="text" id="cvv" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="123" required>
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="amount" class="block mb-2 font-medium text-gray-700">Jumlah</label>
                    <div class="relative">
                        <span class="text-gray-400">Rp</span>
                        <input type="text" id="amount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="100,000" required>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="name-on-card" class="block mb-2 font-medium text-gray-700">Name </label>
                    <input type="text" id="name-on-card" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Amazon" required>
                </div>

                <div class="flex items-center mb-6">
                    <input type="checkbox" id="save-card" class="form-checkbox h-4 w-4 text-blue-500">
                    <label for="save-card" class="ml-2 text-gray-700">Simpan kartu untuk pembayaran di masa mendatang</label>
                </div>

                <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded-md mt-6 block w-full">Pay Now</button>
            </form>
        </div>
    </div>
</body>

@endsection












