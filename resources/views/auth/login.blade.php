@extends('layout.login')

@section('title', 'Aplikasi Web Penjualan Tas')
@section('content')

<div class="min-h-screen flex items-center justify-center w-full bg-login">
    <div class="max-w-sm mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="w-96 p-6 shadow-lg bg-white rounded-md dark:bg-gray-800">
            <h1 class="text-3xl text-center font-bold text-gray-800 dark:text-white mb-6">Login</h1>
            <!-- Display Success Message as Toast Notification -->
            @if (session('success'))
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
                    class="fixed top-4 left-1/2 transform -translate-x-1/2">
                    <div class="bg-green-500 text-white p-4 rounded-md shadow-lg">
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            <form action="{{ route('login.action') }}" method="POST" class="max-w-sm mx-auto">
                @csrf
                <!-- Display Errors -->
                @if ($errors->any())
                    <div id="errorPopup" class="hidden">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email or Username</label>
                    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                    <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password" required>
                </div>

                <div class="flex items-center mb-4">
                    <input id="remember" type="checkbox" name="remember" class="w-4 h-4 text-blue-600 border border-gray-300 rounded focus:ring-blue-500 focus:ring-offset-0 dark:focus:ring-offset-gray-800">
                    <label for="remember" class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-300">Remember me</label>
                </div>

                <button type="submit" class="w-full py-2 text-white bg-pink-500 border-2 border-pink-500 rounded-md hover:bg-transparent hover:text-pink-500 font-semibold">Login</button>

                <div class="mt-4 flex justify-between items-center">
                    <a href="#" class="text-sm font-semibold text-pink-800 dark:text-pink-500 hover:underline">Lupa kata sandi?</a>
                </div>

                <div class="mt-4 text-center">Tidak memiliki akun?
                    <a href="{{ route('register') }}" class="text-center text-blue-600 hover-blue-800 hover:underline">Register</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
