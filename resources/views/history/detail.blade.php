@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('history') }}" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12 mt-4">
                <div class="card mb-2">
                    <div class="card-header">
                        <h3>Pesanan Berhasil di Checkout</h3><br>
                        <h5>Silahkan Lakukan Pembayaran Sebelum 24 Jam</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h3 class="mt-2"><i class="fa fa-shopping-cart"> Detail Pemesanan</i></h3>
                        @if(!empty($pesanan))
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Produk</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($pesanan_details as $pesanan_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img src="{{ url('images/produk') }}/{{ $pesanan_detail->produk->gambar }}" width="100" alt="...">
                                </td>
                                <td>{{ $pesanan_detail->produk->nama_produk }}</td>
                                <td>{{ $pesanan_detail->jumlah }}</td>
                                <td>Rp. {{ number_format($pesanan_detail->produk->harga) }}</td>
                                <td>Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="4" align="right"><strong>Total Pembayaran :</strong></td>
                                <td><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                                <td><span></span></td>
                            </tr>
                        </tbody>
                        </table>
                        <h6><strong>Tanggal Pemesanan : </strong> {{ $pesanan->tanggal }}</h6>
                        @endif  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
