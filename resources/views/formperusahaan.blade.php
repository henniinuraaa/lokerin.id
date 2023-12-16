<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM PERUSAHAAN | LOKER</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

</head>
<body>
{{-- @section('konten') --}}
<div class="container mt-3 py-3s">
    <div class="card ">
    <div class="card-header text-center">
        <h2>Edit perusahaan</h2>
    </div>
        <div class="card-body">
        <form action="{{ url('perusahaan/update/'.$perusahaans -> id) }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
                <label for="" class="form-label">nama perusahaan</label>
                <input class="form-control" name="nama_perusahaan" id="nama_perusahaan" cols="30" rows="10" value="{{ $perusahaans-> nama_perusahaan}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Deskripsi</label>
                <input class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10" value="{{ $perusahaans -> deskripsi}}">
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