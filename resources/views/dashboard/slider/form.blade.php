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

<form action="{{route('slider.update', $slider->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="header" name="header"  value="{{$slider->header}}" >
    </div>
    <div class="form-group">
        <label for="subtitle">Subtitle</label>
        <input type="text" class="form-control" id="subheader" name="subheader" value="{{$slider->subheader}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1 label-danger">Dimensi image (width=1024px) (height=439px)</label>
        <input type="file" class="form-control-file" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Save Changes</button>
</form>


    {{--{{$data->title}}--}}
@endsection