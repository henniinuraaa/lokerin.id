<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            {{-- <input type="text" class="form-control" name="kondisi_barang" id="kondisi_barang" placeholder="Kondisi Barang" autofocus required> --}}
            {{-- <div id="emailHelp" class="form-text">Inpute harga disini</div> --}}
     
</body>
</html>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PENGAJUAN | LOKER</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container d-flex justify-content-center pt-5 mt-5">
        <div class="card" style="width: 40rem;">
            <div class="card-header text-center">

    <form action="pengajuan/post" method="post" enctype="multipart/form-data">
        @csrf
        <p class="text-center h1 fw-bold mb-3 mx-2 mx-md-3 mt-3">PENGAJUAN</p>
        <div class="mb-3">
            <input type="nama_lengkap" name="nama_lengkap" placeholder="Masukan nama lengkap anda" class="form-control" id="nama_lengkap">
        </div>
        <div class="mb-3">
            <input type="date" name="ttl" placeholder="Masukan Tempat Tanggal Lahir anda" class="form-control" id="ttl">
        </div>
        <div class="mb-3">
            <input type="alamat" name="alamat" placeholder="Masukan alamat anda" class="form-control" id="alamat">
        </div>
        <div class="mb-3">
            <input type="no_hp" name="no_hp" placeholder="Masukan no hp anda" class="form-control" id="no_hp">
        </div>
        <div class="mb-3">
            <input type="email" name="email" placeholder="Masukan email anda" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <input type="date" name="tahun_lulus" placeholder="Masukan tahun_lulus" class="form-control" id="tahun_lulus">
        </div>
    </div>

    <div class="mb-3">
        <input type="file" class="form-control" name="foto" id="foto" placeholder="foto" autofocus required>
    </div>
        <button type="submit" class="btn btn-danger">Simpan</button>   
</form>
