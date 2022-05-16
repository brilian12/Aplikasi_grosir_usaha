

@extends('layout.master')
@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-1"></h3>
    <div class="row register-form" >
    <div class="col-md-8 offset-md-2">
        <form  action="/updatedata/{id}" method="POST" enctype="multipart/form-data" class="custom-form">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $edit->id }}">
        <a class="text-decoration-none" href="{{url('/member')}}">
            <i class="fas fa-arrow-left fs-4 d-lg-flex justify-content-lg-start"></i>
        </a>
            <h1>Edit Data Member</h1>
            <div class="row form-group">
                <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Nama Lengkap</label></div>
                <div class="col-sm-6 input-column"><input name="nama_member" value="{{ $edit->nama_member }}" class="form-control" type="text" /></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">No. Telp</label></div>
                <div class="col-sm-6 input-column"><input name="no_telp" value="{{ $edit->no_telp }}" class="form-control" type="number" /></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Password</label></div>
                <div class="col-sm-6 input-column"><input name="pass_member" value="{{ $edit->pass_member }}" class="form-control" type="password" /></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Alamat</label></div>
                <div class="col-sm-6 input-column"><input name="alamat" value="{{ $edit->alamat }}" class="form-control" type="text" /></div>
            </div>
        
            <button class="btn btn-light submit-button" type="submit">Edit</button>
        </form>
    </div>
</div>
</div>
@endsection