@extends('layouts.dashboard-app')

@section('content')

    <div class="float-md-right">
        <a href="{{route('porto.create')}}" class="btn btn-primary mb-2">Tambahkan</a>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Subtitle</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($portos as $index => $porto)
            <tr>
                <th scope="row">{{++$index}}</th>
                <td>{{$porto->title}}</td>
                <td>{{$porto->subtitle}}</td>
                <td>
                    <a target="_blank" href="{{asset('/images/selection/'.$porto->gambar)}}">
                        <img src="{{asset('/images/selection/'.$porto->gambar)}}" alt="{{$porto->gambar}}" style="width:75px">
                    </a>
                </td>
                <td>
                    <form action="{{route('porto.destroy', $porto->id)}}" method="post">
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