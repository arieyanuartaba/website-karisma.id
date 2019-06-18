{{--@extends('layouts.dashboard-app')--}}

{{--@section('content')--}}

    {{--<h2>Buat Content Blog Karisma.id</h2>--}}

    {{--<form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">--}}
        {{--@csrf--}}
        {{--<div class="form-group">--}}
            {{--<label for="">Judul</label>--}}
            {{--<input type="text" name="judul" placeholder="Judul blog" class="form-control">--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
            {{--<label for="">Isi Blog</label>--}}
            {{--<textarea name="content"  cols="30" rows="10" class="form-control" id="summernote"></textarea>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
            {{--<label for="">Kategori</label>--}}
            {{--<select name="category" class="form-control">--}}
                {{--<option>Pilih Output</option>--}}
                {{--@foreach($cat as $key => $value)--}}
                    {{--<option value="{{$key}}">{{$value}}</option>--}}
                {{--@endforeach--}}
            {{--</select>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
            {{--<button type="submit" class="btn btn-primary">Publish</button>--}}
        {{--</div>--}}
    {{--</form>--}}

{{--@endsection--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Summernote</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
</head>
<body>
<div class="container">
    <h2>Buat Content Blog Karisma.id</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Judul</label>
        <input type="text" name="judul" placeholder="Judul blog" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Isi Blog</label>
        <textarea name="content"  class="form-control" id="summernote"></textarea>
    </div>

    <div class="form-group">
        <label for="">Kategori</label>
            <select name="category" class="form-control">
                <option>Pilih Output</option>
                @foreach($cat as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach
            </select>
    </div>

    <div class="form-group">
        <label>Image for Top Bar</label>
        <input type="file" name="topbar" class="form-control-file">
    </div>

    <div class="form-group">
    <button type="submit" class="btn btn-primary">Publish</button>
    </div>
    </form>
</div>
{{--<div id="summernote"><p>Hello Summernote</p></div>--}}
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300
        });

    });
</script>
</body>
</html>