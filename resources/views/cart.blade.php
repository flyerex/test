@extends("layout.main")
@section("content")

<h1>Cart</h1>
@php
$total = 0;
@endphp
@if (count($items) > 0)
    <table class="table" style="width: 100%">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @foreach($items as $item)
                @php
                $total += $item->quantity * $item->product()->get()->first()->price;
                @endphp
                <tr>
                    <td align="center">{{ $item->product()->get()->first()->name }}</td>
                    <td nowrap="nowrap" align="center">
                        <div style="display: inline-block">
                            {{ $item->quantity }}
                        </div>
                        <div style="display: inline-block">
                        <form action="{{ route('cart.change') }}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $item->product_id }}" />
                            <input type="hidden" name="quantity" value="1" />
                            <input type="submit" value="+" />
                        </form>
                        </div>
                        <div style="display: inline-block">
                        <form action="{{ route('cart.change') }}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $item->product_id }}" />
                            <input type="hidden" name="quantity" value="-1" />
                            <input type="submit" value="-" />
                        </form>
                        </div>
                    </td>
                    <td align="center">{{ $item->product()->get()->first()->price }}</td>
                    <td align="center">{{ $item->quantity * $item->product()->get()->first()->price }}</td>
                    <td align="center">
                        <form action="{{ route('cart.remove') }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="hidden" name="product_id" value="{{ $item->product_id }}" />
                            <input type="submit" value="Remove" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>Total: {{ $total }}</p>
@else
    <p>Your cart is empty</p>
@endif

@endsection