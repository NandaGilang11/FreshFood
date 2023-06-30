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
                        <h3 class="mt-2"><i class="fa fa-shopping-cart"> Check Out</i></h3>
                        @if(!empty($pesanan))
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Produk</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
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
                                <td>
                                    <form action="{{ url('check-out') }}/{{ $pesanan_detail->id }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ?');"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="5" align="right"><strong>Total Pembayaran :</strong></td>
                                <td><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                                <td>
                                    <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success" onclick="return confirm('Anda yakin akan Check Out ?');">
                                        <i class="fa fa-shopping-cart"></i> Check Out
                                    </a>
                                </td>
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
