<?php

namespace App\Http\Controllers;

use App\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index(){

        $all = Portofolio::all();

        return view('portofolio.index', compact('all'));
    }

    public function getall(){

        $portos = Portofolio::all();

        return view('dashboard.portofolio.all', compact('portos'));
    }

    public function create(){

        return view('dashboard.portofolio.create');
    }

    public function store(Request $request){

//        dd($request);
        $image_name = $request->hidden_image;
        $image = $request->file('gambar');
        if($image != '')
        {
            $request->validate([
                'title'         =>  'required|max:30',
                'subtitle'      =>  'required|max:80',
                'kategori'      =>  'required',
                'gambar'        =>  'image|max:2048|dimensions:width=1000, height=1000'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/selection/'), $image_name);
        }
        else
        {
            $request->validate([
                'title'        =>  'required',
                'subtitle'     =>  'required',
                'kategori'     =>  'required'
            ]);
        }

        $form_data = array(
            'title'            =>   $request->title,
            'subtitle'         =>   $request->subtitle,
            'kategori'         =>   $request->kategori,
            'gambar'            =>   $image_name
        );

        Portofolio::create($form_data);

        return redirect(route('porto.index'));
    }

    public function destroy(Portofolio $portofolio){

        $portofolio->delete();

        return redirect(route('porto.index'));
    }
}
