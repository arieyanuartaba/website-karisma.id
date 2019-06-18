<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');


Route::get('/tentang', function () {
    return view('tentangKami');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/nilaiperusahaan', function () {
    return view('nilaiperusahaan');
});

Route::get('/timkami', 'TimController@index' );
Route::get('/profil/{tim}', 'TimController@show');
Route::get('/listtim', 'TimController@listtim');
Route::get('tim/{tim}/edit',['as' => 'tim.edit', 'uses' => 'TimController@edit']);
Route::patch('tim/{tim}', ['as' => 'tim.update', 'uses' => 'TimController@update']);

Route::get('/profil', function () {
    return view('profil.board');
});



Route::get('/group', function () {
    return view('group.group');
});

Route::get('/perusahaan', ['as' => 'perusahaan.index', 'uses' => 'PerusahaanController@index']);
Route::get('/perusahaan/create', ['as' => 'perusahaan.create', 'uses' => 'PerusahaanController@create']);
Route::post('/perusahaan', ['as' => 'perusahaan.store', 'uses' => 'PerusahaanController@store']);
Route::get('/group/{perusahaan}', 'PerusahaanController@show');
Route::get('/perusahaan/{perusahaan}/edit', ['as' => 'perusahaan.edit', 'uses' => 'PerusahaanController@edit']);
Route::Patch('/perusahaan/{perusahaan}', ['as' => 'perusahaan.update', 'uses' => 'PerusahaanController@update']);
Route::delete('/perusahaan/{perusahaan}', ['as' => 'perusahaan.destroy', 'uses' => 'PerusahaanController@destroy']);

Route::get('/portofolio', 'PortofolioController@index');



Auth::routes((['register' => false]));


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
//Route::get('/slider', 'SliderController@index');
//Route::get('/slider/{slider}', 'SliderController@edit');
//Route::patch('/slider/{slider}', 'SliderController@update');
Route::resource('slider', 'SliderController');

Route::get('/output', ['as' => 'output.index', 'uses' => 'ProdukController@index']);
Route::get('/output/create', ['as' => 'output.create', 'uses' => 'ProdukController@create']);
Route::post('/output', ['as' => 'output.store', 'uses' => 'ProdukController@store']);
Route::get('/output/{produk}/edit', ['as' => 'output.edit', 'uses' => 'ProdukController@edit']);
Route::patch('/output/{produk}', ['as' => 'output.update', 'uses' => 'ProdukController@update']);
Route::delete('/output/{produk}', ['as' => 'output.destroy', 'uses' => 'ProdukController@destroy']);

Route::get('/theportopolio', ['as' => 'porto.index', 'uses' => 'PortofolioController@getall']);
Route::get('/theportopolio/create', ['as' => 'porto.create', 'uses' => 'PortofolioController@create']);
Route::post('/theportopolio', ['as' => 'porto.store', 'uses' => 'PortofolioController@store']);
Route::delete('/theportopolio/{portofolio}', ['as' => 'porto.destroy', 'uses' => 'PortofolioController@destroy']);

Route::get('/dashboard/blog', ['as' => 'blog.index', 'uses' => 'BlogController@index']);
Route::get('/blog/create', ['as' => 'blog.create', 'uses' => 'BlogController@create']);
Route::post('/blog', ['as' => 'blog.store', 'uses' => 'BlogController@store']);
