@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">List Menu</h1>
        
        <!-- Success Message -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <!-- Button Add New Menu -->
        <a href="{{ route('menus.create') }}" class="btn btn-success mb-3">Add New Menu</a>

        <!-- Menu Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <!-- <th>Status</th> -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $menu)
                        <tr>
                            <td>{{ $menu->nama }}</td>
                            <td>{{ $menu->deskripsi }}</td>
                            <td>{{ $menu->harga }}</td>
                            <!-- <td>
                                <span class="badge {{ $menu->is_available ? 'bg-success' : 'bg-danger' }}">
                                    {{ $menu->is_available ? 'Available' : 'Not Available' }}
                                </span>
                            </td> -->
                            <td>
                                <!-- Edit Button -->
                                <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                                
                                <!-- Delete Form -->
                                <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    
@endsection
