@extends('layout.master')

@section('content')
<div class="container">
    <h2 class="text-center">Data Admin</h2>
    <a href="/tambahadmin" class="btn btn-success">Tambah Admin +</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th colspan="2" scope="col">Aksi</th>
    </tr>
  </thead>
  @php $i = 1 @endphp
  @foreach ($admin as $add)
  <tbody>
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $add->nama_admin }}</td>
      <td>{{ $add->username }}</td>
      <td><a href="{{ url('/editadmin/'.$add->id_kategori) }}" class="btn btn-primary">Edit</a></td>
      <td><a href="{{ url('/deleteadmin/'.$add->id_kategori) }}" class="btn btn-danger">Delete</a></td>
    </tr>
    
  @endforeach
  </tbody>
</table>
</div>
@endsection