@extends('layouts.dashboard-app')

@section('content')
<h1>list blog</h1>
<div class="float-right">
    <a href="{{route('output.create')}}" class="btn btn-primary mb-3">New</a>
</div>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th>Perusahaan</th>
        <th scope="col">Output</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($blogs as $index => $data)
        <tr>
            <th scope="row">{{$index + $blogs->firstitem()}}</th>
            <td>{{$data->judul}}</td>
            <td>{!! str_limit($data->content,100) !!}</td>
            <td>{{$data->category->category}}</td>
            <td style="vertical-align: middle">
                <a href="{{url('/output/'.$data->id.'/edit')}}" class="btn btn-warning mb-2">Edit</a>

                <form action="{{route('output.destroy',$data->id)}}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr class="align-content-center">
        <th colspan="4">
            <div class="d-flex justify-content-center">{{ $produks->links() }}</div>

        </th>
    </tr>
    </tfoot>
</table>
@endsection