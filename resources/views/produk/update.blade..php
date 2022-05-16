<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/updateproduk" method="POST" enctype="multipart/form-data">
@csrf
<div class="card-body">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_produk" aria-describedby="emailHelp" value="{{$edit->nama_produk}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Gambar</label>
    <input type="file" class="form-control" id="exampleInputEmail1" name="gambar" aria-describedby="emailHelp" value="{{$edit->gambar}}>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Satuan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="satuan_produk" aria-describedby="emailHelp" value="{{$edit->satuan_produk}}>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="harga_produk" value="{{$edit->harga_produk}}>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Stok Produk</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="stok_produk" aria-describedby="emailHelp" value="{{$edit->stok_produk}}>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kategori</label>
    
   
    <select name="id_kategori" id="cars">
    @foreach ($kategori as $add)
    <option value={{ $edit->id }}> {{ $edit->nama_kategori }}</option>
    @endforeach
</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Expired</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="expired" aria-describedby="emailHelp" value="{{$edit->expired}}>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Perusahaan</label>
    <select name="id_perusahaan" id="id_perusahaan">
    @foreach ($perusahaan as $add)
    <option value={{ $edit->id }}> {{ $edit->nama_perusahaan }}</option>
    @endforeach
</select>
  </div>
  <button type="submit" class="btn btn-primary">Edit Produk</button>
</form>  
</body>
</html>