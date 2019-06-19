@extends('layout.master')

@section('head')
    <style>
    .top-bar-blog {
    color: #333;
    padding: 150px 0 150px;
    background: -webkit-linear-gradient( rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url("/images/blog/{{$blog->topbar}}");
    background: linear-gradient( rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url("/images/blog/{{$blog->topbar}}");
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;
    text-align: center;
    }
    </style>
@endsection

@section('content')



    <div class="top-bar-blog">
        <h1>{{$blog->judul}}</h1>
        <p><a href="#">Home</a> | <a href="#">Blog</a></p>
    </div>


    <div class="main-container">

        <section class="ftco-section ftco-degree-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ftco-animate">
                        {!! $blog->content !!}
                        <div class="about-author d-flex p-5 bg-light">

                            <div class="desc align-self-md-center">
                                <h3>Admin</h3>
                                <p>Penikmat kopi</p>
                            </div>
                        </div>


                        <div class="pt-5 mt-5">


                            <!-- END comment-list -->

                            <div class="comment-form-wrap pt-5">


                            </div>
                        </div>

                    </div> <!-- .col-md-8 -->
                    <div class="col-md-4 sidebar ftco-animate">

                        <div class="sidebar-box ftco-animate">
                            <div class="categories">
                                <h3>Categories</h3>
                                @foreach($cats as $cat)
                                <li><a href="#">{{$cat->category}}<span>{{$cat->blog->count()}}</span></a></li>
                                @endforeach
                                {{--<li><a href="#">Agribisnis <span>(22)</span></a></li>--}}
                                {{--<li><a href="#">Ekonomi <span>(37)</span></a></li>--}}
                                {{--<li><a href="#">Infrastruktur <span>(42)</span></a></li>--}}
                                {{--<li><a href="#">Lainnya <span>(14)</span></a></li>--}}
                            </div>
                        </div>

                        <div class="sidebar-box ftco-animate">
                            <h3>Recent Blog</h3>
                            @foreach($recents as $recent)
                            <img src="{{asset('/images/blog/'.$recent->topbar)}}" alt="{{$recent->judul}}" class="img-responsive">
                            <h3 class="heading"><a href="{{route('blog.first',$recent->slug)}}">{{$recent->judul}}</a></h3>
                            <div><a href="#"><span class="ion-calendar"></span>{{$recent->created_at}}</a> | <a href="#"><span class="ion-person"></span> Admin</a> | <a href="#"><span class="ion-share"></span> 19</a></div>
                                <hr>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </section> <!-- .section -->

    </div>

    <div class="row">

    </div>


@endsection