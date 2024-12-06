<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Penjualan Tas Berbasis Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<header class="fixed top-0 w-screen bg-pink lg:max-w-full dark:bg-gray-900 z-50 shadow ">
    <nav class="bg-white border-teal-900 px-2 lg:px-4 py-1.5 dark:bg-teal-800">
        <div class="flex justify-between items-center mx-auto max-w-screen-xl">
            <!-- Logo -->
            <a href="/" class="flex items-center text-black">
                <img src="{{ url('/images/logo 1.png') }}" class="mr-2 h-7 sm:h-9" alt="Logo">
                <span class="self-center text-lg whitespace-nowrap dark:text-white text-black font-serif">Moda Bags</span>
            </a>

            <!-- Navigation links -->
            <ul class="flex space-x-6">
                <li>
                    <a href="/" class="block py-1 pr-2 pl-2 text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif">Beranda</a>
                </li>
                <li>
                    <a href="/product" class="block py-1 pr-2 pl-2 text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif">Produk</a>
                </li>
                <li>
                    <a href="/about" class="block py-1 pr-2 pl-2 text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif">Tentang Kami</a>
                </li>
                <li>
                    <a href="/contact" class="block py-1 pr-2 pl-2 text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif">Kontak</a>
                </li>
            </ul>

            <!-- Cart and Logout -->
            <div class="flex items-center space-x-4">
                <!-- Cart button with dropdown -->
                <div class="dropdown">
                    <button id="dLabel" type="button" class="btn " data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge bg-danger">{{ count((array) session('cart')) }}</span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                <li class="dropdown-item">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-3 col-3">
                                            @if(isset($details['images']) && !empty($details['images']))
                                                <img src="{{ $details['images'] }}" width="50" height="50" class="img-responsive"/>
                                            @else
                                                <img src="{{ url('/images/default.png') }}" width="50" height="50" class="img-responsive"/>
                                            @endif
                                        </div>
                                        <div class="col-lg-9 col-sm-9 col-9">
                                            @if(isset($details['name']))
                                                <p>{{ $details['name'] }}</p>
                                            @endif
                                            @if(isset($details['quantity']) && isset($details['price']))
                                                <p>{{ $details['quantity'] }} x ${{ $details['price'] }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            <li class="dropdown-item text-center">
                                <a href="{{ url('/cart') }}" class="btn btn-primary btn-block">View All</a>
                            </li>
                        @else
                            <li class="dropdown-item text-center">Keranjang Anda kosong</li>
                        @endif
                    </ul>
                </div>

                <!-- Tautan logout -->
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 512 512" fill="currentColor">
                        <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap"></span>
                </a>

                <!-- Formulir logout -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </nav>
</header>

<br/>
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</div>

@yield('scripts')

<footer>
        @include('components.footer')
    </footer>
</body>
</html>
