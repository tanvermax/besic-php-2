<h1>Users Page</h1>
<a href="/dashboard">Back Dashboard</a>@extends('layouts.app')

@section('content')

<h1>Settings Page</h1>

<form class="mt-4">

    <div class="mb-3">
        <label>Name</label>
        <input type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control">
    </div>

    <button class="btn btn-primary">
        Save Settings
    </button>

</form>

@endsection