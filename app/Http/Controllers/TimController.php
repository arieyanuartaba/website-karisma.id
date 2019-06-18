<?php

namespace App\Http\Controllers;

use App\Tim;
use Illuminate\Http\Request;

class TimController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index(){

        $tims = Tim::all();

        return view('timkami', compact('tims'));
    }

    public function show(Tim $tim){

        return view('profil.board', compact('tim'));

    }

    public function listtim(){

        $list = Tim::all();

        return view('dashboard.tim.list', compact('list'));
    }

    public function edit(Tim $tim){

        return view('dashboard.tim.edit', compact('tim'));
    }

    public function update(Request $request, Tim $tim){

//        dd($request->all());

        $image_name = $request->hidden_image;
        $image = $request->file('image');
        $vitae = $request->file('vitae');
        if($image && $vitae != '')
        {
            $request->validate([
                'nama'          =>  'required',
                'jabatan'       =>  'required',
                'deskripsi'     =>  'required',
                'image'         =>  'image|max:2048|dimensions:width=1080, height=720',
                'vitae'         =>  'mimes:pdf|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/team/'), $image_name);
            $vitae_name = rand() . '.' . $vitae->getClientOriginalExtension();
            $vitae->move(public_path('cv/'), $vitae_name);
        }
        else if($vitae == ''){
            $request->validate([
                'nama'          =>  'required',
                'jabatan'       =>  'required',
                'deskripsi'     =>  'required',
                'image'         =>  'image|max:2048|dimensions:width=1080, height=720',
                'vitae'         =>  'mimes:pdf|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/team/'), $image_name);
            $vitae_name = null;
        }
        else
        {
            $request->validate([
                'nama'           =>  'required',
                'jabatan'        =>  'required',
                'deskripsi'      =>  'required',
                'image'          =>  'required'
            ]);
        }

        $form_data = array(
            'nama'               =>   $request->nama,
            'jabatan'            =>   $request->jabatan,
            'deskripsi'          =>   $request->deskripsi,
            'facebooksosmed'     =>   $request->lfb,
            'twittersosmed'      =>   $request->ltw,
            'instagramsosmed'    =>   $request->linst,
            'linkinsosmed'       =>   $request->lidn,
            'vitae'              =>   $vitae_name,
            'photo'              =>   $image_name
        );

        $tim->update($form_data);

        return redirect('/listtim')->with('success', 'Data is successfully updated');
    }


}
