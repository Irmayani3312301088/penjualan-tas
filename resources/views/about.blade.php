@extends('layout.layout')

@section('title', 'Tentang Kami')

@section('content')
<div class="about-section bg-pink-300 py-12 mt-10 w-full" style="min-height: 100vh;">
    <div class="container mx-auto flex flex-col lg:flex-row items-start lg:space-x-12 px-4 lg:px-0">
        <div class="lg:w-1/3 w-full mb-8 lg:mb-0">
            <img src="{{ url('/images/tas6.jpg') }}" class="h-auto w-full rounded-lg shadow-lg" alt="Logo">
        </div>

        <div class="lg:w-2/3">
            <h1 class="text-4xl font-bold text-gray-800 mb-6">Tentang Kami</h1>
            <p class="text-gray-700 text-lg leading-relaxed mb-4">
                Selamat datang di Aplikasi Web Tas kami! Kami adalah toko online yang menyediakan berbagai macam tas berkualitas tinggi yang cocok untuk berbagai keperluan Anda. Dari tas tangan elegan hingga ransel praktis, kami menawarkan berbagai pilihan produk yang dirancang untuk memenuhi gaya dan kebutuhan Anda.
            </p>
            <p class="text-gray-700 text-lg leading-relaxed mb-4">
                Kami percaya bahwa tas adalah lebih dari sekadar aksesoris; tas mencerminkan kepribadian dan gaya hidup. Oleh karena itu, kami berkomitmen untuk menghadirkan produk-produk terbaik dengan desain terbaru dan bahan berkualitas tinggi. Setiap tas yang kami tawarkan dipilih dengan teliti untuk memastikan kepuasan Anda.
            </p>
            <p class="text-gray-700 text-lg leading-relaxed mb-4">
                Selain itu, kami juga menawarkan layanan pelanggan yang ramah dan responsif untuk membantu Anda dalam proses pembelian. Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau membutuhkan saran. Kami di sini untuk membantu Anda menemukan tas yang sempurna.
            </p>
            <div class="location-info bg-white rounded-lg p-4 shadow-md">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Lokasi Toko</h2>
                <p class="text-gray-600">Jl. Ahmad Yani Batam Kota. Kota Batam. Kepulauan Riau. Indonesia.</p>
            </div>

            <a href="{{ url('/contact') }}" class="mt-6 inline-block bg-pink-500 text-white py-2 px-6 rounded-full shadow-lg hover:bg-pink-600 transition duration-300">Kontak Kami</a>
        </div>
    </div>
</div>
@endsection
