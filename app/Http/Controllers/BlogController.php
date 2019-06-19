<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    public function firstpage(){

        $blog = Blog::first()->get()->take(1);
        dd($blog);
    }


    public function frontend(Blog $blog){

        $cats = Category::all();
        $recents = DB::table('blogs')->latest()->take(3)->get();
//        dd($recents);

        return view('news', compact('blog', 'recents', 'cats'));

    }

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
            $image->move(public_path('images/blog/'), $image_name);
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

    public function show(Blog $blog){


        return view('dashboard.blog.show', compact('blog', 'cats'));
    }

    public function edit(Blog $blog){

        $cat = Category::pluck('category', 'id');
        return view('dashboard.blog.edit', compact('blog', 'cat'));
    }

    public function update(Request $request, Blog $blog){

        $image = $request->file('topbar');
        if($image != '')
        {
            $request->validate([
                'judul'          => 'required',
                'content'        => 'required',
                'topbar'         =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/blog/'), $image_name);
        }
        else
        {
            $request->validate([
                'judul'          => 'required',
                'content'        => 'required',
                'topbar'         =>  'image|max:2048|dimensions:width=1024, height=439'
            ]);
        }

        $form_data = array(
            'judul'            =>   $request->input('judul'),
            'slug'             =>   str_slug($request->input('judul')),
            'content'          =>   $request->input('content'),
            'category_id'      =>   $request->input('category'),
            'topbar'           =>   $blog->topbar
        );

        $blog->update($form_data);

        return redirect(route('blog.index'));

    }

    public function destroy(Blog $blog){

        $blog->delete();

        return redirect(route('blog.index'));
    }
}
