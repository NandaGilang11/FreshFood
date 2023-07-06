@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/about.style.css')}}">
    <div class="back">
        <a href="{{ url('home') }}" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
    <div class="heading">
        <h1>Tentang Kami</h1>
        <p>Fresh Food adalah pasar online yang menawarkan berbagai produk segar dan berkualitas tinggi kepada pelanggan. Kami bertujuan untuk menyediakan platform yang nyaman dan terpercaya bagi orang-orang untuk membeli makanan segar dan produk terkait lainnya dari kenyamanan rumah mereka.</p>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
                <img src="{{ asset('images/about.jpg') }}">
            </div>
            <div class="about-content">
             <h2>VERY VERY FRESH</h2>
             <p>Di Fresh Food, kami memahami pentingnya mengonsumsi makanan segar dan bergizi terutama sayur dan buah. Oleh karena itu, kami bekerja sama dengan petani lokal, penghasil, dan pemasok yang mematuhi standar kualitas yang ketat. Hal ini memastikan bahwa pelanggan kami hanya menerima produk terbaik dan tersegar yang tersedia.
                 Situs web dan aplikasi seluler yang mudah digunakan kami memudahkan pelanggan untuk menjelajahi dan memesan produk yang diinginkan hanya dengan beberapa kali klik.</p>
              <a href="" class="read-more">Read More</a>     
            </div>
        </section>
    </div>
@endsection

