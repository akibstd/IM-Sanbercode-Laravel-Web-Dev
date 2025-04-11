<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\daftarController;
use App\Http\Controllers\genresController;
use GuzzleHttp\Promise\Create;
use SebaphpstianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [homeController::class,'home']);
Route::get('daftar', [daftarController::class,'pendaftaran']);
Route::post('/welcome',[daftarController::class,'welcome']);
Route::get('/master',function(){
    return view('layouts.master');

   
});
Route::get('/genre/create',[genresController::class,'create']);
Route::post('/genre',[genresController::class,'store']);


?>