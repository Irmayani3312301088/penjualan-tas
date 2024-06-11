<header class="fixed top-0 w-screen bg-white lg:max-w-full dark:bg-gray-900 z-50 shadow">
    <nav class="bg-white border-teal-900 px-2 lg:px-4 py-1.5 dark:bg-teal-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="/" class="flex items-center text-black">
                <img src="{{ url('/images/logo 1.png') }}" class="mr-2 h-7 sm:h-9" alt=" Logo">
                <span class="self-center text-lg whitespace-nowrap dark:text-white text-black font-serif">Moda Bags</span>
            </a>
            <div class="flex items-center lg:order-3">
                <a href="/cart">
                    <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                    </svg>
                </a><br>
                <a href="/login" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-gray-300 font-medium text-xs px-3 lg:px-4 py-1.5 lg:py-2 mr-1 hover:text-gray-500 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800 font-serif border-b-0">Log in</a>
                <a class="hover:text-gray-500 text-black h-fit" href="logout.php?logout=true" onclick="return confirmLogout()">
                    <span class="material-symbols-outlined">logout</span>
                </a>
            </div>
            <div class="navbar hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1 font-sans" id="mobile-menu-2">
                <ul class="flex flex-col mt-2 font-medium lg:flex-row lg:space-x-6 lg:mt-0">
                    <li>
                        <a href="/" class="block py-1 pr-2 pl-2 text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif border-b-0" aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="/produk" class="block py-1 pr-2 pl-2 text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif border-b-0">Produk</a>
                    </li>
                    <li>
                        <a href="/about" class="block py-1 pr-2 pl-2 text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif border-b-0">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="/contact" class="block py-1 pr-2 pl-2 text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif border-b-0">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
