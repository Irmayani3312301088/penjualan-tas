@extends('layout.register')

@section('title', 'Aplikasi Web Penjualan Tas')
@section('content')

<div class="min-h-screen flex justify-center items-center h-screen bg-pink-100">
  <div class="max-w-sm mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
    <div class="w-96 p-6 shadow-lg bg-white rounded-md">
      <h1 class="text-3xl block text-center font-semibold"></i>Sign In</h1>

      <form class="mt-4" method="POST" action="register.php">
        <div class="mb-3">
          <label for="firstName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">First Name</label>
          <input type="text" id="firstName" name="firstName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your first name">
        </div>

        <div class="mb-3">
          <label for="lastName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Last Name</label>
          <input type="text" id="lastName" name="lastName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your last name">
        </div>

        <div class="mb-3">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
          <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your email address">
        </div>

        <div class="mb-4">
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
          <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your password">
        </div>

        <div class="flex items-center mb-4">
          <input id="remember" type="checkbox" class="w-4 h-4 text-blue-600 border border-gray-300 rounded focus:ring-blue-500 focus:ring-offset-blue-200 dark:focus-ring-blue-600 dark:ring-offset-gray-800" required>
          <label for="remember" class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-300">Agree to the terms & condition</label>
        </div>

        <button type="submit" class="border-2 border-pink-700 bg-pink-700 text-white py-1 w-full rounded-md hover:bg-transparent hover:text-pink-500 font-semibold"></i> Sign In</button>

        <div class="mt-4 text-center">
          Already have an account? <a href="#" class="text-blue-500">Login here</a>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection

