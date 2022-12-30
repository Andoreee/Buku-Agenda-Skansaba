@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-white">Tambah Kategori</h1>
        <div class="card shadow mb-4">
            <form action="/admin/kategori" method="POST" class="card-body">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        id="name" placeholder="Name..." value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <div class="invalid-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary float-right">Ok</button>
                <a href="/admin/kategori" class="btn btn-outline-primary mr-3 float-right">Batal</a>
            </form>
        </div>
    </div>
@endsection
