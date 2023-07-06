@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/team.style.css') }}">
    <div class="back">
        <a href="{{ url('home') }}" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
    <div class="containerr">
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="{{ asset('images/team/member2.jpg') }}" alt="">
                </div>
                <div class="contentBx">
                    <h4>Nanda</h4>
                    <h5>Backend Developer</h5>
                </div>
                <div class="sci">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/nanda_gilangg/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="{{ asset('images/team/member1.jpg') }}" alt="">
                </div>
                <div class="contentBx">
                    <h4>Rafael</h4>
                    <h5>Graphic Desainer</h5>
                </div>
                <div class="sci">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/herifka_rey/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="{{ asset('images/team/member3.jpeg') }}" alt="">
                </div>
                <div class="contentBx">
                    <h4>Yogi</h4>
                    <h5>Frontend Developer</h5>
                </div>
                <div class="sci">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/yogs.2002/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="{{ asset('images/team/member4.jpeg') }}" alt="">
                </div>
                <div class="contentBx">
                    <h4>Fahry</h4>
                    <h5>Developer</h5>
                </div>
                <div class="sci">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="{{ asset('images/team/member5.jpeg') }}" alt="">
                </div>
                <div class="contentBx">
                    <h4>Hasbi</h4>
                    <h5>Developer</h5>
                </div>
                <div class="sci">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="{{ asset('images/team/member6.jpeg') }}" alt="">
                </div>
                <div class="contentBx">
                    <h4>Vallen</h4>
                    <h5>Developer</h5>
                </div>
                <div class="sci">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
