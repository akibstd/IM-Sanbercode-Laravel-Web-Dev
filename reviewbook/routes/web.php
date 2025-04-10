<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;
use App\Http\Controllers\daftarController;
use SebaphpstianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [homeController::class,'home']);
Route::get('daftar', [daftarController::class,'pendaftaran']);
Route::post('/welcome',[daftarController::class,'welcome']);
Route::get('/master',function(){
    return view('layouts.master');
})
?>