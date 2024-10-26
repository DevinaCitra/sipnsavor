@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Add New Menu</h1>

        <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data" class="bg-light p-4 shadow rounded">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi:</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga:</label>
                <input type="number" name="harga" id="harga" step="0.01" class="form-control" required>
            </div>

            <!-- <div class="mb-3 form-check">
                <input type="checkbox" name="tersedia" id="tersedia" class="form-check-input" checked>
                <label for="tersedia" class="form-check-label">Tersedia</label>
            </div> -->

            <button type="submit" class="btn btn-success">Add Menu</button>
        </form>
    </div>
@endsection
