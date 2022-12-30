@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-6">
                <h1 class="h3 mb-2 text-white">Surat Keluar</h1>
            </div>
            <div class="col-6">
                <a href="/admin/surat-keluar/create" class="btn btn-primary" style="float:right">
                    <i class="fa fa-plus-circle mr-1"></i>
                    <span>Tambah Data</span>
                </a>
            </div>
        </div>

        {{-- Category --}}
        @include('components.surat-keluar.category')

        {{-- Modal --}}
        @include('components.surat-keluar.modal')

        <!-- DataTales -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-data-surat" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Penginput Surat</th>
                                <th>Tanggal Surat</th>
                                <th>No Surat</th>
                                <th>Kategori Surat</th>
                                <th>Tujuan</th>
                                <th>Perihal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($outgoingMails as $outgoingMail)
                                <tr>
                                    <td>{{ $outgoingMail->user->name }}</td>
                                    <td>{{ $outgoingMail->tanggal_surat }}</td>
                                    <td>{{ $outgoingMail->no_surat }}</td>
                                    <td>{{ $outgoingMail->category->name }}</td>
                                    <td>{{ $outgoingMail->pengirim }}</td>
                                    <td>{{ $outgoingMail->perihal }}</td>
                                    <td>
                                        <a class="btn btn-warning mb-2"
                                            href="/admin/surat-keluar/{{ $outgoingMail->id }}/edit">Edit</a>
                                        <form action="/admin/surat-keluar/{{ $outgoingMail->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger mb-2">Hapus</button>
                                        </form>
                                        <a class="btn btn-secondary" data-bs-toggle="modal"
                                            data-bs-target="#{{ $outgoingMail->id }}">Detail</a>
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
