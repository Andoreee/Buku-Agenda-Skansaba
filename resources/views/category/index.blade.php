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
                                <th>All Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Undangan
                                    <a class="btn btn-primary float-right ml-1" href="/admin/kategori/{{ 2 }}/edit">Edit</a>
                                    <button class="btn btn-danger float-right">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
