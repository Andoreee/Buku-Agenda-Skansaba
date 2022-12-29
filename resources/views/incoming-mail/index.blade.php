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
    <p class="text-white mb-0">Pencarian Kategori Surat</p>
    <select class="form-select mb-3" disabled>
        <option selected>---Pencarian Kategori Surat---</option>
    </select>
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
                        <tr>
                            <td>Admin</td>
                            <td>22 Oct 2022</td>
                            <td>19 Oct 2022</td>
                            <td>001/SI/UBL/FIK/XI/2022</td>
                            <td>Pemberitahuan</td>
                            <td>SMK N 1 BANTUL</td>
                            <td>Undangan Rapat Pleno</td>
                            <td>
                                <a class="btn btn-warning mb-2" href="/admin/surat-masuk/{{ 2 }}/edit">Edit</a>
                                <a class="btn btn-danger mb-2">Hapus</a>
                                <a class="btn btn-secondary" href="/admin/surat-masuk/{{ 2 }}">Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  <!-- Detail -->
  @isset($detail)
   <div class="modal fade" id="Detail-Modal" tabindex="-1" aria-labelledby="Detail-Modal-Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        {{-- <div class="modal-header">
          <h1 class="modal-title fs-5" id="Detail-Modal-Label">{{ $detail }}</h1>
        </div> --}}
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="float:right"></button>
          <div class="row">
                <div class="col-xl-6 text-center">
                    <img src="https://i0.wp.com/www.suratresmi.net/wp-content/uploads/2018/10/12.-Contoh-Surat-Masuk-Kantor.jpg?w=638&ssl=1" alt="IMAGE" class="file-image">
                </div>
                <div class="col-xl-6">
                    <table class="text-black">
                        <td>
                            <p>Penginput Surat </p>
                            <p>Tanggal Terima </p>
                            <p>Tanggal Surat </p>
                            <p>No Surat </p>
                            <p>Kategori Surat </p>
                            <p>Pengirim </p>
                            <p>Perihal </p>
                            <p>Kategori </p>
                        </td>
                        <td>
                            <p>: Admin</p>
                            <p>: 22 Oct 2022</p>
                            <p>: 19 Oct 2022</p>
                            <p>: 001/SI/UBL/FIK/XI/2022</p>
                            <p>: Pemberitahuan</p>
                            <p>: SMK N 1 BANTUL</p>
                            <p>: Undangan Rapat Pleno</p>
                            <p>: Harap Semua Guru</p>
                        </td>
                    </table>
                </div>
            </div>
         
        </div>
      </div>
    </div>
  </div>
  <script src="/js/detail-modal.js"></script>
  @endisset

  {{-- End Detail --}}
</div>
<!-- /.container-fluid -->

</div>
@endsection
