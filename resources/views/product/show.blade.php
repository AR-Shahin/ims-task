@extends("layouts.master")

@section("title","View Product")

@section("content")
<div class="d-flex justify-content-between">
    <div><h3 class="">View Product</h3></div>
    <div><h3 ><a href="{{ route("product.index") }}" class="btn btn-sm btn-success">Back</a></div>
</div>

<ul>
    <li><b>Name : </b> {{ $product->name }}</li>
    <li><b>Price :</b> {{ $product->price }}</li>
    <li><b>Quantity :</b> {{ $product->quantity }}</li>
</ul>
@endsection
