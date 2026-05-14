@extends('layouts.app2')

@section('content')

<h2>Admin Dashboard</h2>
<p>Welcome to Laravel Dashboard</p>

<div class="row mt-4">

    <div class="col-md-4">
        <div class="card-box bg-primary">
            <h4>Total Users</h4>
            <h1>120</h1>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-box bg-success">
            <h4>Total Orders</h4>
            <h1>85</h1>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-box bg-danger">
            <h4>Total Revenue</h4>
            <h1>$950</h1>
        </div>
    </div>

</div>

@endsection