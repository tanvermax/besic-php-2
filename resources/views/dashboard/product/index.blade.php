@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2 class="mb-3">Alert Messages</h2>

    <!-- Success Alert -->
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your product has been added successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>

    <!-- Error Alert -->
    <!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Something went wrong.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div> -->

    <!-- Warning Alert -->
    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> Please check your input.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div> -->

    <!-- Info Alert -->
    <!-- <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Info!</strong> This is an informational message.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div> -->

</div>

@endsection