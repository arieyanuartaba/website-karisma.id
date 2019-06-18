@extends('layout.master')



@section('content')

    <div class="top-bar">
        <h1>portfolio</h1>
        <p><a href="#">Home</a> / Portfolio</p>
    </div>
    <!-- end top bar -->

    <!-- main container -->
    <div class="main-container portfolio-inner clearfix">
        <!-- portfolio div -->
        <div class="portfolio-div">
            <div class="portfolio">
                <!-- portfolio_filter -->
                <div class="categories-grid wow fadeInLeft">
                    <nav class="categories text-center">
                        <ul class="portfolio_filter">
                            <li><a href="" class="active" data-filter="*">Semua</a></li>
                            <li><a href="" data-filter=".kartika">Consultant</a></li>
                            <li><a href="" data-filter=".sampah">Waste Resources</a></li>
                            <li><a href="" data-filter=".pupuk">Vermik</a></li>
                            <li><a href="" data-filter=".udang">Vanamei</a></li>
                            <li><a href="" data-filter=".lain">Lainnya</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- portfolio_filter -->

                <!-- portfolio_container -->
                <div class="no-padding portfolio_container clearfix">
                    @foreach($all as $data)
                    <!-- single work -->
                    <div class="col-md-3 col-sm-6 {{$data->kategori}}">
                        <a href="#" class="portfolio_item">
                            <img src="{{asset('/images/selection/'.$data->gambar)}}" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>{{$data->title}}</span>
                                        <em>{{$data->subtitle}}</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <!-- end portfolio_container -->

            </div>
        </div>
    </div>
    <!-- end main container -->

@endsection