@extends('layouts.main')

@section('content')
<!-- Page Heading -->
<div class="page-heading mb-1">
  <div class="page-title d-sm-flex align-items-center justify-content-between mb-4">
    <h3>{{$title}}</h3>
    <a href="/produk/create" class="btn icon icon-left btn-primary">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
      </svg> Tambah Produk
    </a>
  </div>
</div>

<!-- DataTales Example -->
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table" id="table1">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>City</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Graiden</td>
            <td>vehicula.aliquet@semconsequat.co.uk</td>
            <td>076 4820 8838</td>
            <td>Offenburg</td>
            <td>
              <span class="badge bg-success">Active</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection