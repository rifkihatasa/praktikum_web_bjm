@extends('layouts.master')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8">

        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h5 class="mb-0 font-weight-bold text-primary">
                    📄 Laporan Data Barang
                </h5>
            </div>

            <div class="card-body">
                <p class="text-muted mb-4">
                    Halaman ini digunakan untuk menampilkan dan mencetak laporan data barang
                    yang tersimpan di dalam sistem.
                </p>

                <div class="d-flex justify-content-center">
                    <a href="/admin/laporan/cetak_barang"
                       class="btn btn-primary btn-lg shadow-sm"
                       target="_blank">
                        <i class="fa fa-print mr-2"></i> Cetak Laporan Barang
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
