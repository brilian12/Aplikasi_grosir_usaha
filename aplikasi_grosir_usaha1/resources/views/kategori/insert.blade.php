<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<form action="/tambahkategori" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="card-body">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kategori" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-success">Tambah Kategori +</button>
</form>  
</body>
</html>