
@extends('layout.master')
@section('content')
<div class="container-fluid">
  <h3 class="text-dark mb-4">Data Pemesanan</h3>

    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-primary py-2">
                <a class="text-decoration-none" href="{{url('produk')}}">
                
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col me-1">
                                <div class="text-uppercase text-primary fw-bold text-s mb-3"><span>Pesanan Masuk</span></div>
                                <div class="text-dark fw-bold h5 mb-0"><span>10</span></div>
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
                                <div class="text-dark fw-bold h5 mb-0"><span>10</span></div>
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
                                <div class="text-dark fw-bold h5 mb-0"><span>10</span></div>
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
                                <div class="text-dark fw-bold h5 mb-0"><span>10</span></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
  <div class="card shadow">
    <div class="card-header py-3">
      <a class="text-decoration-none" href="#">
        <p class="text-primary m-0 fw-bold"></p><button class="btn btn-primary" type="button">Tambah Data +</button>
      </a>

    </div>
    <div class="card-body">
      <div class="row">
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
      </div>
      <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
        <table class="table my-0" id="dataTable">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Pemesan</th>
              <th>Produk</th>
              <th>Waktu Pesan</th>
              <th>Jumlah Pesanan</th>
              <th>Status Pemesanan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          @php $i = 1 @endphp
          @foreach ($pesanan as $add)
            <tr>
              <th>{{ $i++ }}</th>
              <td>{{ $add-> id_member }}</td>
              <td>{{ $add-> id_produk }}</td>
              <td>{{ $add-> waktu_pesanan }}</td>
              <td>{{ $add-> jumlah_pesanan }}</td>
              <td>{{ $add-> status_pesanan }}</td>
              <td>
                <a href="{{ url('/editperusahaan/'.$add->id) }}"><i class="far fa-edit" data-bss-hover-animate="pulse" style="font-size: 25px;margin-right: 5px;margin-left: 5px;color: rgb(52,82,241);"></i></a>
                <a href="{{ url('/deleteperusahaan/'.$add->id) }}"><i class="far fa-trash-alt" data-bss-hover-animate="pulse" style="font-size: 25px;margin-right: 0px;margin-left: 5px;color: rgb(255,5,5);"></i></a>
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
              <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
            </ul>
          </nav>
          
        </div>
        
      </div>
    </div>
  </div>
</div>
</div>
@endsection
