@extends('layout.master')

@section('content')
<div class="container">
    <h2>Data Member</h2>
    <a href="/tambahmember" class="btn btn-success">Tambah Data Member +</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Masuk</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">Alamat</th>
      <th scope="col" colspan="2">Aksi</th>
    </tr>
  </thead>
  @php $i = 1 @endphp
  @foreach ($member as $add)
  <tbody>
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $add->created_at->format('D M Y') }}</td>
      <td>{{ $add->nama_member }}</td>
      <td>{{ $add->no_telp }}</td>
      <td>{{ $add->alamat }}</td>
      <td><a href="{{ url('/editdata/'.$add->id) }}" class="btn btn-primary">Edit</a></td>
      <td><a href="{{ url('/deletedata/'.$add->id) }}" class="btn btn-danger">Delete</a></td>
    </tr>
    
  @endforeach
  </tbody>
</table>
</div>
@endsection