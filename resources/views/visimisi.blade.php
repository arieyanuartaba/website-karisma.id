@extends('layout.master')

@section('content')
    <div class="top-bar">
        <h1>Harmoni Kami</h1>
        <p><a href="{{url('/tentang')}}">Tentang Kami</a> | <b style="color: orange">Visi dan Misi </b> | <a href="{{url('/nilaiperusahaan')}}"> Nilai Perusahaan
            </a> | <a href="{{url('timkami')}}">Tim Kami </a></p>
    </div>
    <!-- end Top bar -->

    <!-- Main container -->
    <div class="container main-container clearfix" style="padding-top: 20px;">
        <!-- <div class="col-md-6">
            <img src="img/group/13.jpg" class="img-responsive" alt="" />
        </div> -->
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <h3><span style="background-color: orangered; color: white; padding: 0 5px;">Visi</span> <b>Karisma.inc</b> </h3>
            <!-- <h5>Kualitas adalah yang terdepan</h5> -->
            <!-- <div class="h-30"></div> -->
            <p>Menjadi perusahaan unggulan, terbaik dan profesional dalam industri jasa konsultasi, industri pengolahan limbah, dan industri pertanian dalam rangka pembangun negeri dan kesejahteraan bersama.
            </p>
            <br>
            <h3><span style="background-color: orangered; color: white; padding: 0 5px;">Misi</span> <b>Karisma.inc</b> </h3>
            <!-- <h5>Kualitas adalah yang terdepan</h5> -->
            <!-- <div class="h-30"></div> -->
            <ol style="padding-left: 0; margin-left: 14px; line-height: 30px;">
                <li style="padding-left: 10px;">Memberikan produk jasa konsultasi unggulan, terbaik, dan professional dalam bidangnya.</li>
                <li style="padding-left: 10px;">Melakukan inovasi dan pengembangan dalam pengelolaan dan pengolahan sampah menjadi produk yang bernilai ekonomis melalui <i> waste to energy </i> dan <i>waste to material.</i></li>
                <li style="padding-left: 10px;">Melakukan inovasi dan pengembangan dalam bidang pertanian baik pra dan pasca panen.</li>
                <li style="padding-left: 10px;">Menggerakkan masyarakat bersumber daya melalui program Desa Mandiri.</li>
                <li style="padding-left: 10px;">Melakukan riset dan inovasi dalam rangka pengembangan produk-produk inovatif unggulan melalui kolaborasi dengan para ahli di bidangnya.</li>
                <li style="padding-left: 10px;">Melakukan pengembangan bisnis dan industri pada produk inovatif unggulan.</li>
            </ol>
            <!-- <div class="h-10"></div>
            <ul class="social-ul">
                <li class="box-social"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-dribbble"></i></a></li>
            </ul> -->


        </div>
    </div>
@endsection