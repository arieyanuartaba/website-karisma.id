@extends('layout.master')

@section('content')
    <div class="top-bar">
        <h1>Tim Kami</h1>
        <p><a href="{{url('/tentang')}}">Tentang Kami </a> | <a href="{{url('/visimisi')}}">Visi dan Misi</a> | <a href="{{url('/nilaiperusahaan')}}"> Nilai Perusahaan
            </a> | <b style="color: orange">Tim Kami </b></p>
    </div>
    <!-- end Top bar -->

    <div class="no-padding portfolio_container clearfix">
        <!-- single work -->
        @foreach($tims as $tim)
        <div class="col-md-4 col-sm-6  fashion logo">
            <a href="{{url('/profil/'.$tim->nama)}}" class="portfolio_item">
                <img src="{{asset('/images/team/'.$tim->photo)}}" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                    <div class="portfolio-border clearfix">
                        <div class="item_info">
                            <span>{{$tim->nama}}</span>
                            <em>{{$tim->jabatan}}</em>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        {{--<div class="col-md-4 col-sm-6  fashion logo">--}}
            {{--<a href="single-project.html" class="portfolio_item">--}}
                {{--<img src="{{asset('images/team/nana_priatna.jpg')}}" alt="image" class="img-responsive" />--}}
                {{--<div class="portfolio_item_hover">--}}
                    {{--<div class="portfolio-border clearfix">--}}
                        {{--<div class="item_info">--}}
                            {{--<span>Ir. Nana Priatna</span>--}}
                            {{--<em>CEO / Direktur Utama</em>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<div class="col-md-4 col-sm-6  fashion logo">--}}
            {{--<a href="profil-anang.html" class="portfolio_item">--}}
                {{--<img src="{{asset('images/team/anang_muftiadi.jpg')}}" alt="image" class="img-responsive" />--}}
                {{--<div class="portfolio_item_hover">--}}
                    {{--<div class="portfolio-border clearfix">--}}
                        {{--<div class="item_info">--}}
                            {{--<span>DR. Anang Muftiadi, SE. M.Si</span>--}}
                            {{--<em>Komisaris</em>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<div class="col-md-4 col-sm-6  fashion logo">--}}
            {{--<a href="profil-dewi.html" class="portfolio_item">--}}
                {{--<img src="{{asset('images/team/neng_dewi_nurhidayati.jpg')}}" alt="image" class="img-responsive" />--}}
                {{--<div class="portfolio_item_hover">--}}
                    {{--<div class="portfolio-border clearfix">--}}
                        {{--<div class="item_info">--}}
                            {{--<span>Neng Dewi Nurhidayati</span>--}}
                            {{--<em>Direktur Keuangan</em>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<div class="col-md-4 col-sm-6  fashion logo">--}}
            {{--<a href="profil-hartono.html" class="portfolio_item">--}}
                {{--<img src="{{asset('images/team/hartono.jpg')}}" alt="image" class="img-responsive" />--}}
                {{--<div class="portfolio_item_hover">--}}
                    {{--<div class="portfolio-border clearfix">--}}
                        {{--<div class="item_info">--}}
                            {{--<span>Hartono Adibharata</span>--}}
                            {{--<em>Direktur</em>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<div class="col-md-4 col-sm-6  fashion logo">--}}
            {{--<a href="profil-ridwan.html" class="portfolio_item">--}}
                {{--<img src="{{asset('images/team/ridwan_wijaya.jpg')}}" alt="image" class="img-responsive" />--}}
                {{--<div class="portfolio_item_hover">--}}
                    {{--<div class="portfolio-border clearfix">--}}
                        {{--<div class="item_info">--}}
                            {{--<span>Ridwan Wijaya, ST</span>--}}
                            {{--<em>Head of Development</em>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<div class="col-md-4 col-sm-6  fashion logo">--}}
            {{--<a href="profil-deki.html" class="portfolio_item">--}}
                {{--<img src="{{asset('images/team/deki_nurdiansyah.jpg')}}" alt="image" class="img-responsive" />--}}
                {{--<div class="portfolio_item_hover">--}}
                    {{--<div class="portfolio-border clearfix">--}}
                        {{--<div class="item_info">--}}
                            {{--<span>Deki Nurdiansyah</span>--}}
                            {{--<em>Head of Administration</em>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</a>--}}
        {{--</div>--}}

        <div class="col-md-4 col-sm-6  fashion logo">
            <!-- <a href="single-project.html" class="portfolio_item"> -->
            <img src="{{asset('images/team/endofteam.jpg')}}" alt="image" class="img-responsive" />
            <!-- <div class="portfolio_item_hover">
                <div class="portfolio-border clearfix">
                    <div class="item_info">
                        <span>Deki Nurdiansyah</span>
                        <em>Head of Administration</em>
                    </div>
                </div>
            </div> -->
            <!-- </a> -->
        </div>




    </div>
@endsection