@extends('tampilan')
@section('content') 
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>VIEW PENGAJUAN | LOKER</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    
    <body>
    
        <div class="container">
            <a href="/pengajuan"><button class="btn btn-danger ">+ Tambah Data</button></a>
            <div class="table-layout mt-1">
                <table class="table table-bordered">
                  <thead class="table table-striped text-center table-sm ">
    
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Email</th>
            <th>Tahun Lulus</th>
            <th>foto</th>
            <th colspan="2">Aksi</th>
        </tr>
        </thead>
    
         @foreach ($pengajuans as $key=> $item)
        <tr>
            <td>{{  $key+1 }}</td>
            <td>{{  $item['nama_lengkap'] }}</td>
            <td>{{  $item['ttl'] }}</td>
            <td>{{  $item['alamat'] }}</td>
            <td>{{  $item['no_hp'] }}</td>
            <td>{{  $item['email'] }}</td>
            <td>{{  $item['tahun_lulus'] }}</td>
            <td ><img src="/storage/{{ $item->foto }}" alt="" width="100"></td>
             <td>
                <a href="/pengajuan/edit/{{ $item['id'] }}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></td> 
                   <td><a href="/pengajuanhapus/{{ $item['id'] }}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
        </tr>
         @endforeach   
        </table>
    </table>
    
        </div>
    @endsection