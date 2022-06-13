

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login admin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="login-clean" style="padding: max(10%) ;background: url(&quot;assets/img/cipto%20gudang%20rabat.png&quot;) center / cover no-repeat, rgba(0,0,0,0);">
        <form method="post" action="{{ route('login') }}" style="padding: 43px;background: rgba(255,255,255,0.94);">
            @csrf
            <h1 style="text-align: center;">Grosir Usaha</h1>
            <div class="illustration"></div>
            <div class="mb-3">
                <input class="form-control" type="email" name="email" placeholder="Email">
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>
            <div class="mb-3">
                <input class="form-control" type="password" name="password" placeholder="Password">
                <span class="text-danger">{{ $errors->first('password') }}</span>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary d-block w-100" type="submit" style="background: rgb(32,39,103);">Log In</button>
            </div>
            <!-- <a class="forgot" href=" {{ route('register.form') }}">Registrasi</a>
            <a class="forgot" href="#">Forgot your email password?</a> -->
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <footer class="bg-white sticky-footer">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>Copyright © Brand 2022</span></div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>