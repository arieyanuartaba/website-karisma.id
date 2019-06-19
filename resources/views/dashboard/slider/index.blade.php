@extends('layouts.dashboard-app')

@section('content')

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
        @foreach($sliders as $slider)
        <tr>
            <th scope="row">{{$slider->id}}</th>
            <td>{{$slider->header}}</td>
            <td>{{$slider->subheader}}</td>
            <td>
                <a target="_blank" href="{{asset('/images/'.$slider->image)}}">
                    <img src="{{asset('/images/'.$slider->image)}}" alt="{{$slider->header}}" style="width:150px">
                </a>
            </td>
            <td><a href="{{url('/slider/'.$slider->id.'/edit')}}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection