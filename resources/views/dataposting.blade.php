@extends('tampilan')
@section('content') 
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DataPosting|Loker</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container">
        <a href="/posting"><button class="btn btn-danger ">+ Tambah Data</button></a>
        <div class="table-layout mt-1">
            <table class="table table-bordered">
              <thead class="table table-striped text-center table-sm ">
    <tr>
        <th>No</th>
        <th>Nama Perusahaan</th>
        <th>Bidang Usaha</th>
        <th>Lowongan Pekerjaan</th>
        <th>tanggal posting</th>
        <th>tanggal deadline</th>
        <th>deskripsi</th>
        <th>Lokasi</th>
        <th>Status</th>
        <th>foto</th>
        <th colspan="2">Aksi</th>
    </tr>
    </thead>

     @foreach ($postings as $key=> $item)
    <tr>
        <td>{{  $key+1 }}</td>
        <td>{{  $item['nama_perusahaan'] }}</td>
        <td>{{  $item['bidang_usaha'] }}</td>
        <td>{{  $item['lowongan_pekerjaan'] }}</td>
        <td>{{  $item['tanggal_posting'] }}</td>
        <td>{{  $item['tanggal_deadline'] }}</td>
        <td>{{  $item['deskripsi'] }}</td>
        <td>{{  $item['lokasi'] }}</td>
        <td>
            @if ($item['status'] == 'Dikonfirmasi')
            <button class="btn btn-success">Dikonfirmasi</button>
                @else
                <button class="btn btn-warning"><a href="/posting/{{ $item->id }}/Dikonfirmasi">{{ $item->status }}</a></button>
            @endif
        </td>
        <td ><img src="/storage/{{ $item->foto }}" alt="" width="100"></td>
         <td>
            <a href="/posting/edit/{{ $item['id'] }}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></td> 
               <td><a href="/postinghapus/{{ $item['id'] }}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
    </tr>
     @endforeach   
    </table>
</table>

    </div>
@endsection