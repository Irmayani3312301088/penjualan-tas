@extends('layout.layout')
@section('title', 'Aplikasi Web Penjualan Tas')

@section('content')
<<<<<<< HEAD
<div class="container mx-auto px-4 py-8 mt-20">
    <div class="flex justify-center items-center">
        <div class="w-full max-w-4xl bg-white shadow-md rounded-lg p-8">
            @if(session('success'))
                <div class="bg-green-500 text-white p-4 mb-6 rounded">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div>
                        <label for="first-name" class="block text-gray-700 font-medium mb-2">First Name</label>
                        <input type="text" id="first-name" name="first_name" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-700" value="{{ old('first_name') }}">
                        @error('first_name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="last-name" class="block text-gray-700 font-medium mb-2">Last Name</label>
                        <input type="text" id="last-name" name="last_name" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-700" value="{{ old('last_name') }}">
                        @error('last_name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email *</label>
                    <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-700" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                    <input type="text" id="subject" name="subject" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-700" value="{{ old('subject') }}">
                    @error('subject')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                    <textarea id="message" name="message" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-700" rows="5">{{ old('message') }}</textarea>
                    @error('message')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-pink-500 text-white px-6 py-3 rounded hover:bg-pink-800 transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Kirim</button>
                </div>
            </form>
=======
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
>>>>>>> d605283c87869e9a32c83bd95b2a22979314492b
        </div>
    </div>
</div>
@endsection
