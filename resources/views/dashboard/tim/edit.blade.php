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

    <form action="{{route('tim.update',$tim->nama)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama"  value="{{$tim->nama}}" >
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{$tim->jabatan}}">
        </div>
        <div class="form-group">
            <label for="subtitle">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="8">{{$tim->deskripsi}}</textarea>
        </div>
        <div class="form-group">
            <label for="facebook"><ion-icon name="logo-facebook"></ion-icon>Link Facebook</label>
            <input type="text" class="form-control" id="lfb" name="lfb" value="{{$tim->facebooksosmed}}">
        </div>
        <div class="form-group">
            <label for="twitter"><ion-icon name="logo-twitter"></ion-icon>Link Twitter</label>
            <input type="text" class="form-control" id="ltw" name="ltw" value="{{$tim->twittersosmed}}">
        </div>
        <div class="form-group">
            <label for="instagram"><ion-icon name="logo-instagram"></ion-icon>Link Instagram</label>
            <input type="text" class="form-control" id="linst" name="linst" value="{{$tim->instagramsosmed}}">
        </div>
        <div class="form-group">
            <label for="linkedin"><ion-icon name="logo-linkedin"></ion-icon>Link Linkedin</label>
            <input type="text" class="form-control" id="lidn" name="lidn" value="{{$tim->linkinsosmed}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1 label-danger">Curriculum Vitae</label>
            <input type="file" class="form-control-file" name="vitae">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1 label-danger">Dimensi image (width=1024px) (height=439px)</label>
            <input type="file" class="form-control-file" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>

@endsection