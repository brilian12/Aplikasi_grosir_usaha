<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<h3 class="text-center">EDIT DATA PERUSAHAAN</h3>
<form action="/updateperusahaan/{id}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="card-body">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Perusahaan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_perusahaan" value="{{$edit->nama_perusahaan}}"aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Edit Perusahaan</button>
</form>
</body>
</html>