<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::all();
        return view('produk', ['produk'=> $produk]);
    }

    public function store(Request $request)
    {
        // $produk = Produk::all();
        // return view('list', ['produk'=> $produk]);

        $request->validate([
            'id' => 'required',
            'nama_barang' => 'required',
            'harga_barang' => 'required',
            'foto_barang' =>'required',
        ]);

        Produk::create([
            'id' => $request->id,
            'nama_barang' => $request->nama_barang,
            'harga_barang' => $request->harga_barang,
            'foto_barang' => $request->foto_barang,
        ]);

        return redirect('/')->with('warning', 'Barang  dimasukan ke keranjang!');
}
}
