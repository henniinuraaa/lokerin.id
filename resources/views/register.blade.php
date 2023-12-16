<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTER | LOKER</title>
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
                <form action="register" method="POST" class="mx-1 mx-md-4">
            @csrf
            <div class="card-body p-5 shadow-5 text-center">
                <h2 class="fw-bold mb-5">Register</h2>
                    <div class="mb-3">
                        <input type="text" name="nisn" placeholder="Masukan nisn" class="form-control" id="nisn">
                    </div>
                    <div class="mb-3">
                        <input type="name"  name="name" placeholder="Masukan nama" class="form-control" id="exampleInputEmail1" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <input type="email"  name="email" placeholder="Masukan Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" placeholder="Masukan Password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <input type="tahun_lulus" name="tahun_lulus" placeholder="Masukan tahun_lulus" class="form-control" id="tahun_lulus">
                    </div>
                    <div class="mb-3">
                        <input type="file" name="foto" placeholder="Masukan foto" class="form-control" id="foto">
                    </div>
    <button type="submit" class="btn btn-danger">Simpan</button>
  </form>
</div>
    </section>
</body>
</html>
