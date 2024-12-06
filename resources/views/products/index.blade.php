@extends('products.layout')

@section('content')

<div class="crud bg-white h-screen">
<div class="py-20 mt-20 px-10">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right mb-2 text-left">
                <a class="btn btn-dark" href="{{ route('products.create') }}"> Buat Produk Baru</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="container mx-auto p-6 px-20 flex items-center justify-center">
    <table class="table table-bordered ml-10 text-center ">
        <tr>

            <th>ID</th>
            <th>Kode Tas</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Stock</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i  }}</td>
            <td>{{ $product->kode_tas }}</td>
            <td><img src="/images/{{ $product->image }}" width="100px"></td>
            <td>{{ $product->nama }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->harga }}</td>
            <td>{{ $product->deskripsi }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">


                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-dark">
                        <i class="fas fa-edit"></i> Edit
                    </a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-dark">
                        <i class="fas fa-trash-alt"></i> Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
</div>
</div>


{!! $products->links() !!}

@endsection
