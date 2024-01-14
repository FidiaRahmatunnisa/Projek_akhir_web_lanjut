@extends('template.master')
@section('title', 'produk')
@section('content')



<div class="row row-cols-1 row-cols-md-3 g-4 my-2 mx-2">

    @foreach ($produk as $produk)
    <div class="col ">
      <div class="card h-100 " >
        <img src="{{asset('images/'.$produk->foto_produk)}}" class="card-img-top" alt="">
        <div class="card-body ">
          <h5 class="card-title">{{$produk->nama_barang}}</h5>
          <p class="card-text">{{$produk->harga_barang}}</p>
        </div>
        <div class="card-footer d-flex flex-column align-items-center">
            <a href="/produk/store" class="btn btn-success mt-auto">
                <i class="bi bi-plus"></i>Tambah
            </a>
          </div>
      </div>
    </div>
    @endforeach

  </div>

@endsection
