@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/contact.style.css')}}">
    <div class="back">
        <a href="{{ url('home') }}" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
    <div class="containerr">
    <div class="contentt">
      <div class="left-side">
        <div class="address details">
          <i class="fa fa-map-marker"></i>
          <div class="topic">Alamat</div>
          <div class="text-one">177A Bleecker Street</div>
          <div class="text-two">Greenwich Village</div>
        </div>
        <div class="phone details">
          <i class="fa fa-whatsapp"></i>
          <div class="topic">Whatsapp</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fa fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">fresh_food_official@gmail.com</div>
          <div class="text-two">fresh_food@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Kirim pesan ke Kita</div>
        <p>Kirimkan pesan Anda untuk permintaan, saran, atau masalah yang perlu diselesaikan. Kami berkomitmen untuk memberikan pelayanan pelanggan terbaik dan akan dengan senang hati membantu Anda.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Nama">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Email">
        </div>
        <div class="input-box message-box">
          <textarea placeholder="Kirim Pesan"></textarea>
        </div>
        <a href="#" class="btn btn-success mt-2">
          <i class="fa fa-paper-plane"></i> Kirim
        </a>
      </form>
    </div>
    </div>
  </div>
@endsection
