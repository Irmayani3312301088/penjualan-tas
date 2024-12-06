<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Penjualan tas')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <!-- Menggunakan Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com/3.4.1">
    <link rel=”stylesheet” href=”https://cdn.tailwindcss.com/3.4.1”>
    <link rel="stylesheet" href="/styles/style.css">
</head>
<body>

    <div class="container">
        <main>
            @yield('content')
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const errorPopup = document.getElementById('errorPopup');
            if (errorPopup) {
                alert(errorPopup.innerText);
            }
        });

        document.getElementById('registerForm').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const passwordConfirmation = document.getElementById('password_confirmation').value;

            if (password !== passwordConfirmation) {
                e.preventDefault();
                alert('Passwords do not match. Please try again.');
            }
        });
    </script>

</body>
</html>
