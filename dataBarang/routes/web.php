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
Route::get('/product',[ProdukController::class,'getProduk']  )->name('product');
Route::get('/product/tambah',[ProdukController::class,'addProduk']  )->name('tambah/product');


