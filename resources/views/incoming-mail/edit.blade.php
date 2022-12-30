@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-white">Edit Surat Masuk</h1>
        <div class="card shadow mb-4">
            <form action="/admin/surat-masuk/{{ $incomingMail->id }}" method="POST" class="card-body"
                enctype="multipart/form-data">
                @method('put')
                @csrf
                <input type="hidden" name="old_no_surat" value="{{ $outgoingMail->no_surat }}">
                <div class="mb-3">
                    <label for="Tanggal-Terima" class="form-label">Tanggal Terima</label>
                    <input type="date" class="form-control @error('tanggal_terima') is-invalid @enderror"
                        name="tanggal_terima" id="Tanggal-Terima" placeholder="mm/dd/yyyy"
                        value="{{ old('tanggal_terima', $incomingMail->tanggal_terima) }}" required>
                    @error('tanggal_terima')
                        <div class="invalid-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Tanggal-Surat" class="form-label">Tanggal Surat</label>
                    <input type="date" class="form-control @error('tanggal_surat') is-invalid @enderror"
                        name="tanggal_surat" id="Tanggal-Surat" placeholder="mm/dd/yyyy"
                        value="{{ old('tanggal_surat', $incomingMail->tanggal_surat) }}" required>
                    @error('tanggal_surat')
                        <div class="invalid-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="No-Surat" class="form-label">No Surat</label>
                    <input type="text" class="form-control @error('no_surat') is-invalid @enderror" name="no_surat"
                        id="No-Surat" placeholder="No Surat..." value="{{ old('no_surat', $incomingMail->no_surat) }}"
                        required>
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
                            @if (old('category_id', $incomingMail->category_id) == $category->id)
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
                    <label for="Pengirim" class="form-label">Pengirim</label>
                    <input type="text" class="form-control @error('pengirim') is-invalid @enderror" name="pengirim"
                        id="Pengirim" placeholder="Pengirim..." value="{{ old('pengirim', $incomingMail->pengirim) }}"
                        required>
                    @error('pengirim')
                        <div class="invalid-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Perihal" class="form-label">Perihal</label>
                    <input type="text" class="form-control @error('perihal') is-invalid @enderror" name="perihal"
                        id="Perihal" placeholder="Perihal..." value="{{ old('perihal', $incomingMail->perihal) }}"
                        required>
                    @error('perihal')
                        <div class="invalid-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">File Surat</label>
                    <br>
                    <img src="{{ asset('storage/' . $incomingMail->file) }}" alt="Image" class="img-fluid w-25">
                    <br>
                    <div class="ms-3">
                        <input class="form-check-input" name="use_file" value="true" type="checkbox" id="use_file"
                            checked>
                        <label class="form-check-label" for="use_file">
                            Gunakan Foto Diatas
                        </label>
                    </div>
                    <input class="form-control @error('file') is-invalid @enderror" name="file" type="file"
                        id="file">
                    @error('file')
                        <div class="invalid-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Keterangan" class="form-label">Keterangan</label>
                    <textarea class="form-control @error('keterangan') is-invalid @enderror id="Keterangan" name="keterangan"
                        rows="5">{{ old('keterangan', $incomingMail->keterangan) }}</textarea>
                    @error('keterangan')
                        <div class="invalid-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-3 float-right">Ok</button>
                <a href="/admin/surat-masuk" class="btn btn-outline-primary mr-3 float-right">Batal</a>
            </form>
        </div>
    </div>
@endsection
