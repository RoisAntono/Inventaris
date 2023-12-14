@extends('layouts.main')

@section('content')
<!-- Page Heading -->
<div class="page-heading mb-1">
  <div class="page-title">
      <div class="row">
          <div class="col-12 col-md-6 order-md-1 order-last">
              <h3>{{$title}}</h3>
              <p class="text-subtitle text-muted">Navbar will appear on the top of the page.</p>
          </div>
          <div class="col-12 col-md-6 order-md-2 order-first">
              <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Layout Vertical Navbar</li>
                  </ol>
              </nav>
          </div>
      </div>
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