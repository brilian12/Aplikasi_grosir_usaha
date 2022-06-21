@extends('layout.master')
@section('title', 'Kategori Produk')
@section('content')
<div class="container-fluid">
  <div>
    @if(session()->has('message'))

    <div class="alert alert-success alert-dismissible" id="alert">
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      {{session()->get('message')}}

    </div>

    @endif
  </div>
  <div class="card shadow">
    <div class="card-header py-3">
      <a class="text-decoration-none" href="{{url('/insertkategori')}}">
        <p class="text-primary m-0 fw-bold"></p><button class="btn btn-primary" type="button">Tambah Data +</button>
      </a>

    </div>
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
          <form class="form" method="get" action="">

            <div class="text-md-end dataTables_filter" id="dataTable_filter">
              <label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search">
              </label>
            </div>
          </form>
        </div>
      </div> -->
      <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
        <table class="table my-0" id="dataTable">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama kategori</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php $i = 1 @endphp
            @foreach ($kategori_produk as $add)
            <tr>
              <th>{{ $i++ }}</th>
              <td>{{ $add-> nama_kategori}}</td>
              <td>
                <a href="{{ url('/editkategori/'.$add->id) }}"><i class="far fa-edit" data-bss-hover-animate="pulse" style="font-size: 25px;margin-right: 5px;margin-left: 5px;color: rgb(52,82,241);"></i></a>
                <a href="{{ url('/deletekategori/'.$add->id) }}"><i class="far fa-trash-alt" data-bss-hover-animate="pulse" style="font-size: 25px;margin-right: 0px;margin-left: 5px;color: rgb(255,5,5);"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>

        </table>
      </div>

      <div class="row">
        <div class="col-md-6 align-self-center">
          <!-- <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p> -->
        </div>
        <div class="col-md-6">
          <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
            <ul class="pagination">
              <li>{{ $kategori_produk->links() }}</li>
            </ul>
          </nav>

        </div>

      </div>
    </div>
  </div>
</div>
</div>
@endsection