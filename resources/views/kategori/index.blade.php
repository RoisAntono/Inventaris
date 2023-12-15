@extends('layouts.main')

@section('content')
<!-- Page Heading -->
<div class="page-heading mb-1">
  <div class="page-title d-sm-flex align-items-center justify-content-between mb-4">
    <h3>{{$title}}</h3>
    <button class="btn icon icon-left btn-primary" data-bs-toggle="modal" data-bs-target="#tambahkategori">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
      </svg> Tambah Kategori
    </button>
  </div>
</div>
<!-- DataTales Example -->
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table" id="table1">
        <thead>
          <tr>
            <th>Kategori</th>
            <th>Tanggal</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($kategoris as $kategori)
          <tr>
            <td>{{$kategori->kategori}}</td>
            <td>{{$kategori->created_at}}</td>
            <td>
              <button class="btn icon icon-left btn-danger hapus" kategori_id="{{$kategori->id}}" kategori="{{$kategori->kategori}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                </svg> Hapus
              </button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="modal fade" id="tambahkategori" tabindex="-1" role="dialog" aria-labelledby="tambahkategoriTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahkategoriTitle">Tambah Kategori</h5>
      </div>
      <form class="form" action="/tambahkategori" method="POST" data-parsley-validate>
        @csrf
        <div class="modal-body">
          <div class="modal-body">
              <div class="form-group mandatory">
                <label for="first-name-column" class="form-label">Kategori</label>
                <input type="text" name="kategori" class="form-control" placeholder="Kategori" data-parsley-required="true"/>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-light-secondary" data-bs-dismiss="modal">
            <i class="bx bx-x d-block d-sm-none"></i>
            <span class="d-none d-sm-block">Batal</span>
          </button>
          <button type="submit" class="btn btn-primary ms-1">
            <i class="bx bx-check d-block d-sm-none"></i>
            <span class="d-none d-sm-block">Tambah</span>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('script')
<!-- Script Modal Hapus -->
<script>
  $('.hapus').click( function() {
    var kategori_id = $(this).attr('kategori_id');
    var kategori = $(this).attr('kategori');
    Swal.fire({
      title: "Kamu Yakin?",
      text: "Kamu akan menghapus kategori "+kategori+"!",
      icon: "warning",
      // showCancelButton: true,
      confirmButtonColor: "#3085d6",
      // cancelButtonColor: "#d33",
      confirmButtonText: "Ya, Hapus Saja!",
      // cancelButtonText: "Batal"
    })
    .then((result) => {
      if (result.isConfirmed) 
      {
        window.location = "/hapuskategori/"+kategori_id+""
        // Swal.fire({
        //   title: "Terhapus!",
        //   text: "Produk kamu berhasil dihapus.",
        //   icon: "success"
        // });
      }
      // else 
      // {
      //   Swal.fire({
      //     title: "Dibatalkan",
      //     text: "Kategori kamu tetap aman :)",
      //     icon: "error"
      //   });
      // }
    });
  });
  </script>
@endsection