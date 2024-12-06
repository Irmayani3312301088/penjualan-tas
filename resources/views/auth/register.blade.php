@extends('layout.login')

@section('title', 'Aplikasi Web Penjualan Tas')
@section('content')


<div class="min-h-screen flex items-center justify-center w-full bg-login">
    <div class="max-w-sm mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="w-96 p-6 bg-white rounded-md dark:bg-gray-800">
            <h1 class="text-3xl text-center font-bold text-gray-800 dark:text-white mb-6">Daftar</h1>

            <form id="registerForm" action="{{ route('register.save') }}" method="POST" class="max-w-sm mx-auto">
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

                <!-- Display Success Message as Toast Notification -->
                @if (session('success'))
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
                        class="fixed top-4 left-1/2 transform -translate-x-1/2 bg-green-500 text-white p-3 rounded-md shadow-lg">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="mb-4">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your name" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your email address" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                    <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your password" required>
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Confirm your password" required>
                </div>
                <div class="mb-4">
                    <label for="role"
                        class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">User</label>
                    <select id="role" name="role"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                        <option value="Pembeli" {{ old('role') == 'Pembeli' ? 'selected' : '' }}>Pembeli</option>
                        <option value="Penjual" {{ old('role') == 'Penjual' ? 'selected' : '' }}>Penjual</option>
                    </select>
                </div>

                <div class="flex items-center mb-4">
                    <input id="terms" value="" type="checkbox" class="w-4 h-4 text-blue-600 border border-gray-300 rounded focus:ring-blue-500 focus:ring-offset-0 dark:focus:ring-offset-gray-800" required>
                    <label for="terms" class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-300">Menyetujui syarat & ketentuan</label>
                </div>

                <button type="submit" class="w-full py-2 text-white bg-pink-500 border-2 border-pink-500 rounded-md hover:bg-transparent hover:text-pink-500 font-semibold">Register</button>

                <div class="mt-4 text-center text-gray-700 dark:text-gray-300">
                Sudah memiliki akun? <a href="{{route('login')}}" class="text-blue-500">Login </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
