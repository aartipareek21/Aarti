
@extends('website.layout.structure')


@section('content')


<form action="{{ url('place-order') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">

    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" class="form-control" min="1" required>
    </div>

    <button class="btn btn-primary" type="submit">Order Now</button>
</form>

@endsection
