@extends('layouts.dashboard-app')

@section('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col" style="vertical-align: middle; text-align: center">#</th>
            <th scope="col" style="vertical-align: middle; text-align: center">Nama</th>
            <th scope="col" style="vertical-align: middle; text-align: center">Jabatan</th>
            <th scope="col" style="vertical-align: middle; text-align: center">Deskripsi</th>
            <th scope="col" style="vertical-align: middle; text-align: center">Link Facebook</th>
            <th scope="col" style="vertical-align: middle; text-align: center">Link Twitter</th>
            <th scope="col" style="vertical-align: middle; text-align: center">Link Instagram</th>
            <th scope="col" style="vertical-align: middle; text-align: center">Link LinkedIn</th>
            <th scope="col" style="vertical-align: middle; text-align: center">Photo</th>
            <th scope="col" style="vertical-align: middle; text-align: center">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $tim)
            <tr>
                <th scope="row">{{$tim->id}}</th>
                <td>{{$tim->nama}}</td>
                <td>{{$tim->jabatan}}</td>
                <td>{{str_limit($tim->deskripsi, 100)}}</td>
                <td>{{$tim->facebooksosmed}}</td>
                <td>{{$tim->twittersosmed}}</td>
                <td>{{$tim->instagramsosmed}}</td>
                <td>{{$tim->linkinsosmed}}</td>
                <td>
                    <a target="_blank" href="{{asset('/images/team/'.$tim->photo)}}">
                        <img src="{{asset('/images/team/'.$tim->photo)}}" alt="Forest" style="width:150px">
                    </a>
                </td>
                <td><a href="{{route('tim.edit', $tim->nama)}}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection