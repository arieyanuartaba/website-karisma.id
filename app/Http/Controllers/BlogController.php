<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{


    public function index(){

        $blogs = Blog::paginate(10);

        return view('dashboard.blog.index', compact('blogs'));
    }


    public function create(){

        $cat = Category::pluck('category', 'id');

        return view('dashboard.blog.create', compact('cat'));
    }

    public function store(Request $request){

//        dd($request->all());

        $image = $request->file('topbar');
        if($image != '')
        {
            $request->validate([
                'judul'          => 'required',
                'content'        => 'required',
                'topbar'         =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/'), $image_name);
        }
        else
        {
            $request->validate([
                'judul'          => 'required',
                'content'        => 'required',
                'topbar'         =>  'image|max:2048|dimensions:width=1024, height=439'
            ]);
        }

        $blog = new Blog();
        $blog->judul = $request->input('judul');
        $blog->slug = str_slug($request->input('judul'));
        $blog->content = $request->input('content');
        $blog->user_id = Auth::user()->id;
        $blog->category_id = $request->input('category');
        $blog->topbar = $image_name;
        $blog->save();

        return redirect(route('blog.index'));

    }
}
