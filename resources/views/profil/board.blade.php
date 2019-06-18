@extends('layout.master')

@section('content')
    <div class="top-bar">
        <h1>Tim Kami</h1>
        <p><a href="{{url('/')}}">Home</a> / <a href="{{url('/timkami')}}">Tim Kami</a></p>
    </div>
    <!-- end top-bar -->

    <!-- main-container -->
    <div class="container">
        <!-- <div class="col-md-12">
            <img src="img/port/8.jpg" alt="" class="img-responsive" />
            <div class="h-30"></div>
        </div> -->

        <div class="col-md-12">

        </div>

        <div class="col-md-8">
            <h3 class="text-uppercase">
                {{$tim->nama}}
            </h3>
            <h4 style="color: orange; font-weight: 300; letter-spacing: 2px">{{$tim->jabatan}}</h4>
            <div class="h-30"></div>
            <p>{{$tim->deskripsi}}</p>

            <p>Profil lebih lengkap dapat dilihat di sini: <a href="#">Download CV </a></p>

            <ul class="social-ul">
                <li class="box-social"><a href="#0"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li class="box-social"><a href="#0"><ion-icon name="logo-instagram"></ion-icon></a></li>
                <li class="box-social"><a href="#0"><ion-icon name="logo-twitter"></ion-icon></a></li>
            </ul>
            <br>
            <a href="{{url('/timkami')}}"  id="tombol-kembali" style="padding-bottom: 10px">Profil tim lainnya</a>
            <br>
            <br>
            <br>

        </div>

        <div class="col-md-4">
            <br>
            <img src="{{asset('images/team/'.$tim->photo)}}" alt="" style="width:120%; height:auto;">
        </div>


    </div>
@endsection