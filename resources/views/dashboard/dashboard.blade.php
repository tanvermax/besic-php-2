@extends('layouts.app2')

@section('content')

<div class="row ">
    <div>
        <h2>Admin Dashboard</h2>
        <p>Welcome to Laravel Dashboard</p>
    </div>
    <div>
        @auth
        {{ Auth::user()->name }}
        @endauth
        <form
         action="{{ route('logout') }}"
          method="POST">
            @csrf
            <button class="btn btn-danger btn-sm">
                Logout
            </button>
        </form>
    </div>
</div>
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