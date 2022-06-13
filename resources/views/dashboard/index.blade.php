@extends('layout.master')
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid">
  <h3 class="text-dark mb-4">Pesanan</h3>

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

    <h3 class="text-dark mb-4">Data</h3>
    <div class="row">
      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow border-start-primary py-2">
          <a class="text-decoration-none" href="{{url('produk')}}">

            <div class="card-body">
              <div class="row align-items-center no-gutters">
                <div class="col me-2">
                  <div class="text-uppercase text-primary fw-bold text-s mb-1"><span>Data Produk</span></div>
                  <div class="text-dark fw-bold h5 mb-0"><span>{{$produk}}</span></div>
                </div>
                <!-- <div class="col-auto"><i class="fas fa-table fa-2x text-gray-300"></i></div> -->
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow border-start-primary py-2">
          <a class="text-decoration-none" href="{{url('/member')}}">
            <div class="card-body">
              <div class="row align-items-center no-gutters">
                <div class="col me-2">
                  <div class="text-uppercase text-success fw-bold text-s mb-1"><span>Data Member</span></div>
                  <div class="text-dark fw-bold h5 mb-0"><span>{{$member}}</span></div>
                </div>
                <!-- <div class="col-auto"><i class="fas fa-table fa-2x text-gray-300"></i></div> -->
              </div>
            </div>
          </a>
        </div>
      </div>


      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow border-start-success py-2">
          <a class="text-decoration-none" href="{{url('/perusahaan')}}">
            <div class="card-body">
              <div class="row align-items-center no-gutters">
                <div class="col me-2">
                  <div class="text-uppercase text-info fw-bold text-s mb-1"><span>Data Unit Produk</span></div>
                  <div class="text-dark fw-bold h5 mb-0"><span>{{$produkUnit}}</span></div>
                </div>
                <!-- <div class="col-auto"><i class="fas fa-table fa-2x text-gray-300"></i></div> -->
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow border-start-warning py-2">
          <a class="text-decoration-none" href="{{url('/kategori')}}">
            <div class="card-body">
              <div class="row align-items-center no-gutters">
                <div class="col me-2">
                  <div class="text-uppercase text-warning fw-bold text-sm mb-1"><span>Data Kategori </span></div>
                  <div class="text-dark fw-bold h5 mb-0"><span>{{ $kategori }}</span></div>
                </div>
                <!-- <div class="col-auto"><i class="fas fa-table fa-2x text-gray-300"></i></div> -->
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow border-start-primary py-2">
          <a class="text-decoration-none" href="kategoriProduk.php">
            <div class="card-body">
              <div class="row align-items-center no-gutters">
                <div class="col me-2">
                  <div class="text-uppercase text-primary fw-bold text-s mb-1"><span>Data Transaksi</span></div>
                  <div class="text-dark fw-bold h5 mb-0"><span>-</span></div>
                </div>
                <div class="col-auto"><i class="fas fa-table fa-2x text-gray-300"></i></div>
              </div>
            </div>
          </a>
        </div>
      </div> -->
      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow border-start-primary py-2">
          <a class="text-decoration-none" href="{{url('/admin')}}">
            <div class="card-body">
              <div class="row align-items-center no-gutters">
                <div class="col me-2">
                  <div class="text-uppercase text-secondary fw-bold text-s mb-1"><span>Data Admin</span></div>
                  <div class="text-dark fw-bold h5 mb-0"><span>{{$admin}}</span></div>
                </div>
                <!-- <div class="col-auto"><i class="fas fa-table fa-2x text-gray-300"></i></div> -->
              </div>
            </div>
          </a>
        </div>
      </div>


    </div>

  </div>
</div>
@endsection