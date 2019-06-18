<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slider1 = Slider::findOrFail(1);
        $slider2 = Slider::findOrFail(2);
        $slider3 = Slider::findOrFail(3);

        return view('home', compact('slider1', 'slider2', 'slider3'));
    }
}
