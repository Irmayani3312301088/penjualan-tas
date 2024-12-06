@extends('layout.layout')

@section('content')
<div class="mt-12">
<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php
                    // Remove dot from price and convert to integer
                    $price = (int)str_replace('.', '', $details['price']);
                    $subtotal = $price * $details['quantity'];
                    $total += $subtotal;
                @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ asset('images') }}/{{ $details['photo'] }}"
                            width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['product_name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">Rp {{ number_format($price, 0, ',', '.') }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update"
                         min="1" data-id="{{ $id }}" data-price="{{ $price }}" />
                    </td>
                    <td data-th="Subtotal" class="text-center">Rp {{ number_format($subtotal, 0, ',', '.') }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" style="text-align:right;"><h3><strong>Total Rp {{ number_format($total, 0, ',', '.') }}</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" style="text-align:right;">
                <form action="{{ route('checkout.process') }}" method="POST">
                    @csrf
                    <a href="{{ url('/produk') }}" class="text-white bg-pink-600 hover:bg-pink-700 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                    <a href="{{ route('payment') }}" class="text-white bg-pink-600 hover:bg-pink-700 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Checkout</a>
                </form>
            </td>
        </tr>
    </tfoot>
</table>
@endsection

@section('scripts')
<script type="text/javascript">
    $(".cart_update").change(function (e) {
        e.preventDefault();

        var ele = $(this);
        var id = ele.data('id');
        var price = parseInt(ele.data('price').toString().replace(/\./g, ''));

        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: id,
                quantity: ele.val()
            },
            success: function (response) {
                // Update subtotal
                var newSubtotal = price * ele.val();
                ele.parents('tr').find('.text-center').html('Rp ' + newSubtotal.toLocaleString('id-ID'));

                // Update total
                var total = 0;
                $(".text-center").each(function () {
                    total += parseInt($(this).text().replace(/\./g, '').replace('Rp ', ''));
                });
                $("tfoot strong").html('Total Rp ' + total.toLocaleString('id-ID'));
            }
        });
    });

    $(".cart_remove").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    // Remove row
                    ele.parents('tr').remove();

                    // Update total
                    var total = 0;
                    $(".text-center").each(function () {
                        total += parseInt($(this).text().replace(/\./g, '').replace('Rp ', ''));
                    });
                    $("tfoot strong").html('Total Rp ' + total.toLocaleString('id-ID'));
                }
            });
        }
    });
</script>
@endsection
