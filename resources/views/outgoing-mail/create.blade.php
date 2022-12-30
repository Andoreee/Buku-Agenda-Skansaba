@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-white">Tambah Surat Masuk</h1>
        <div class="card shadow mb-4">
            <form action="/admin/surat-masuk" method="POST" class="card-body" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="Tanggal-Surat" class="form-label">Tanggal Surat</label>
                    <input type="date" class="form-control @error('tanggal_surat') is-invalid @enderror"
                        name="tanggal_surat" id="Tanggal-Surat" placeholder="mm/dd/yyyy" value="{{ old('tanggal_surat') }}"
                        required>
                    @error('tanggal_surat')
                        <div class="invalid-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="No-Surat" class="form-label">No Surat</label>
                    <input type="text" class="form-control @error('no_surat') is-invalid @enderror" name="no_surat"
                        id="No-Surat" placeholder="No Surat..." value="{{ old('no_surat') }}" required>
                    @error('no_surat')
                        <div class="invalid-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Kategori-Surat" class="form-label">Kategori Surat</label>
                    <select class="form-select @error('category_id') is-invalid @enderror" name="category_id" required>
                        @foreach ($categories as $category)
                            @if (old('category_id') == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Tujuan" class="form-label">Tujuan</label>
                    <input type="text" class="form-control @error('pengirim') is-invalid @enderror" name="pengirim"
                        id="Tujuan" placeholder="Tujuan..." value="{{ old('pengirim') }}" required>
                    @error('pengirim')
                        <div class="invalid-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Perihal" class="form-label">Perihal</label>
                    <input type="text" class="form-control @error('perihal') is-invalid @enderror" name="perihal"
                        id="Perihal" placeholder="Perihal..." value="{{ old('perihal') }}" required>
                    @error('perihal')
                        <div class="invalid-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">File Surat</label>
                    <input class="form-control @error('file') is-invalid @enderror" name="file" type="file"
                        id="file" required>
                    @error('file')
                        <div class="invalid-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-3 float-right">Ok</button>
                <button type="reset" class="btn btn-outline-primary mr-3 float-right">Batal</button>
            </form>
        </div>
    </div>
@endsection
