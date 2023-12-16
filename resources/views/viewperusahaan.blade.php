@extends('tampilan')
@section('content') 
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VIEW PERUSAHAAN | LOKER</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container">
        <a href="/perusahaan"><button class="btn btn-danger ">+ Tambah Data</button></a>
        <div class="table-layout mt-1">
            <table class="table table-bordered">
              <thead class="table table-striped text-center table-sm ">
    <tr>
        <th>No</th>
        <th>Nama Perusahaan</th>
        <th>Deskripsi</th>
        <th>Foto</th>
        <th colspan="2">Aksi</th>
    </tr>
    </thead>

     @foreach ($perusahaans as $key=> $item)
    <tr>
        <td>{{  $key+1 }}</td>
        <td>{{  $item['nama_perusahaan'] }}</td>
        <td>{{  $item['deskripsi'] }}</td>
        <td ><img src="/storage/{{ $item->foto }}" alt="" width="100"></td>
         <td>
            <a href="/perusahaan/edit/{{ $item['id'] }}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></td> 
               <td><a href="/perusahaanhapus/{{ $item['id'] }}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
    </tr>
     @endforeach   
    </table>
</table>

    </div>
@endsection