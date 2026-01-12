@extends('layouts.master')

@section('content')

<!-- Header -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 class="h3 text-gray-800 mb-1">📊 Dashboard</h1>
        <small class="text-muted">Ringkasan aktivitas sistem hari ini</small>
    </div>
</div>

<!-- Cards -->
<div class="row">

    <!-- Jumlah Barang -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow-sm border-left-primary h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Barang
                        </div>
                        <div class="h4 font-weight-bold text-gray-800">
                            40,213
                        </div>
                    </div>
                    <div class="icon-circle bg-primary text-white">
                        <i class="fas fa-box"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Barang Masuk -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow-sm border-left-success h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Barang Masuk
                        </div>
                        <div class="h4 font-weight-bold text-gray-800">
                            534
                        </div>
                    </div>
                    <div class="icon-circle bg-success text-white">
                        <i class="fas fa-arrow-down"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Barang Keluar -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow-sm border-left-info h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <div>
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Barang Keluar
                        </div>
                        <div class="h4 font-weight-bold text-gray-800">
                            213
                        </div>
                    </div>
                    <div class="icon-circle bg-info text-white">
                        <i class="fas fa-arrow-up"></i>
                    </div>
                </div>

                <div class="progress progress-sm">
                    <div class="progress-bar bg-info"
                         role="progressbar"
                         style="width: 50%"
                         aria-valuenow="50"
                         aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jumlah Pegawai -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow-sm border-left-warning h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Jumlah Pegawai
                        </div>
                        <div class="h4 font-weight-bold text-gray-800">
                            18
                        </div>
                    </div>
                    <div class="icon-circle bg-warning text-white">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
