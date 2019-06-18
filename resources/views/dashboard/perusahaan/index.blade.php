@extends('layouts.dashboard-app')

@section('content')

    <div class="float-right">
        <a href="{{route('perusahaan.create')}}" class="btn btn-primary mb-3">New</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Perusahaan</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Logo</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($perusahaans as $index => $data)
            <tr>
                <th scope="row">{{++$index}}</th>
                <td>{{$data->namaperusahaan}}</td>
                <td>{{$data->deskripsi}}</td>
                <td>
                    <a target="_blank" href="{{asset('/images/logo/'.$data->logo)}}">
                        <img src="{{asset('/images/logo/'.$data->logo)}}" alt="{{$data->namaperusahaan}}" style="width:150px">
                    </a>
                </td>
                <td style="vertical-align: middle">
                    <a href="{{url('/perusahaan/'.$data->namaperusahaan.'/edit')}}" class="btn btn-warning mb-2">Edit</a>

                    <form action="{{route('perusahaan.destroy', $data->namaperusahaan)}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection