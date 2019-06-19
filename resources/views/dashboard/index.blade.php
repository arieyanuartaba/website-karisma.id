@extends('layouts.dashboard-app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Slider Header</h5>
                        {{--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>--}}
                        <p class="card-text">Merubah title, subtitle dan header pada slider halaman home</p>
                        <a href="{{url('/slider')}}" class="card-link btn btn-primary">Edit Slider</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Tim Kami</h5>
                        {{--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>--}}
                        <p class="card-text">Menambahkan atau merubah informasi pada halaman tim kami</p>
                        <a href="{{url('/listtim')}}" class="card-link btn btn-primary">Edit Tim</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Perusahaan</h5>
                        {{--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>--}}
                        <p class="card-text">Menambah atau merubah informasi perusahaan</p>
                        <a href="{{route('perusahaan.index')}}" class="card-link btn btn-primary">List</a>
                        <a href="{{route('perusahaan.create')}}" class="card-link btn btn-primary">Tambah</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Produk/Output</h5>
                        {{--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>--}}
                        <p class="card-text">Menambah atau merubah informasi produk perusahaan</p>
                        <a href="{{route('output.index')}}" class="card-link btn btn-primary">List</a>
                        <a href="{{route('output.create')}}" class="card-link btn btn-primary">Tambah</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Portofolio</h5>
                        {{--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>--}}
                        <p class="card-text">Menambah atau merubah portofolio perusahaan</p>
                        <a href="{{route('porto.index')}}" class="card-link btn btn-primary">List</a>
                        <a href="{{route('porto.create')}}" class="card-link btn btn-primary">Tambah</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Blog</h5>
                        {{--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>--}}
                        <p class="card-text">Menambah atau merubah halaman blog</p>
                        <a href="{{route('blog.index')}}" class="card-link btn btn-primary">List</a>
                        <a href="{{route('blog.create')}}" class="card-link btn btn-primary">Tambah</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Karir</h5>
                        {{--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>--}}
                        <p class="card-text">Menambah atau merubah halaman karir</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>


    </div>





@endsection