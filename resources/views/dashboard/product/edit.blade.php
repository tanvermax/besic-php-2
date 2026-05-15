@extends('layouts.app2')

@section('content')

<h2>Edit Product</h2>

<!-- <form action="product.update" method="POST"> -->
<form action="{{route('product.update',$product->id)}}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Product Name</label>

        <input 
            type="text"
            name="name"
            class="form-control"
            value="{{ $product->name }}"
        >
    </div>

    <div class="mb-3">
        <label>Slug</label>

        <input 
            type="text"
            name="slug"
            class="form-control"
            value="{{ $product->slug }}"
        >
    </div>

    <div class="mb-3">
        <label>Price</label>

        <input 
            type="number"
            name="price"
            class="form-control"
            value="{{ $product->price }}"
        >
    </div>

    <button class="btn btn-primary">
        Update Product
    </button>
@if (session('message'))
     <h2 class="mb-3">Alert Messages</h2>

    <!-- Success Alert -->
    <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
        <strong>{{ session('message') }}</strong>
        <button type="button" class="btn-close text-red" data-bs-dismiss="alert"></button>
    </div>
    @endif
</form>

@endsection