@extends('layout.master')

@section('content')
<div class="container">
    <h2 class="text-center">Data Kategori</h2>
    <a href="/insertkategori" class="btn btn-success">Tambah Kategori +</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kategori</th>
      <th colspan="2"scope="col">Aksi</th>
    </tr>
  </thead>
  @php $i = 1 @endphp
  @foreach ($kategori_produk as $add)
  <tbody>
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $add-> nama_kategori}}</td>
      <td><a href="{{ url('/editkategori/'.$add->id) }}" class="btn btn-primary">Edit</a></td>
      <td><a href="{{ url('/deletekategori/'.$add->id) }}" class="btn btn-danger">Delete</a></td>
    </tr>
    
  @endforeach
  </tbody>
</table>
</div>
@endsection