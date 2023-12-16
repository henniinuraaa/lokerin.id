<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM POSTING | LOKER</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

</head>
<body>
{{-- @section('konten') --}}
<div class="container mt-3 py-3s">
    <div class="card ">
    <div class="card-header text-center">
        <h2>Edit Posting</h2>
    </div>
        <div class="card-body">
        <form action="{{ url('posting/update/'.$postings -> id) }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
                <label for="" class="form-label">nama perusahaan</label>
                <input class="form-control" name="nama_perusahaan" id="nama_perusahaan" cols="30" rows="10" value="{{ $postings-> nama_perusahaan}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Bidang Usaha</label>
                <input class="form-control" name="bidang_usaha" id="bidang_usaha" cols="30" rows="10" value="{{ $postings -> bidang_usaha}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">lowongan pekerjaan</label>
                <input class="form-control" name="lowongan_pekerjaan" id="lowongan_pekerjaan" cols="30" rows="10" value="{{ $postings -> lowongan_pekerjaan}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">tanggal posting</label>
                <input class="form-control" name="tanggal_posting" id="tanggal_posting" cols="30" rows="10" value="{{ $postings -> tanggal_posting}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">tanggal deadline</label>
                <input class="form-control" name="tanggal_deadline" id="tanggal_deadline" cols="30" rows="10" value="{{ $postings -> tanggal_deadline}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Deskripsi</label>
                <input class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10" value="{{ $postings -> deskripsi}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Lokasi</label>
                <input class="form-control" name="lokasi" id="lokasi" cols="30" rows="10" value="{{ $postings -> lokasi}}">
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