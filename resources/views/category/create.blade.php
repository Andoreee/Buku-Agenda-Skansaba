@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-white">Tambah Kategori</h1>
        <div class="card shadow mb-4">
            <form class="card-body">
                <div class="mb-3">
                    <label for="Kategori" class="form-label">Name</label>
                    <input type="text" class="form-control @error('kategori') is-invalid @enderror"
                        name="kategori" id="Kategori" placeholder="Name..."
                        value="{{ old('kategori') }}" required>
                    @error('kategori')
                        <div class="invalid-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary float-right">Ok</button>
                <button type="reset" class="btn btn-outline-primary mr-3 float-right">Batal</button>
            </form>
        </div>
    </div>
@endsection