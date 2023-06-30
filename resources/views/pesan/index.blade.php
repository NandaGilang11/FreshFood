@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('home') }}" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mt-2"><strong>Detail</strong> Produk</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ url('images/produk') }}/{{ $produk->gambar }}" class="rounded mx-auto d-block" width="600" alt="">
                            </div>
                            <div class="col-md-6 mt-5">
                                <h2>{{ $produk->nama_produk }}</h2>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td>Rp {{ number_format($produk->harga) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Stok</td>
                                            <td>:</td>
                                            <td>{{ $produk->stok }}</td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td>:</td>
                                            <td>{{ $produk->keterangan }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Pesan</td>
                                            <td>:</td>
                                            <td>
                                            <form method="post" action="{{ url('pesan') }}/{{ $produk->id }}">
                                            @csrf
                                                <input type="text" name="jumlah_pesan" class="form-control" required="">
                                                <button type="submit" class="btn btn-success mt-2"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                            </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
