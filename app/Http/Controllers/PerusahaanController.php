<?php

namespace App\Http\Controllers;

use App\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['show']);
    }

    public function index()
    {
        $perusahaans = Perusahaan::all();

        return view('dashboard.perusahaan.index', compact('perusahaans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.perusahaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());

        $logo_name = $request->hidden_logo;
        $logo = $request->file('logo');
        if($logo != '')
        {
            $request->validate([
                'namaperusahaan'    =>  'required',
                'deskripsi'         =>  'required',
                'logo'              =>  'image|mimes:png|max:2048|dimensions:max_width=300, max_height=300'
            ]);

            $logo_name = rand() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('images/logo/'), $logo_name);
        }
        else
        {
            $request->validate([
                'namaperusahaan'    =>  'required',
                'deskripsi'         =>  'required',
                'logo'              =>  'image|mimes:png|max:2048|dimensions:max_width=300, max_height=300'
            ]);
        }

        $form_data = array(
            'namaperusahaan'       =>   $request->namaperusahaan,
            'deskripsi'            =>   $request->deskripsi,
            'logo'                 =>   $logo_name
        );

        Perusahaan::create($form_data);

        return redirect('/perusahaan')->with('success', 'Data is successfully updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function show(Perusahaan $perusahaan)
    {
        $getall = Perusahaan::all();

        return view('group.group', compact('perusahaan', 'getall'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perusahaan $perusahaan)
    {
        return view('dashboard.perusahaan.edit', compact('perusahaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perusahaan $perusahaan)
    {
        $logo_name = $request->hidden_logo;
        $logo = $request->file('logo');
        if($logo != '')
        {
            $request->validate([
                'namaperusahaan'    =>  'required',
                'deskripsi'         =>  'required',
                'logo'              =>  'required|image|mimes:png|max:2048|dimensions:max_width=300, max_height=300'
            ]);

            $logo_name = rand() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('images/logo/'), $logo_name);
        }
        else
        {
            $request->validate([
                'namaperusahaan'    =>  'required',
                'deskripsi'         =>  'required',
                'logo'              =>  'required|image|mimes:png|max:2048|dimensions:max_width=300, max_height=300'
            ]);
        }

        $form_data = array(
            'namaperusahaan'       =>   $request->namaperusahaan,
            'deskripsi'            =>   $request->deskripsi,
            'logo'                 =>   $logo_name
        );

        $perusahaan->update($form_data);

        return redirect('/perusahaan')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perusahaan $perusahaan)
    {
        $perusahaan->delete();

        return redirect(route('perusahaan.index'));
    }
}
