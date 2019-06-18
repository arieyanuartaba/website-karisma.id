@extends('layouts.dashboard-app')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('porto.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label>Subtitle</label>
            <input type="text" name="subtitle" class="form-control" value="{{old('subtitle')}}">
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select name="kategori" class="form-control">
                <option value="kartika">Kartika / Konsultan</option>
                <option value="sampah">Waste Resource</option>
                <option value="pupuk">Vermik</option>
                <option value="udang">Vanammei</option>
                <option value="lain">Lainnya</option>
            </select>
        </div>
        <div class="form-group">
            <label>Photo (width:1000px height:1000px)</label>
            <input type="file" class="form-control-file" name="gambar">
        </div>

        <button class="btn btn-primary" type="submit">Tambah Portofolio</button>
    </form>
@endsection