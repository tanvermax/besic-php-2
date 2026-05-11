{{-- resources/views/clients/index.blade.php --}}
@extends('layouts.app')

@section('title', 'All Clients')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-list"></i> Client List</h5>
        <a href="{{ route('clients.create') }}" class="btn btn-light btn-sm">
            <i class="fas fa-plus"></i> Add New Client
        </a>
    </div>
    <div class="card-body">
        @if($clients->count() > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                        <tr>
                            <td>{{ $client->id }}</td>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->phone ?? 'N/A' }}</td>
                            <td>{{ $client->company_name ?? 'N/A' }}</td>
                            <td>
                                <span class="badge bg-{{ $client->status == 'active' ? 'success' : 'danger' }}">
                                    {{ $client->status }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $clients->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-users fa-3x text-muted mb-3"></i>
                <h5>No clients found!</h5>
                <a href="{{ route('clients.create') }}" class="btn btn-primary mt-3">
                    <i class="fas fa-plus"></i> Add Your First Client
                </a>
            </div>
        @endif
    </div>
</div>
@endsection