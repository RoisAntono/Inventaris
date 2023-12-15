@extends('layouts.main')

@section('content')
<!-- Page Heading -->
<div class="page-heading mb-1">
  <div class="page-title d-sm-flex align-items-center justify-content-between mb-4">
    <h3>{{$title}}</h3>
    <button class="btn icon icon-left btn-primary" data-bs-toggle="modal" data-bs-target="#tambahproduk">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
      </svg> Tambah Produk
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
            <th>Produk</th>
            <th>Kategori</th>
            <th>Stock</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($produks as $produk)
            <tr>
              <td>{{$produk->produk}}</td>
              <td>{{$produk->kategori->kategori}}</td>
              <td>{{$produk->stock}}</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal Tambah Produk -->
<div class="modal fade" id="tambahproduk" tabindex="-1" role="dialog" aria-labelledby="tambahprodukTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahprodukTitle">Tambah Kategori</h5>
      </div>
      <form class="form" action="/tambahproduk" method="POST" data-parsley-validate>
        @csrf
        <div class="modal-body">
          <div class="form-group mandatory">
            <label class="form-label">Produk</label>
            <input type="text" name="produk" class="form-control" placeholder="Produk" data-parsley-required="true"/>
          </div>
          <div class="form-group mandatory" data-parsley-required="true">
            <label class="form-label">Kategori</label>
              <select class="choices form-select" name="kategori_id">
                @foreach ($kategoris as $kategori)
                  @if(old('kategori_id') == $kategori->id)
                    <option value="{{ $kategori->id }}" selected>{{ $kategori->kategori }}</option>
                  @else
                    <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                  @endif
                @endforeach
              </select>
          </div>
          <div class="form-group mandatory">
            <label class="form-label">Stock</label>
            <input type="number" name="stock" class="form-control" placeholder="Stock" data-parsley-required="true"/>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
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