<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BukuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/about', function () {
    return view('about', [
        "name" => "lala",
        "email" => "lala@gmail.com"
    ]);
});

Route::get('/coba', function () {
    return view('ini');
});

Route::get('/boom', [PostController::class, 'boomesport']);

Route::get('/prx', [PostController::class, 'prxesport']);
Route::get('/fnatic', [PostController::class, 'fnaticesport']);
Route::get('/fpx', [PostController::class, 'fpxesport']);
Route::get('/', [PostController::class, 'beranda']);

Route::get('/buku',[BukuController::class, 'index']);

Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('buku', [BukuController::class, 'store'])->name('buku.store');
Route::post('buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');
Route::get('buku/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');
Route::post('buku/update/{id}', [BukuController::class, 'update'])->name('buku.update');