@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row mb-3">
            <div class="col-6">
                <h1 class="h3 mb-2 text-white">Kategori</h1>
            </div>
            <div class="col-6">
                <a href="/admin/kategori/create" class="btn btn-primary" style="float:right">
                    <i class="fa fa-plus-circle mr-1"></i>
                    <span>Tambah Data</span>
                </a>
            </div>
        </div>

        <!-- DataTales -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th class="w-25">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a class="btn btn-primary ml-1"
                                            href="/admin/kategori/{{ $category->id }}/edit">Edit</a>
                                        <form action="/admin/kategori/{{ $category->id }}" method="POST"
                                            class="d-inline-block">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
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
