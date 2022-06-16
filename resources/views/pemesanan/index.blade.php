@extends('layout.master')
@section('title', 'Data Pesanan')
@section('content')
<div class="container-fluid">

  <div class="row">
    <div class="col-md-6 col-xl-3 mb-4">
      <div class="card shadow border-start-primary py-2">
        <a class="text-decoration-none" href="{{url('produk')}}">

          <div class="card-body">
            <div class="row align-items-center no-gutters">
              <div class="col me-1">
                <div class="text-uppercase text-primary fw-bold text-s mb-3"><span>Pesanan Masuk</span></div>
                <div class="text-dark fw-bold h5 mb-0"><span>0</span></div>
              </div>
              <div class="col-auto"></div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-6 col-xl-3 mb-4">
      <div class="card shadow border-start-primary py-2">
        <a class="text-decoration-none" href="{{url('produk')}}">

          <div class="card-body">
            <div class="row align-items-center no-gutters">
              <div class="col me-1">
                <div class="text-uppercase text-primary fw-bold text-s mb-3"><span>Pesanan diproses</span></div>
                <div class="text-dark fw-bold h5 mb-0"><span>0</span></div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>


    <div class="col-md-6 col-xl-3 mb-4">
      <div class="card shadow border-start-primary py-2">
        <a class="text-decoration-none" href="{{url('produk')}}">

          <div class="card-body">
            <div class="row align-items-center no-gutters">
              <div class="col me-1">
                <div class="text-uppercase text-primary fw-bold text-s mb-3"><span>Pesanan Siap Diambil</span></div>
                <div class="text-dark fw-bold h5 mb-0"><span>0</span></div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-6 col-xl-3 mb-4">
      <div class="card shadow border-start-primary py-2">
        <a class="text-decoration-none" href="{{url('produk')}}">

          <div class="card-body">
            <div class="row align-items-center no-gutters">
              <div class="col me-1">
                <div class="text-uppercase text-primary fw-bold text-s mb-3"><span>Riwayat Pemesanan</span></div>
                <div class="text-dark fw-bold h5 mb-0"><span>0</span></div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

  </div>

  <div class="card shadow">
    <div class="card-body">
      <!-- <div class="row">
        <div class="col-md-6 text-nowrap">
          <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                <option value="10" selected="">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select>&nbsp;</label></div>
        </div>
        <div class="col-md-6">
          <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
        </div>
      </div> -->
      <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
        <table class="table my-0" id="dataTable">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Pemesan</th>
              <th>Status Pemesanan</th>
              <th>Detail Pesanan</th>
              <th>Aksi</th>

            </tr>
          </thead>
          <tbody>
            @php $i = 1 @endphp
            @foreach ($pesanan as $add)
            <tr>
              <th>{{ $i++ }}</th>
              <td>{{ $add->getUser->first_name }} {{ $add->getUser->last_name}}</td>
              <td>{{ $add->getStatus->status_name }}</td>
              <td>
                <a href="#"><button type="button" class="btn btn-outline-info">Detail</button></a>
              </td>
              <td>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Pesanan Masuk</option>
                  <option value="2">Pesanan Diproses</option>
                  <option value="3">Pesanan Siap</option>
                  <option value="4">Pesanan Selesai</option>
                </select>
              </td>
            </tr>
            @endforeach
          </tbody>

        </table>
      </div>

      <div class="row">
        <div class="col-md-6 align-self-center">
          <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
        </div>
        <div class="col-md-6">
          <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
            <ul class="pagination">
            <li>{{ $pesanan->links() }}</li>
            </ul>
          </nav>

        </div>

      </div>
    </div>
  </div>
</div>
</div>
  @endsection
