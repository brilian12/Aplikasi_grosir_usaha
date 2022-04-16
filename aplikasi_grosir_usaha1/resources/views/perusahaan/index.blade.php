@extends('layout.master')

@section('content')
<div class="container">
    <h2 class="text-center">Data Perusahaan</h2>
    <a href="/tambahperusahaan" class="btn btn-success">Tambah Perusahaan +</a>
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
  @foreach ($perusahaan as $add)
  <tbody>
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $add->nama_perusahaan }}</td>
      <td>{{ $add->created_at->format('D M Y') }}</td>
      <td><a href="{{ url('/editperusahaan/'.$add->id) }}" class="btn btn-primary">Edit</a></td>
      <td><a href="{{ url('/deleteperusahaan/'.$add->id) }}" class="btn btn-danger">Delete</a></td>
    </tr>
    
  @endforeach
  </tbody>
</table>
</div>
@endsection