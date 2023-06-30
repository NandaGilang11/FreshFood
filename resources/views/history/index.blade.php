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
                        <h3 class="mt-2"><i class="fa fa-history"> Riwayat Pemesanan</i></h3>
                    </div>
                    <div class="card-body">
                         <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Pembayaran</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Jumlah Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($pesanans as $pesanan)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $pesanan->kode }}</td>
                                    <td>{{ $pesanan->tanggal }}</td>
                                    <td>
                                        @if($pesanan->status == 1)
                                        Menunggu Pembayaran
                                        @else
                                        Sudah Dibayar
                                        @endif
                                    </td>
                                    <td>Rp. {{ number_format($pesanan->jumlah_harga) }}</td>
                                    <td>
                                        <a href="{{ url('history') }}/{{ $pesanan->id }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                         </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
