{{--  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container py-4">
        <div class="w-60 center border rounded px-4 py-4 mx-auto">
        <h1><center>Login</center></h1>
        @if($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $item )
                <li>{{ $item }}</li>
                @endforeach
            </ul>
    </div>
        @endif
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-success ">Login</button>
            </div>
        </form>
    </div> 
    </div>
</body>
</html>  --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <section class="vh-100 " style="background-color: #eee;">
        <div class="container h-100 d-flex flex-row align-items-center">
            <div class="card text-black py-5" style="border-radius: 25px;">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="assets/images/login_image.svg" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-5">
                <form action="" method="POST">
            @csrf
            <div class="card-body p-5 shadow-5 text-center">
                <h2 class="fw-bold mb-5">Login</h2>
                    <div class="mb-3">
                        <input type="email"  name="email" placeholder="Masukan Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" placeholder="Masukan Password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mt-3 mb-3 text-center">
                            Belum punya akun ? <a href="register" class="text-decoration-none text-danger">Register disini</a>
                    </div>
    <button type="submit" class="btn btn-danger">Simpan</button>
  </form>
</div>
    </section>
</body>
</html>
