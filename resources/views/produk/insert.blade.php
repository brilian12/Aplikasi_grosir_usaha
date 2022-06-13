
@extends('layout.master')
@section('title', 'Data Produk')
@section('content')

<div class="container-fluid">
  <h3 class="text-dark mb-1"></h3>
  <div class="row register-form">
    <div class="col-md-8 offset-md-2">
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <form action="/insertproduk" method="POST" enctype="multipart/form-data" class="custom-form">
      {{ csrf_field() }}
        <a class="text-decoration-none" href="{{url('/produk')}}">
          <i class="fas fa-arrow-left fs-4 d-lg-flex justify-content-lg-start"></i>
        </a>
        <h1>Tambah Data Produk</h1>
        <div class="row form-group">
          <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Nama Produk</label></div>
          <div class="col-sm-6 input-column">
            <input name="nama_produk" class="form-control" type="text">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Gambar Produk</label></div>
          <div class="col-sm-6 input-column">
            <input name="gambar" class="form-control form-control-sm" type="file">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Harga Produk</label></div>
          <div class="col-sm-6 input-column">
            <input name="harga_produk" class="form-control" type="number">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Kategori</label></div>
          <div class="col-sm-6 input-column">
            <select name="id_kategori" class="form-control" id="cars">
              @foreach ($kategori as $add)
              <option value={{ $add->id }}> {{ $add->nama_kategori }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Unit Produk</label></div>
          <div class="col-sm-6 input-column">
            <select name="id_unit" class="form-control" id="cars">
              @foreach ($produkUnit as $add)
              <option value={{ $add->id }}> {{ $add->unit }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-light submit-button" type="button">Tambah Produk</button>
      </form>
    </div>
  </div>
</div>
@endsection