@extends('layouts.dashboard-app')

@section('content')
<h1>list blog</h1>
<div class="float-right">
    <a href="{{route('blog.create')}}" class="btn btn-primary mb-3">New Content</a>
</div>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Judul</th>
        {{--<th scope="col">Content</th>--}}
        <th scope="col">Kategori</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($blogs as $index => $data)
        <tr>
            <th scope="row">{{$index + $blogs->firstitem()}}</th>
            <td>{{$data->judul}}</td>
            {{--<td>{!! str_limit($data->content,100) !!}</td>--}}
            <td>{{$data->category->category}}</td>
            <td>
                <a target="_blank" href="{{asset('/images/blog/'.$data->topbar)}}">
                    <img src="{{asset('/images/blog/'.$data->topbar)}}" alt="{{$data->judul}}" style="width:150px">
                </a>
            </td>
            <td style="vertical-align: middle">
                <a href="{{route('blog.show',$data->slug)}}" class="btn btn-success mb-2">View</a>
                <a href="{{route('blog.edit',$data->slug)}}" class="btn btn-warning mb-2">Edit</a>

                <form action="{{route('blog.destroy',$data->slug)}}" method="post">
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
            {{--<div class="d-flex justify-content-center">{{ $produks->links() }}</div>--}}

        </th>
    </tr>
    </tfoot>
</table>
@endsection