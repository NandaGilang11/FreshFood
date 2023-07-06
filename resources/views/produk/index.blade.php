@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="row justify-content-center">
            <h2 class="mt-3"><strong>Produk</strong> Kami</h2>
            <form action="{{ url('produk') }}" method="get">
                <div class="input-group mt-1 mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa  fa-search"></i></span>
                    <input type="search" name="search" id="search_produk" class="form-control" placeholder="Cari Produk" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </form>
            
            @foreach ($produks as $produk)
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <img src="{{ url('images/produk') }}/{{ $produk->gambar }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                            <br>
                            <p class="card-text">
                                <strong>Harga : </strong>Rp {{ number_format($produk->harga) }} <br>
                                <strong>Stok : </strong>{{ $produk->stok }}
                                <hr>
                                <strong>Keterangan : </strong><br>
                                {{ $produk->keterangan }}
                            </p>
                            <a href="{{ url('pesan') }}/{{ $produk->id }}" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Pesan</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@endsection
