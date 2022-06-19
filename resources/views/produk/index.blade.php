
@extends('layout.master')
@section('title', 'Data Produk')
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
      <a class="text-decoration-none" href="{{url('/tambahproduk')}}">
        <p class="text-primary m-0 fw-bold"></p><button class="btn btn-primary" type="button">Tambah Data +</button>
      </a>

    </div>
    <div class="card-body">
      <div class="row">
        <!-- <div class="col-md-6 text-nowrap">
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
              <th>Gambar Produk</th>
              <th>Nama Produk</th>
              <th>Harga</th>
              <th>Unit Produk</th>
              <th>Kategori</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          @php $i = 1 @endphp
          @foreach ($produk as $add)
            <tr>
              <th>{{ $i++ }}</th>
              <th><img class="rounded me-2" width="125" height="125" src="/storage/{{ $add->gambar }}" alt="" title="" ></th>
              <td>{{ $add->nama_produk }}</td>
              <td>{{ $add->harga_produk }}</td>
              <td>{{ $add->getUnit->unit }}</td>
              <td>{{$add->getKategori->nama_kategori}}</td>
              <td>
                <a href="{{ url('/editproduk/'.$add->id) }}"><i class="far fa-edit" data-bss-hover-animate="pulse" style="font-size: 25px;margin-right: 5px;margin-left: 5px;color: rgb(52,82,241);"></i></a>
                <a href="{{ url('/deleteproduk/'.$add->id) }}"><i class="far fa-trash-alt" data-bss-hover-animate="pulse" style="font-size: 25px;margin-right: 0px;margin-left: 5px;color: rgb(255,5,5);"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
         
        </table>
      </div>
      
      <div class="row">
        <div class="col-md-6 align-self-center">
          <!-- <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 3 to 10 of 27</p> -->
        </div>
        <div class="col-md-6">
          <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
            <ul class="pagination">
            <li>

            </li>
            </ul>
          </nav>
          
        </div>
        
      </div>
    </div>
  </div>
</div>
</div>
@endsection
