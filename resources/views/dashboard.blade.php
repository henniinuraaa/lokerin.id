@extends('tampilan')
@section('content') 
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <a href="/viewposting">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                         DATA POSTING</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $posting }} posting</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </a>
            </div>
        </div>
    </div> 
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <a href="/viewpeminjam">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                          DATA PENGAJUAN</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pengajuan }} pengajuan</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </a>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <a href="/transaksi">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">TRANSAKSI
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $datatransaksi }} Transaksi</div>
                            </div>
                        
                        </div>
                    </div>
                    <div class="col-auto">
                    <i class="far fa-credit-card fa-2x text-gray-300"></i>   
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div> 

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <a href="/barangtersedia">

                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                          BARANG TERSEDIA</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $Barang_Tersedia }} Barang</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
    @endsection
