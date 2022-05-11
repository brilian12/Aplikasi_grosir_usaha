<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login_admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
</head>

<body>
    <section class="login-clean" >
        <form method="post" action="{{ route('register') }}" style="padding: 56px;background:  rgba(255,255,255,0.94);">
            @csrf
            <h1 style="text-align: center;">Grosir Usaha</h1>
            <div class="illustration"></div>
            <div class="mb-3">
                <input class="form-control" type="text" name="name" placeholder="Name">
                <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
            <div class="mb-3">
                <input class="form-control" type="email" name="email" placeholder="Email">
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>
            <div class="mb-3">
                <input class="form-control" type="password" name="password" placeholder="Password">
                <span class="text-danger">{{ $errors->first('password') }}</span>
            </div>
            <div class="mb-3">
                <input class="form-control" type="password" name="confirmation_password" placeholder="Confirmation Password">
                <span class="text-danger">{{ $errors->first('confirmation_password') }}</span>
            </div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: rgb(32,39,103);">Daftar</button></div>
        </form>
    </section>
</body>

</html>
