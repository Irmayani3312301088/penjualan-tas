@extends('layout.home')
@section('title', 'Aplikasi Web Penjualan Tas')

@section('content')
<div class="container mx-auto p-6 mt-20">
        <div class="flex justify-center items-center">
            <div class="w-full max-w-4xl bg-white shadow-md rounded-lg p-6">
                <form>
                    <div class="flex mb-4">
                        <div class="w-1/2 pr-2">
                            <label for="first-name" class="block text-gray-700 mb-2">First Name</label>
                            <input type="text" id="first-name" name="first-name" class="w-full p-2 border-b-2 border-pink-500 focus:outline-none">
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="last-name" class="block text-gray-700 mb-2">Last Name</label>
                            <input type="text" id="last-name" name="last-name" class="w-full p-2 border-b-2 border-pink-500 focus:outline-none">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 mb-2">Email *</label>
                        <input type="email" id="email" name="email" class="w-full p-2 border-b-2 border-pink-500 focus:outline-none">
                    </div>
                    <div class="mb-4">
                        <label for="subject" class="block text-gray-700 mb-2">Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full p-2 border-b-2 border-pink-500 focus:outline-none">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" class="w-full p-2 border-b-2 border-pink-500 focus:outline-none"></textarea>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="bg-dark text-red-500 border border-pink-500 px-4 py-2 rounded hover:bg-pink-500 hover:text-white transition">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
