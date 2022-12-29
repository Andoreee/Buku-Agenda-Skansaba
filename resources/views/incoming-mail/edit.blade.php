@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-white">Edit Surat Masuk</h1>
    <div class="card shadow mb-4">
        <form class="card-body">
            <div class="mb-3">
                <label for="Tanggal-Terima" class="form-label">Tanggal Terima</label>
                <input type="date" class="form-control" id="Tanggal-Terima" placeholder="mm/dd/yyyy" value="">
            </div>
            <div class="mb-3">
                <label for="Tanggal-Surat" class="form-label">Tanggal Surat</label>
                <input type="date" class="form-control" id="Tanggal-Surat" placeholder="mm/dd/yyyy" value="">
            </div>
            <div class="mb-3">
                <label for="No-Surat" class="form-label">No Surat</label>
                <input type="text" class="form-control" id="No-Surat" placeholder="No Surat..." value="">
            </div>
            <div class="mb-3">
                <label for="Kategori-Surat" class="form-label">Kategori Surat</label>
                <select class="form-select">
                    <option selected>---Pencarian Kategori Surat---</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Pengirim" class="form-label">Pengirim</label>
                <input type="text" class="form-control" id="Pengirim" placeholder="Pengirim..." value="">
            </div>
            <div class="mb-3">
                <label for="Perihal" class="form-label">Perihal</label>
                <input type="text" class="form-control" id="Perihal" placeholder="Perihal..." value="">
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">File Surat</label>
                <input class="form-control" type="file" id="file">
            </div>
            <div class="mb-3">
                <label for="Keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control" id="Keterangan" rows="5">Keterangan...</textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-3 float-right">Ok</button>
            <button type="reset" class="btn btn-outline-primary mr-3 float-right">Batal</button>
        </form>
    </div>
</div>
@endsection