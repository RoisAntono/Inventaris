@extends('layouts.main')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">{{$title}}</h1>
  <a href="/kategori/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Kategori</a>
</div>
    
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                  </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Kategori</th>
                  <th>Tanggal</th>
                  <th>Action</th>
                </tr>
            </tfoot>
          </table>
      </div>
  </div>
</div>
@endsection