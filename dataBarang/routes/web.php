<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('layouts.beranda');
});

Route::get('/home', function () {
    return view('layouts.master');
});

route::view('/about','layouts.about')->name('about');
route::view('/contact','layouts.contak')->name('about');

Route::get('/beranda', function () {
    return view('layouts.beranda');
});

//  satu controler bisa punya banya method
Route::get('/product',[ProdukController::class,'index'] )->name('index'); // menampilkan data

Route::get('/product/create',[ProdukController::class,'create']  )->name('create'); // menirim data ke form
Route::post('/product',[ProdukController::class,'store'] )->name('store');  // mengolah data ke form tambahs


Route::get('/product/{id}',[ProdukController::class,'show'] ); // membuat halaman detail

Route::get('/product/{id}/edit',[ProdukController::class,'edit']);
Route::put('/product/{id}',[ProdukController::class,'update']);

Route::delete('/product/{id}/destroy',[ProdukController::class,'destroy']);


