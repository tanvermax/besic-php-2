@extends('layouts.app2')

@section('content')

<h2 class="mb-4">Add Product</h2>
<style>
    .text-danger{
        color: red;
        font-style: italic;
    }
</style>
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

@endsection