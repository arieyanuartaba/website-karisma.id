@extends('layouts.dashboard-app')

@section('content')

    <h1>Tambah data perusahaan</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('perusahaan.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="namaPerusahaan">Nama Perusahaan</label>
            <input type="text" class="form-control" name="namaperusahaan" placeholder="Nama Perusahaan" value="{{old('namaperusahaan')}}">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi Perusahaan</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="6" placeholder="Deskripsi perusahaan"></textarea>
        </div>
        <div class="form-group">
            <label for="logo">Logo Perusahaan (max width=300px, max height =300px)</label>
            <input type="file" class="form-control-file" name="logo">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>

@endsection