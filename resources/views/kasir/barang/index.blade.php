@extends('layouts.master')

@section('content')

<!-- Header -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 text-gray-800 mb-0">📦 Data Barang</h1>
</div>

<!-- Card -->
<div class="card shadow-sm">
    <div class="card-header bg-white font-weight-bold text-gray-700">
        Daftar Data Barang
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead class="thead-light text-center">
                    <tr>
                        <th width="5%">No</th>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th width="10%">Stok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $item)
                    <tr>
                        <td class="text-center">{{ $key + 1 }}</td>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->nama }}</td>
                        <td class="text-center">
                            <span class="badge badge-{{ $item->stok > 0 ? 'success' : 'danger' }}">
                                {{ $item->stok }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="d-flex justify-content-end">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
