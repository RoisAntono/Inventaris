@extends('layouts.main')

@section('content')
<!-- Page Heading -->
<div class="page-heading mb-1">
  <div class="page-title d-sm-flex align-items-center justify-content-between mb-4">
    <h3>{{$title}}</h3>
    <button class="btn icon icon-left btn-primary" data-bs-toggle="modal" data-bs-target="#tambahcheckout">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
      </svg> Checkout Produk
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
            <th>Pelanggan</th>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($checkouts as $co)
            <tr>
              <td>{{$co->pelanggan}}</td>
              <td>{{$co->produk->produk}}</td>
              <td>{{$co->jumlah}}</td>
              <td>
                <button class="btn icon icon-left btn-success detail" checkout_id="{{$co->id}}" pelanggan="{{$co->pelanggan}}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                  </svg> Detail
                </button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal Tambah Produk -->
<div class="modal fade" id="tambahcheckout" tabindex="-1" role="dialog" aria-labelledby="tambahcheckoutTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahcheckoutTitle">Tambah Kategori</h5>
      </div>
      <form class="form" action="/tambahcheckout" method="POST" data-parsley-validate>
        @csrf
        <div class="modal-body">
          <div class="form-group mandatory">
            <label class="form-label">Nama Pelanggan</label>
            <input type="text" name="pelanggan" class="form-control" placeholder="Nama Lengkap" data-parsley-required="true"/>
          </div>
          <div class="form-group mandatory" data-parsley-required="true">
            <label class="form-label">Produk</label>
              <select class="choices form-select" name="produk_id">
                @foreach ($produks as $produk)
                  @if(old('produk_id') == $produk->id)
                    <option value="{{ $produk->id }}" selected>{{ $produk->produk }}</option>
                  @else
                    <option value="{{ $produk->id }}">{{ $produk->produk }}</option>
                  @endif
                @endforeach
              </select>
          </div>
          <div class="form-group mandatory">
            <label class="form-label">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" data-parsley-required="true"/>
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