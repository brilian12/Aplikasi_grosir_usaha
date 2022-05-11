<h1>Data Produk</h1>
<a href="/tambahproduk" class="btn btn-primary">Tambah Produk</a>
@extends('layout.master')

@section('content')
<div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Perusahaan</th>
      <th scope="col">Tanggal Masuk</th>
      <th colspan="2" scope="col">Aksi</th>
    </tr>
  </thead>
  @php $i = 1 @endphp
  @foreach ($produk as $add)
  <tbody>
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td><img src="/storage/{{ $add->gambar }}" alt="" width="200px"></td>
      <td>{{ $add->created_at->format('D M Y') }}</td>
      <td><a href="{{ url('/editproduk/'.$add->id) }}" class="btn btn-primary">Edit</a></td>
      <td><a href="{{ url('/deleteproduk/'.$add->id) }}" class="btn btn-danger">Delete</a></td>
    </tr>
    
  @endforeach
  </tbody>
</table>
</div>
@endsection