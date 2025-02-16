@extends("layout.main")
@section("content")
<h1>Products</h1>
 @foreach($products as $product)
    <div class="product">
        <h2>{{ $product->name }}</h2>
        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" />
        <p>{{ $product->description }}</p>
        <p>{{ $product->price }}</p>
        <form action="{{ route('cart.change') }}" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}" />
            <input type="hidden" name="quantity" value="1" />
            <input type="submit" value="Add to cart" />
        </form>
    </div>
@endforeach

@endsection