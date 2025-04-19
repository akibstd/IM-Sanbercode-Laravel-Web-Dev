<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\daftarController;
use App\Http\Controllers\genreController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;

use GuzzleHttp\Promise\Create;
use SebaphpstianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [homeController::class, 'home']);
Route::get('daftar', [daftarController::class, 'pendaftaran']);
Route::post('/welcome', [daftarController::class, 'welcome']);
Route::get('/master', [daftarController::class, 'welcome']);


Route::middleware(['auth', IsAdmin::class])->group(function () {
  //update data
  Route::get('/genre/create', [genreController::class, 'create']);
  Route::post('/genre', [genreController::class, 'store']);
  //update
  Route::get('/genre/{id}/edit', [genreController::class, 'edit']);
  Route::put('/genre/{id}', [genreController::class, 'update']);

  //delete
  Route::delete('/genre/{id}', [genreController::class, 'destroy']);
});



//read data 
Route::get('/genre', [genreController::class, 'index']);
Route::get('/genre/{id}', [genreController::class, 'show']);


// update data

// crud books
Route::get('books/tambah', [BooksController::class, 'create'])->name('books.tambah');;
Route::resource('books', BooksController::class);



//auth
Route::get('/register', [AuthController::class, 'showregister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showlogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout']);
