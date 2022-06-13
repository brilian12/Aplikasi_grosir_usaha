

@extends('layout.master')
@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-1"></h3>
    <div class="row register-form">
    <div class="col-md-8 offset-md-2">
        <form action="/insertadmin" method="POST" enctype="multipart/form-data" class="custom-form">
        {{ csrf_field() }}
        <a class="text-decoration-none" href="{{url('/admin')}}">
            <i class="fas fa-arrow-left fs-4 d-lg-flex justify-content-lg-start"></i>
        </a>
            <h1>Tambah Data Admin</h1>
            <div class="row form-group">
                <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Nama Depan</label></div>
                <div class="col-sm-6 input-column">
                  <input name="first_name" class="form-control" type="text">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Nama Belakang</label></div>
                <div class="col-sm-6 input-column">
                  <input name="last_name" class="form-control" type="text">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Email</label></div>
                <div class="col-sm-6 input-column">
                  <input name="email" class="form-control" type="text">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 text-start label-column"><label class="col-form-label" for="name-input-field">Password</label></div>
                <div class="col-sm-6 input-column">
                  <input name="password" class="form-control" type="password">
                </div>
            </div>
            <button type="submit" class="btn btn-light submit-button" type="button">Tambah Admin</button>
        </form>
    </div>
</div>
</div>
@endsection

