@extends('layouts.dashboard-app')

@section('content')

    <h1>Tambah Output perusahaan</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('output.update', $produk->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <select name="perusahaan_id" class="form-control">
                <option>Pilih Perusahaan</option>
                @foreach($perusahaan as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="output">Nama Output</label>
            <input type="text" name="produk" class="form-control"  placeholder="Nama Output" value="{{$produk->produk}}">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deksripsi</label>
            <textarea name="deskripsi" class="form-control" id="editOutput" cols="30" rows="6">{{$produk->deskripsi}}</textarea>
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>

@endsection