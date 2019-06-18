@extends('layout.master')

@section('content')
        <!-- top bar -->
<div class="groups">
    <div class="top-bar">
        <h1>Group Kami</h1>
        <p><a href="{{url('/')}}">Home</a> | <a href="#"><b> Group Kami </b></a> </p>
    </div>
    <!-- end top bar -->
    <div class="container main-container clearfix" style="padding-top: 0;">

        <div class="col-md-3" id="group">
            <h3>Group Kami</h3>
            <ul style="list-style: none; padding-left: 0; line-height: 35px;">
                @foreach($getall as $data)
                <li style="border-bottom: dashed 1px black;">
                    <a href="{{url('/group/'.$data->namaperusahaan)}}">{{$data->namaperusahaan}}</a>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-9" style="padding-top: 15px;">
            <div class="row">
                <div class="col-md-8">
                    <h3 style="color: orange;" >{{$perusahaan->namaperusahaan}}</h3>
                    <p style="text-align: justify;">{{$perusahaan->deskripsi}}</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('images/logo/'.$perusahaan->logo)}}" alt="">
                </div>
            </div>
            <hr class="tall" >

            <h3>Output & Produk</h3>
            <div id="exampleAccordion" data-children=".item">
                @foreach($perusahaan->produks as $produk)
                <div class="item">
                    <a data-toggle="collapse" data-parent="#exampleAccordion" href="#Accordion{{$produk->id}}" aria-expanded="false" aria-controls="exampleAccordion{{$produk->id}}">
                        {{$produk->produk}}
                    </a>
                    <div id="Accordion{{$produk->id}}" class="collapse" role="tabpanel">
                        <p class="mb-3">
                        {!! $produk->deskripsi !!}
                        </p>
                    </div>

                </div>
                @endforeach


            </div>

        </div>

    </div>
</div>
<script src="{{ elixir('js/js/listgroup.js') }}"></script>
@endsection