@extends("layouts.master")

@section("title","Create Product")

@section("content")
<div class="d-flex justify-content-between">
    <div><h3 class="">Create Product</h3></div>
    <div><h3 ><a href="{{ route("product.index") }}" class="btn btn-sm btn-success">Back</a></div>
</div>

<form action="{{ route("product.store") }}" class="mt-2" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-4 my-2">
            <b>Product Name</b>
            <input type="text" class="form-control" name="name" value="{{ old("name") }}" placeholder="Product Name">
            @error("name")
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4 my-2">
            <b>Product Quantity</b>
            <input type="number" class="form-control" name="quantity" value="{{ old("quantity") }}" placeholder="Product Quantity">
            @error("quantity")
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4 my-2">
            <b>Product Price</b>
            <input type="number" class="form-control" name="price" value="{{ old("price") }}" placeholder="Product Price">
            @error("price")
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4 my-2">
            <button class="btn btn-sm btn-success">Submit</button>
        </div>
    </div>
</form>
@endsection
