<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Penjualan tas')</title>
    <link rel=”stylesheet” href=”https://cdn.tailwindcss.com/3.4.1”>"
</head>
<body>
    <header>
        @include('components.header')
    </header>

    <h1>List Produk</h1>
    <div class="container">
        <main>
            @yield('content')
        </main>
    </div>

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>
