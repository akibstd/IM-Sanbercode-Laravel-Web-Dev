<?php

use Illuminate\Support\Facades\Route;
use App\Http\Request\PegawaiController;

Route::get('/',[PegawaiController::class,'pegawai'] );
?>
