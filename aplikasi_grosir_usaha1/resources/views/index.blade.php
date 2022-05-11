<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<h3 class="text-center">DASHBOARD</h3>
<a href="/kategori" class="btn btn-primary">Kategori Produk</a>
<a href="/member" class="btn btn-secondary">Member</a>
<a href="/admin" class="btn btn-success">Admin</a>
<a href="/perusahaan" class="btn btn-danger">Perusahaan</a>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit" class="btn btn-secondary">Logout</button>
</form>
</body>
</html>
