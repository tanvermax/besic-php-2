@extends('layouts.app2')

@section('content')

<h2 class="mb-4">Add Product</h2>

<style>
    .text-danger{
        color: red;
        font-style: italic;
    }
    .product{
        display: flex;
    }
</style>

<div class="product">
<form action="{{ route('store') }}" method="POST">

    @csrf

    <!-- Product Name -->
    <div class="mb-3">
        <label class="form-label">Product Name</label>

        <input 
            type="text" 
            name="name" 
            class="form-control"
            placeholder="Enter product name"
        >
        @error('name')
        <span class="text-danger">{{ $message }}</span>

        @enderror
    </div>

    <!-- Product Slug -->
    <div class="mb-3">
        <label class="form-label">Product Slug</label>

        <input 
            type="text" 
            name="slug" 
            class="form-control"
            placeholder="Enter product slug"
        >
        @error('slug')
        <span class="text-danger">{{ $message }}</span>

        @enderror
    </div>

    <!-- Product Price -->
    <div class="mb-3">
        <label class="form-label">Product Price</label>

        <input 
            type="number" 
            name="price" 
            class="form-control"
            placeholder="Enter product price"
        >
        @error('price')
        <span class="text-danger">{{ $message }}</span>

        @enderror
    </div>

    <button type="submit" class="btn btn-primary">
        Add Product
    </button>


    @if (session('message'))
     <h2 class="mb-3">Alert Messages</h2>

    <!-- Success Alert -->
    <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
        <strong>{{ session('message') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif
   

</form>
<hr class="my-5">

<h2>All Products</h2>

<table class="table table-bordered table-striped mt-3">

    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Price</th>
            <th>Created At</th>
        </tr>
    </thead>

    <tbody>

        @forelse ($products as $product)

        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->slug }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->created_at->format('d M Y') }}</td>
        </tr>

        @empty

        <tr>
            <td colspan="5" class="text-center">
                No Products Found
            </td>
        </tr>

        @endforelse

    </tbody>

</table>
</div>

@endsection

