

@extends('layout.master')
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
      <form action="/updateproduk" method="POST" enctype="multipart/form-data" class="custom-form">
      {{ csrf_field() }}
        <a class="text-decoration-none" href="{{url('/produk')}}">
          <i class="fas fa-arrow-left fs-4 d-lg-flex justify-content-lg-start"></i>
        </a>
        <h1>Edit Data Produk</h1>
        <div class="row form-group">
          <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Nama Produk</label></div>
          <div class="col-sm-6 input-column">
            <input name="nama_produk" value="{{$edit->nama_produk}}" class="form-control" type="text">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Gambar Produk</label></div>
          <div class="col-sm-6 input-column">
            <input name="gambar" value="{{$edit->gambar}}" class="form-control form-control-sm" type="file">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Satuan Produk</label></div>
          <div class="col-sm-6 input-column">
            <input name="satuan_produk" value="{{$edit->satuan_produk}}" class="form-control" type="text">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Harga Produk</label></div>
          <div class="col-sm-6 input-column">
            <input name="harga_produk" value="{{$edit->satuan_produk}}" class="form-control" type="number">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Stok Produk</label></div>
          <div class="col-sm-6 input-column">
            <input name="stok_produk" value="{{$edit->stok_produk}}" class="form-control" type="number">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Kategori</label></div>
          <div class="col-sm-6 input-column">
            <select name="id_kategori" class="form-control" id="cars">
              @foreach ($kategori as $add)
              <option value="{{ $edit->id }}> {{ $edit->nama_kategori }}"</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Expired</label></div>
          <div class="col-sm-6 input-column">
            <input name="expired" value="{{$edit->expired}}" class="form-control" type="date">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Perusahaan</label></div>
          <div class="col-sm-6 input-column">
            <select name="id_perusahaan" class="form-control" id="id_perusahaan">
              @foreach ($perusahaan as $add)
              <option value="{{ $edit->id }}> {{ $edit->nama_perusahaan }}"</option>
              @endforeach
            </select>
          </div>
        </div>

        <button type="submit" class="btn btn-light submit-button" type="button">Edit Produk</button>
      </form>
    </div>
  </div>
</div>
@endsection