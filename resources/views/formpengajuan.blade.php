<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM PENGAJUAN | LOKER</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

</head>
<body>
{{-- @section('konten') --}}
<div class="container mt-3 py-3s">
    <div class="card ">
    <div class="card-header text-center">
        <h2>Edit Pengajuan</h2>
    </div>
        <div class="card-body">
        <form action="{{ url('pengajuan/update/'.$pengajuans -> id) }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nama Lengkap</label>
                <input class="form-control" name="nama_lengkap" id="nama_lengkap" cols="30" rows="10" value="{{ $pengajuans-> nama_lengkap}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tanggal Lahir</label>
                <input class="form-control" name="ttl" id="ttl" cols="30" rows="10" value="{{ $pengajuans -> ttl}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">alamat pekerjaan</label>
                <input class="form-control" name="alamat" id="alamat" cols="30" rows="10" value="{{ $pengajuans -> alamat}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">No Hp</label>
                <input class="form-control" name="no_hp" id="no_hp" cols="30" rows="10" value="{{ $pengajuans -> no_hp}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">email</label>
                <input class="form-control" name="email" id="email" cols="30" rows="10" value="{{ $pengajuans -> email}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">tahun lulus</label>
                <input class="form-control" name="tahun_lulus" id="tahun_lulus" cols="30" rows="10" value="{{ $pengajuans -> tahun_lulus}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Foto</label>
                    <input class="form-control" type="file" name="foto" id="foto">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-danger">Save</button>
            </div>
       </div>
       </div>
  </div>
</body>
</html>