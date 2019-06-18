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

    <form action="{{route('output.store')}}" method="POST">
        @csrf
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
            <input type="text" name="produk" class="form-control"  placeholder="Nama Output">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deksripsi</label>
            <textarea name="deskripsi" class="form-control" id="outputDekripsi" cols="30" rows="6"></textarea>
        </div>

        <div class="form-group">
            <label for="logo">Topbar Image (max width=300px, max height =300px)</label>
            <input type="file" class="form-control-file" name="topbar">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>

@endsection