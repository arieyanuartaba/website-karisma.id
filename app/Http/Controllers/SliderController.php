<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $sliders = Slider::all();

        return view('dashboard.slider.index', compact('sliders'));
    }

    public function show(Slider $slider){
        return redirect('/slider');
    }

    public function edit(Slider $slider){

//        $data = Slider::findOrFail($id);

        return view('dashboard.slider.form', compact('slider'));

    }

    public function update(Request $request, Slider $slider){

//        dd($request->all());

        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'header'    =>  'required|max:30',
                'subheader'     =>  'required|max:80',
                'image'         =>  'image|max:2048|dimensions:width=1024, height=439'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/'), $image_name);
        }
        else
        {
            $request->validate([
                'header'    =>  'required',
                'subheader'     =>  'required'
            ]);
        }

        $form_data = array(
            'header'       =>   $request->header,
            'subheader'        =>   $request->subheader,
            'image'            =>   $image_name
        );

        $slider->update($form_data);

        return redirect('/slider')->with('success', 'Data is successfully updated');
    }
}
