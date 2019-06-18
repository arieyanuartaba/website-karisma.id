<?php

namespace App\Http\Controllers;

use App\Perusahaan;
use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){


      $produks = Produk::paginate(10);

        return view('dashboard.output.index', compact('produks'));
//            ->with('index', ($request->input('page', 1) - 1) * 10);
    }

    public function create(){

        $perusahaan = Perusahaan::pluck('namaperusahaan', 'id');

        return view('dashboard.output.create', compact('perusahaan'));
    }

    public function store(Request $request){

         $form_data = $this->validate($request, [
            'produk' => 'required|max:40',
            'deskripsi' => 'required',
            'perusahaan_id' => 'required|int'
        ]);

        Produk::create($form_data);

        return redirect(route('output.index'));

    }

    public function edit(Produk $produk){

        $perusahaan = Perusahaan::pluck('namaperusahaan', 'id');

        return view('dashboard.output.edit', compact('produk', 'perusahaan'));
    }

    public function update(Request $request, Produk $produk){

        $form_data = $this->validate($request, [
            'produk' => 'required|max:70',
            'deskripsi' => 'required',
            'perusahaan_id' => 'required|int'
        ]);

        $produk->update($form_data);

        return redirect(route('output.index'));
    }

    public function destroy(Produk $produk){

//        dd($produk);
        $produk->delete();

        return redirect(route('output.index'));

    }
}
