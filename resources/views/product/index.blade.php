@extends("layouts.master")

@section("title","Products")

@section("content")
<div class="d-flex justify-content-between">
    <div><h3 class="">Manage Products</h3></div>
    <div><h3 class=""><a href="{{ route("product.create") }}" class="btn btn-sm btn-success">Create</a></div>
</div>
<table class="table table-sm table-bordered text-center mt-4">
    <thead>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>
                    <a href="{{ route("product.show",$product->id) }}" class="btn btn-sm btn-success">View</a>
                    <a href="{{ route("product.edit",$product->id) }}" class="btn btn-sm btn-info">Edit</a>
                    <form action="{{ route("product.destroy",$product->id) }}" class="d-inline" onclick="return confirm('Are you sure you want to delete this item?');" method="POST">
                        @method("DELETE")
                        @csrf
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
