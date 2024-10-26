@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Edit Menu</h1>

        <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data" class="bg-light p-4 shadow rounded">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nama:</label>
                <input type="text" name="name" id="name" value="{{ $menu->nama }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi:</label>
                <textarea name="description" id="description" class="form-control" rows="3" required>{{ $menu->deskripsi }}</textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Harga:</label>
                <input type="number" name="price" id="price" value="{{ $menu->harga }}" step="0.01" class="form-control" required>
            </div>

            <!-- <div class="mb-3 form-check">
                <input type="checkbox" name="is_available" id="is_available" class="form-check-input" {{ $menu->is_available ? 'checked' : '' }}>
                <label for="is_available" class="form-check-label">Tersedia</label>
            </div> -->

            <button type="submit" class="btn btn-success">Update Menu</button>
        </form>
    </div>
@endsection
