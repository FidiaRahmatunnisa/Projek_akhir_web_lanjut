@extends('template.master')
@section('title', 'list barang')
@section('content')

{{-- @foreach ($produk as $produk) --}}

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
        <div class="col-md-4">
            <img src="{{asset('images/'.$produk->foto_produk)}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">{{$produk->nama_barang}}</h5>
            <p class="card-text">{{$produk->harga_barang}}</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
        </div>
    </div>

{{-- @endforeach --}}

@endsection
