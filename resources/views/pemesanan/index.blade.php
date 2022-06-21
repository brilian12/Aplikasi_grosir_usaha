@extends('layout.master')
@section('title', 'Data Pesanan')
@section('content')
<div class="container-fluid">

  <div class="row">
    <div class="col-md-6 col-xl-3 mb-4">
      <div class="card shadow border-start-primary py-2">
        <a class="text-decoration-none" href="{{url('pemesanan')}}">

          <div class="card-body">
            <div class="row align-items-center no-gutters">
              <div class="col me-1">
                <div class="text-uppercase text-primary fw-bold text-s mb-3"><span>Pesanan Masuk</span></div>
                <div class="text-dark fw-bold h5 mb-0"><span>2</span></div>
              </div>
              <div class="col-auto"></div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-6 col-xl-3 mb-4">
      <div class="card shadow border-start-primary py-2">
        <a class="text-decoration-none" href="{{url('prosespesanan')}}">

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
        <a class="text-decoration-none" href="{{url('siappesanan')}}">

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
        <a class="text-decoration-none" href="{{url('riwayatpesanan')}}">

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
@yield('content-masuk')

</div>
</div>
  @endsection
