@extends('layout.register')

@section('title', 'Aplikasi Web Penjualan Tas')
@section('content')

<div class="min-h-screen flex justify-center items-center bg-pink-100">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="w-96 p-6 bg-white rounded-md dark:bg-gray-800">
            <h1 class="text-3xl text-center font-bold text-gray-800 dark:text-white mb-6">Daftar</h1>

            <form class="mt-4" method="POST" action="register.php">
                <div class="mb-4">
                    <label for="firstName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">First Name</label>
                    <input type="text" id="firstName" name="firstName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your first name" required>
                </div>

                <div class="mb-4">
                    <label for="lastName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Last Name</label>
                    <input type="text" id="lastName" name="lastName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your last name" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your email address" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                    <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your password" required>
                </div>

                <div class="flex items-center mb-4">
                    <input id="agree" type="checkbox" class="w-4 h-4 text-blue-600 border border-gray-300 rounded focus:ring-blue-500 focus:ring-offset-0 dark:focus:ring-offset-gray-800" required>
                    <label for="agree" class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-300">Agree to the terms & condition</label>
                </div>

                <button type="submit" class="w-full py-2 text-white bg-pink-700 border-2 border-pink-700 rounded-md hover:bg-transparent hover:text-pink-700 font-semibold transition duration-300">Login</button>

                <div class="mt-4 text-center text-gray-700 dark:text-gray-300">
                    Already have an account? <a href="/login" class="text-blue-500">Login here</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
