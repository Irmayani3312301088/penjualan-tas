<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Aplikasi Web Penjualan tas')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <!-- Menggunakan Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com/3.4.1">
    <link href="stylesheet" href="/styles/tailwindcss3.4.1.js">
    <link href="stylesheet" href="/styles/style.css">
</head>
<body>


    <div class="container">
        <main>
            @yield('content')
        </main>
    </div>


</body>
</html>
