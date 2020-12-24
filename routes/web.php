<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
/*

Route::redirect('/anasayfa', '/home')->name('anasayfa');
*/
//controllere ihtiyac yoksa
Route::get('/', function () {
    return view('home.index');
});

Route::get('/services', function () {
    return view('layouts.services');
});

Route::get('/about', function () {
    return view('layouts.about');
});
/*
//Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/test/{id}', [HomeController::class, 'test'])->where('id', '[0-9]+');
//string icin
//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/
