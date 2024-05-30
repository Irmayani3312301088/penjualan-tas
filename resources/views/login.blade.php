@extends('layout.login')

@section('title', 'Aplikasi Web Penjualan Tas')
@section('content')

<div class="min-h-screen flex justify-center items-center bg-pink-100">
    <div class="max-w-sm mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="w-96 p-6 shadow-lg bg-white rounded-md dark:bg-gray-800">
            <h1 class="text-3xl text-center font-bold text-gray-800 dark:text-white mb-6">Login</h1>
            <form class="mt-4">
                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email or Username</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email">
                </div>

                <div class="mb-4">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password">
                </div>

                <div class="flex items-center mb-4">
                    <input id="remember" type="checkbox" class="w-4 h-4 text-blue-600 border border-gray-300 rounded focus:ring-blue-500 focus:ring-offset-0 dark:focus:ring-offset-gray-800" required>
                    <label for="remember" class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-300">Remember me</label>
                </div>

                <button type="submit" class="w-full py-2 text-white bg-pink-700 border-2 border-pink-700 rounded-md hover:bg-transparent hover:text-pink-700 font-semibold transition duration-300">Login</button>

                <div class="mt-4 flex justify-between items-center">
                    <a href="#" class="text-sm font-semibold text-pink-800 dark:text-pink-500 hover:underline">Forgot password?</a>
                </div>

                <div class="mt-4 text-center">
                    <a href="/register" class="text-sm font-medium text-gray-700 dark:text-gray-500 hover:underline">Don't have an account? Daftar</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection


