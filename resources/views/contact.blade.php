@extends('layout.contact')
@section('title', 'Aplikasi Web Penjualan Tas')

@section('content')
    <!-- Contact Section -->
    <body class="bg-pink-50 font-sans mt-10">
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <form>
                        <div class="mb-4">
                            <label for="name" class="block mb-1">Nama</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-gray-400">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block mb-1">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-gray-400">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block mb-1">Pesan</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-gray-400"></textarea>
                        </div>
                        <button type="submit" class="bg-gray-800 text-white px-6 py-2 rounded-md hover:bg-gray-700 transition-colors duration-300">Kirim Pesan</button>
                    </form>
                </div>
                <div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <div class="bg-pink-100 rounded-md p-4">
                        <h2 class="text-xl font-semibold mb-4">Informasi Kontak</h2>
                        <p class="mb-2"><strong>Alamat:</strong> Batam Center</p>
                        <p class="mb-2"><strong>Email:</strong> modabags@gmail.com</p>
                        <p class="mb-2"><strong>Nomor HP:</strong> +62 123 456 789</p>
                        <!-- Tambahkan fitur lainnya -->
                        <p class="mb-2"><strong>Jam Operasional:</strong> Senin - Jumat: 9:00 AM - 6:00 PM</p>
                        <p class="mb-2"><strong>Ikuti Kami di:</strong> <a href="#" class="text-blue-500 hover:underline">Instagram</a>, <a href="#" class="text-blue-500 hover:underline">Facebook</a></p>
                    </div>
                </div>
            </div>
        </div>

@endsection
