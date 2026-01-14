<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index()
    {
        return view('kasir.beranda');
    }

    public function barang()
    {
        $data = Barang::paginate(5);

        return view('kasir.barang.index', compact('data'));
    }

    public function transaksi()
    {
        return view('kasir.transaksi.index', [
            'barang'    => Barang::orderBy('nama')->get(),
            'transaksi' => collect(),
            'total'     => 0
        ]);
    }

    public function transaksiStore(Request $request)
    {
        $request->validate([
            'barang_id' => 'required|exists:barang,id',
            'qty'       => 'required|integer|min:1'
        ]);

        $barang = Barang::findOrFail($request->barang_id);

        if ((int)$barang->stok < $request->qty) {
            return back()->with('error', 'Stok barang "' . $barang->nama . '" tidak mencukupi.');
        }

        // kurangi stok
        $barang->update([
            'stok' => (int)$barang->stok - $request->qty
        ]);

        // notifikasi sukses (jelas & informatif)
        return back()->with('success',
            'Barang "' . $barang->nama . '" berhasil dikeluarkan sebanyak ' .
            $request->qty . '. Sisa stok: ' . $barang->stok
        );
    }

}
