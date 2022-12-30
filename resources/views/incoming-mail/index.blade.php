@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-6">
                <h1 class="h3 mb-2 text-white">Surat Masuk</h1>
            </div>
            <div class="col-6">
                <a href="/admin/surat-masuk/create" class="btn btn-primary" style="float:right">
                    <i class="fa fa-plus-circle mr-1"></i>
                    <span>Tambah Data</span>
                </a>
            </div>
        </div>

        {{-- Category --}}
        @include('components.surat-masuk.category')

        {{-- Modal --}}
        @include('components.surat-masuk.modal')

        <!-- DataTales -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-data-surat" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Penginput Surat</th>
                                <th>Tanggal Terima</th>
                                <th>Tanggal Surat</th>
                                <th>No Surat</th>
                                <th>Kategori Surat</th>
                                <th>Pengirim</th>
                                <th>Perihal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomingMails as $incomingMail)
                                <tr>
                                    <td>{{ $incomingMail->user->name }}</td>
                                    <td>{{ $incomingMail->tanggal_terima }}</td>
                                    <td>{{ $incomingMail->tanggal_surat }}</td>
                                    <td>{{ $incomingMail->no_surat }}</td>
                                    <td>{{ $incomingMail->category->name }}</td>
                                    <td>{{ $incomingMail->pengirim }}</td>
                                    <td>{{ $incomingMail->perihal }}</td>
                                    <td>
                                        <a class="btn btn-warning mb-2"
                                            href="/admin/surat-masuk/{{ $incomingMail->id }}/edit">Edit</a>
                                        <form action="/admin/surat-masuk/{{ $incomingMail->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger mb-2">Hapus</button>
                                        </form>
                                        <a class="btn btn-secondary" data-bs-toggle="modal"
                                            data-bs-target="#{{ $incomingMail->id }}">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
