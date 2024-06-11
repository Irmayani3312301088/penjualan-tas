@extends('products.layout')

@section('content')
<div class="container mt-5">
    <div class="bg-white rounded-lg shadow-lg p-4 max-w-md mx-auto">
        <div class="text-2xl font-bold mb-4 text-center">
            <h2>Tambahkan Produk</h2>
        </div>
        <div>
        <a class="btn btn-dark mb-4" href="{{ route('products.index') }}">Back</a>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <strong>Kode Tas:</strong>
                <input type="number" name="kode_tas" class="form-control" placeholder="Kode Tas">
            </div>
            <div class="form-group mb-3">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="Image">
            </div>
            <div class="form-group mb-3">
                <strong>Nama:</strong>
                <input type="text" class="form-control" name="nama" placeholder="Nama">
            </div>
            <div class="form-group mb-3">
                <strong>Stock:</strong>
                <input type="number" name="stock" class="form-control" placeholder="Stock">
            </div>
            <div class="form-group mb-3">
                <strong>Harga:</strong>
                <input type="number" name="harga" class="form-control" placeholder="Harga">
            </div>
            <div class="text-center">
                <button type="submit" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
