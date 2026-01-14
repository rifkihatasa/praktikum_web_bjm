@extends('layouts.master')

@section('content')

<h1 class="h3 mb-4 text-gray-800">Transaksi Penjualan</h1>

{{-- NOTIFIKASI --}}
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle mr-1"></i>
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-triangle mr-1"></i>
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
    </div>
@endif

{{-- FORM TRANSAKSI --}}
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <strong>Input Transaksi</strong>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('kasir.transaksi.store') }}">
            @csrf

            <div class="form-row align-items-end">
                <div class="form-group col-md-6">
                    <label>Barang</label>
                    <select name="barang_id" class="form-control" required>
                        <option value="">-- Pilih Barang --</option>
                        @foreach($barang as $b)
                            <option value="{{ $b->id }}">
                                {{ $b->nama }} (Stok: {{ $b->stok }})
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>Jumlah</label>
                    <input
                        type="number"
                        name="qty"
                        class="form-control"
                        min="1"
                        required
                    >
                </div>

                <div class="form-group col-md-3">
                    <button class="btn btn-primary btn-block">
                        Proses Transaksi
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- TABEL DATA BARANG --}}
<div class="card shadow">
    <div class="card-header py-3">
        <strong>Data Barang</strong>
    </div>

    <div class="card-body table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light text-center">
                <tr>
                    <th width="5%">No</th>
                    <th>Kode</th>
                    <th>Nama Barang</th>
                    <th width="15%">Stok</th>
                </tr>
            </thead>
            <tbody>
                @forelse($barang as $b)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $b->kode }}</td>
                        <td class="text-left">{{ $b->nama }}</td>
                        <td>
                            <span class="badge {{ $b->stok <= 5 ? 'badge-danger' : 'badge-success' }}">
                                {{ $b->stok }}
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">
                            Data barang belum tersedia
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
