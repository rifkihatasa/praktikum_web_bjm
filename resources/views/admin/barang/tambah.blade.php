@extends('layouts.master')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8">

        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h5 class="mb-0 font-weight-bold text-primary">
                    ➕ Tambah Data Barang
                </h5>
            </div>

            <div class="card-body">
                <form method="post" action="/admin/barang/simpan">
                    @csrf

                    <div class="form-group">
                        <label for="kode">Kode Barang</label>
                        <input type="text"
                               id="kode"
                               name="kode"
                               class="form-control"
                               placeholder="Contoh: BRG-001"
                               required>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input type="text"
                               id="nama"
                               name="nama"
                               class="form-control"
                               placeholder="Masukkan nama barang"
                               required>
                    </div>

                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number"
                               id="stok"
                               name="stok"
                               class="form-control"
                               placeholder="Jumlah stok tersedia"
                               min="0"
                               required>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between">
                        <a href="/admin/barang" class="btn btn-secondary">
                            <i class="fa fa-arrow-left mr-1"></i> Kembali
                        </a>

                        <button type="submit" class="btn btn-primary px-4">
                            <i class="fa fa-save mr-1"></i> Simpan
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>

@endsection
